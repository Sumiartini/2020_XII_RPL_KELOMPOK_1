<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Students;
use App\Teachers;
use App\Staffs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;


class AccountController extends Controller
{
    public function verifyToken($userID, $verifyToken)
    {

        $user = User::where('usr_id', $userID)->where('usr_verification_token', $verifyToken)->firstOrFail();
        if ($user) {
            $user->usr_email_verified_at = now();
            $user->save();
            return redirect('/dashboard')->with(['success' => 'Selamat akun anda berhasil di verifikasi']);;
        }
    }

    public function waitingVerification()
    {

        if (Auth::user()->usr_email_verified_at == null) {
            return view('auth/verify');
        } else {
            return redirect('/dashboard');
        }
    }

    public function resendVerification()
    {

        $user = Auth::user();
        Mail::to($user['usr_email'])->send(new SendMail($user));
        return redirect()->back()->with(['success' => 'Email verifikasi berhasil dikirim ulang']);
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendEmailForgotPassword(Request $request)
    {
        $request->validate([
            'usr_email' => 'required|email'
        ],
        [
            'usr_email.required' => 'Alamat Email Tidak Boleh Kosong'
        ]);

        $users = User::whereUsrEmail($request->usr_email)->first();
        if ($users == false) {
            return redirect()->back()->with(['error' => 'Email Tidak Terdaftar']);
        } elseif ($users->usr_email_verified_at == false) {
            return redirect()->back()->with(['error' => 'Akun Belum di Verifikasi']);
        }

        DB::table('password_resets')->insert([
            'pwr_email' => $request->usr_email,
            'pwr_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'pwr_created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')->where('pwr_email', $request->usr_email)->first();

        Mail::to($tokenData->pwr_email)->send(new forgotPassword($tokenData->pwr_token, $users));
        return redirect()->back()->with(['success' => 'Reset Password Kode di Kirim ke Email']);
    }

    public function verifyForgotToken($resetVerificationToken)
    {
        $resetPassword = DB::table('password_resets')->where('pwr_token', $resetVerificationToken)->first();
        if (!$resetPassword) {
            return redirect('account/forgot-password')->with(['errors', 'Maaf alamat link sudah digunakan']);
        }
        return view('auth.reset-password', compact('resetPassword'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
        ->where(['pwr_email' => $request->pwr_email, 'pwr_token' => $request->pwr_token])
        ->first();

        if (!$updatePassword)
            dd("kesini");

        $user = User::where('usr_email', $request->pwr_email)
        ->update(['usr_password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['pwr_email' => $request->pwr_email])->delete();

        return redirect('/login')->with(['success' => 'Password Anda Berhasil di Updated']);
    }
    public function editPassword()
    {
        return view('auth.edit-password');
    }
    public function storeEditPassword(Request $request)
    {
        $messages = [
            'required'  =>'Kolom wajib diisi',
            'min'       => 'Kata Sandi Minimal 8 Karakter',
            'same'      => 'Kata Sandi Wajib Sama Ketika Di Ulangi',
        ];

        $request->validate([
            'current_password'            => ['required', 'string', 'min:8'],
            'new_password'                => ['required', 'min:8', 'string', 'same:confirm_new_password'],
            'confirm_new_password'        => ['required', 'min:8', 'string', 'same:new_password'],            
        ], $messages);

        $user = Auth()->user();
        $usr_password       = $user->usr_password;
        if (Hash::check($request->current_password, $usr_password)) {
            $user->usr_password = Hash::make($request->new_password);

            if ($user->update()) {
                return redirect('/account/profile/1/edit-password')->with(['success' => 'Kata sandi anda berhasil di rubah']);;
            } else{
                dd('gagal');    
            }
        } else {
            return redirect('/account/profile/1/edit-password')->with(['failed' => 'Masukkan kata sandi lama dengan benar']);;
        }
    }

    public function profile($usr_id){
        $user = User::find($usr_id);
        return view('profile.index',['user' => $user]);
    }

    public function editProfile($usr_id)
    {
        $user = User::find($usr_id);
        return view('profile.edit',['user' => $user]);
    }
    public function storeEditProfile(Request $request)
    {
        // dd($request);
        $user = Auth()->user();

        $user->usr_name             = $request->usr_name;
        $user->usr_gender           = $request->usr_gender; 
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_address          = $request->usr_address;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;

        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('images/users_profile');
            $files_name = 'images' . '/' . 'users_profile' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }
        
        $user->update();

        return redirect('/account/profile/'.$user->usr_id)->with(['success' => 'Data profil anda berhasil di simpan']);;

    }

    public function pending_verification($userID)
    {
        // dd($userID);
        $user = Auth::user();
           
        if ($user->hasRole('student')) {
            if ($user->usr_is_regist == 1) { 
                $student_prospective = new Students;
                $student_prospective = $student_prospective->getStudentProsvectiveDetail($userID);        
                $student = User::join('districts', 'districts.dst_id', '=', 'users.usr_district_id')
                ->join('cities', 'cities.cit_id', '=', 'districts.dst_city_id')
                ->join('provinces', 'provinces.prv_id', '=', 'cities.cit_province_id')
                ->select('users.*', 'districts.*', 'cities.*', 'provinces.*')
                ->where('usr_id', $student_prospective->usr_id)
                ->get();
                   
                return view('students/waiting-registration', ['student_prospective' => $student_prospective, 'student' => $student]);
            }else{
                return redirect('/student-registration');
            }
        }elseif ($user->hasRole('staff')) {
            if ($user->usr_is_regist == 1) {
                    $staff_prospective = new Staffs;
                $staff_prospective = $staff_prospective->getStaffProsvectiveDetail($userID);        
                $staff = User::join('districts', 'districts.dst_id', '=', 'users.usr_district_id')
                ->join('cities', 'cities.cit_id', '=', 'districts.dst_city_id')
                ->join('provinces', 'provinces.prv_id', '=', 'cities.cit_province_id')
                ->select('users.*', 'districts.*', 'cities.*', 'provinces.*')
                ->where('usr_id', $staff_prospective->usr_id)
                ->get();

                return view('staffs/waiting-registration', ['staff_prospective' => $staff_prospective, 'staff' => $staff]);
            }else{
                return redirect('/staff-registration');
            }   
        }elseif ($user->hasRole('teacher')) {
            if ($user->usr_is_regist == 1) {
                $teacher_prospective = new Teachers;
                $teacher_prospective = $teacher_prospective->getTeacherProsvectiveDetail($userID);        
                $teacher = User::join('districts', 'districts.dst_id', '=', 'users.usr_district_id')
                ->join('cities', 'cities.cit_id', '=', 'districts.dst_city_id')
                ->join('provinces', 'provinces.prv_id', '=', 'cities.cit_province_id')
                ->select('users.*', 'districts.*', 'cities.*', 'provinces.*')
                ->where('usr_id', $teacher_prospective->usr_id)
                ->get();            
                 return view('teachers/waiting-registration', ['teacher_prospective' => $teacher_prospective, 'teacher' => $teacher]);
            }else{
                return redirect('/teacher-registration');
            }
        }
    }

    public function edit_status($usr_id)
    {
        $user = User::findOrFail($usr_id);
        
        if ($user->usr_is_active == '1') {
            $user->usr_is_active = '0';
            $user->update();
            return back()->with('success', 'Akun berhasil di non aktifkan');
        }else{
            $user->usr_is_active = '1';
            $user->update();
            return back()->with('success', 'Akun berhasil di aktifkan');
        }   
    }
}
