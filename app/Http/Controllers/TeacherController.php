<?php

namespace App\Http\Controllers;

use App\Teachers;
use App\TeacherDetails;
use App\User;
use App\Provinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AddTeacher;

class TeacherController extends Controller
{
    public function list_prospective()
    {
        return view('teachers.list-teacher-prospective');
    }

    public function list_rejected()
    {
        return view('teachers.list-teacher-rejected');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Provinces::select('prv_id', 'prv_name')->get();
        return view('teachers.add-teacher', ['province' => $province]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $requests = $request->input();
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        $request->validate([
            'usr_name'                                          => 'required',
            'usr_email'                                         => 'required | unique:users,usr_email',
            'usr_phone_number'                                  => 'required',
            'usr_gender'                                        => 'required',            
            'usr_whatsapp_number'                               => 'required | unique:users,usr_whatsapp_number',
            'usr_place_of_birth'                                => 'required',
            'usr_date_of_birth'                                 => 'required',
            'usr_religion'                                      => 'required',
            'prv_name'                                          => 'required',
            'cit_name'                                          => 'required',
            'dst_name'                                          => 'required',
            'usr_address'                                       => 'required',
            'usr_postal_code'                                   => 'required',
            'usr_rt'                                            => 'required',
            'usr_rw'                                            => 'required',
            'usr_rural_name'                                    => 'required',
            'usr_profile_picture'                               => 'required',
            'personal.nik'                                      => 'required',
            'educational_background.year_grade_school'          => 'required',
            'educational_background.grade_school'               => 'required',
            'educational_background.year_junior_high_school'    => 'required',
            'educational_background.junior_high_school'         => 'required',
            'educational_background.year_senior_high_school'    => 'required',
            'educational_background.senior_high_school'         => 'required',
            'educational_background.year'                       => 'required',
            'educational_background.college'                    => 'required',
            'educational_background.faculty_name'               => 'required',
            'educational_background.faculty_major'              => 'required',
            'educational_background.year'                       => 'required',
            'educational_background.degree'                     => 'required',
            'other.identity_card'                               => 'required',
            'other.family_card'                                 => 'required',
            'other.senior_high_school_diploma'                  => 'required',
            'other.curriculum_vitae'                            => 'required',
            'other.application_letter'                          => 'required',
            'other.resume'                                      => 'required',
            
        ], $messages);

        $user                       = new User;
        $user->usr_name             = $request->usr_name;
        $user->usr_email            = $request->usr_email;
        $user->usr_phone_number     = $request->usr_phone_number;
        $rand_string                = substr(str_shuffle('abcdefghijklmnopqrtcrvwxyz'), 0, 6);
        $rand_int                   = substr(str_shuffle('0123456789'), 0, 4);
        $rand_password              = $rand_string . $rand_int;
        $user->usr_password         = Hash::make($rand_password);
        $user->usr_gender           = $request->usr_gender;
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_district_id      = $request->dst_name;
        $user->usr_address          = $request->usr_address;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_is_regist        = '1';
        $user->usr_is_active        = '1';
        $user->usr_email_verified_at = now();
        $user->usr_created_by       = Auth()->user()->usr_id;
        $user->assignRole('teacher');
        Mail::to($user['usr_email'])->send(new Addteacher($user,$rand_password));

        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('images/users_profile');
            $files_name = 'images' . '/' . 'users_profile' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }

        if ($user->save()) {
            $teacher                            = new Teachers;            
            $teacher->tcr_user_id               = $user->usr_id;
            $teacher->tcr_nuptk                 = $request->tcr_nuptk;
            $teacher->tcr_entry_year            = $request->tcr_entry_year;
            $teacher->tcr_registration_status   = 1;
            $teacher->tcr_created_by = Auth()->user()->usr_id;

            if ($teacher->save()) {
                foreach ($requests as $key => $requetcdata) {
                    if (is_array($requetcdata)) {
                        foreach ($requetcdata as $requestKey => $requestValue) {
                            // dd($requests, $request, $requetcdata, $requestKey, $requestValue, $key);                            
                            $teacherDetail = new TeacherDetails;
                            $teacherDetail->tcd_teacher_id = $teacher->tcr_id;
                            $teacherDetail->tcd_type       = $key;
                            $teacherDetail->tcd_key        = $requestKey;
                            $teacherDetail->tcd_value      = $requestValue;
                            $teacherDetail->tcd_created_by = Auth()->user()->usr_id;
                            $teacherDetail->save();
                        }
                    }
                }
            } else {
                dd('gagal teacher ');
            }
            $images = $request->file('other');
            // dd($image);
            if ($images) {
                foreach ($images as $key => $image) {
                    // dd($images, $key, $image);
                    if ($image) {
                        $path = public_path('images/teacher_files');
                        $files_name = 'images' .'/'. 'teacher_files' .'/'. date('Ymd') . '_' . $image->getClientOriginalName();
                        // dd($images);
                        $image->move($path, $files_name);
                        $teacherDetail = new TeacherDetails;
                        $teacherDetail->tcd_teacher_id = $teacher->tcr_id;
                        $teacherDetail->tcd_type       = 'other';
                        $teacherDetail->tcd_key        = $key;
                        $teacherDetail->tcd_value      = $files_name;
                        $teacherDetail->tcd_created_by = Auth()->user()->usr_id;
                        $teacherDetail->save();
                    }
                }
            }
        } else {
            dd('gagal user');
        }
        return redirect('/teachers')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show_teacher($teacherID)
    {
        $teacher = new Teachers;
        $teacher = $teacher->getTeacherDetail($teacherID);
        $user = User::join('districts', 'districts.dst_id', '=', 'users.usr_district_id')
        ->join('cities', 'cities.cit_id', '=', 'districts.dst_city_id')
        ->join('provinces', 'provinces.prv_id', '=', 'cities.cit_province_id')
        ->select('users.*', 'districts.*', 'cities.*', 'provinces.*')
        ->where('usr_id', $teacher->usr_id)
        ->get();
        return view('teachers.detail-teacher', ['teacher' => $teacher, 'user' => $user]);
    }
    public function show_prospective($teacherID)
    {
        $teacher_prospective = new Teachers;
        $teacher_prospective = $teacher_prospective->getTeacherProsvectiveDetail($teacherID);
        //dd($teacher_prospective);
        return view('teachers.detail-teacher-prospective', ['teacher_prospective' => $teacher_prospective]);
    }
    public function show_rejected($teacherID)
    {
        $teacher_rejected = new Teachers;
        $teacher_rejected = $teacher_rejected->getTeacherRejectedDetail($teacherID);
        // dd($teacher_rejected);
        return view('teachers.detail-teacher-rejected', ['teacher_rejected' => $teacher_rejected]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachers $teachers)
    {
        return view('teachers.edit-teacher');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teachers $teachers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachers $teachers)
    {
        return 'data terhapus';
    }

    public function formRegistrasion()
    {
        $user = Auth::user();
        $teacher = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        -> where('teachers.tcr_user_id', Auth::user()->usr_id)->first();


        if ($user->usr_is_regist == 0 && $user->hasRole('teacher')) {            
            $province = Provinces::select('prv_id', 'prv_name')->get();
            return view('teachers.registration-teacher', ['province' => $province]);
        }else{
            return redirect('/pending-verification'.$teacher->tcr_id);
        }
        
    }
    public function storeFormRegistrasion(Request $request)
    {
        //dd($request, "MASUK KE HALAMAN MENUNGGU KEPUTUSAN DAN INFO PEMBAYARAN");
        // dd($request);
        $requests = $request->input();
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        $request->validate([
            'usr_name'                                          => 'required',
            'usr_place_of_birth'                                => 'required',
            'usr_date_of_birth'                                 => 'required',
            'usr_religion'                                      => 'required',
            'usr_gender'                                        => 'required',            
            'usr_whatsapp_number'                               => 'required | unique:users,usr_whatsapp_number',
            'usr_profile_picture'                               => 'required',
            'prv_name'                                          => 'required',
            'cit_name'                                          => 'required',
            'dst_name'                                          => 'required',
            'usr_address'                                       => 'required',
            'usr_rt'                                            => 'required',
            'usr_rw'                                            => 'required',
            'usr_rural_name'                                    => 'required',
            'usr_postal_code'                                   => 'required',
            'educational_background.year_grade_school'          => 'required',
            'educational_background.grade_school'               => 'required',
            'educational_background.year_junior_high_school'    => 'required',
            'educational_background.junior_high_school'         => 'required',
            'educational_background.year_senior_high_school'    => 'required',
            'educational_background.senior_high_school'         => 'required',
            'educational_background.year_entry'                 => 'required',
            'educational_background.college'                    => 'required',
            'educational_background.faculty_name'               => 'required',
            'educational_background.faculty_major'              => 'required',
            'educational_background.year_graduated'             => 'required',
            'educational_background.degree'                     => 'required',
            'other.identity_card'                               => 'required',
            'other.family_card'                                 => 'required',
            'other.scholar_diploma'                             => 'required',
            'other.curriculum_vitae'                            => 'required',
            'other.application_letter'                          => 'required',
            'other.resume'                                      => 'required',
            
        ], $messages);
        // dd("Kesini");
        $teacher = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        ->where('teachers.tcr_user_id', Auth::user()->usr_id)->first();
        $user = Auth()->user();
        $user->usr_name             = $request->usr_name;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_gender           = $request->usr_gender;        
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_district_id      = $request->dst_name;
        $user->usr_address          = $request->usr_address;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_is_regist        = '1';

        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('images/users_profile');
            $files_name = 'images' . '/' . 'users_profile' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }

        if ($user->update()) {
            $teacher->tcr_nuptk                 = $request->tcr_nuptk;
            $teacher->tcr_registration_status   = "0";
            $teacher->tcr_created_by = Auth()->user()->usr_id;

            if ($teacher->update()) {
                foreach ($requests as $key => $requetcdata) {
                    if (is_array($requetcdata)) {
                        foreach ($requetcdata as $requestKey => $requestValue) {
                            // dd($requests, $request, $requetcdata, $requestKey, $requestValue, $key);                            
                            $teacherDetail = new TeacherDetails;
                            $teacherDetail->tcd_teacher_id = $teacher->tcr_id;
                            $teacherDetail->tcd_type       = $key;
                            $teacherDetail->tcd_key        = $requestKey;
                            $teacherDetail->tcd_value      = $requestValue;
                            $teacherDetail->tcd_created_by = Auth()->user()->usr_id;
                            $teacherDetail->save();
                        }
                    }
                }
            } else {
                dd('gagal teacher ');
            }
            $images = $request->file('other');
            // dd($image);
            if ($images) {
                foreach ($images as $key => $image) {
                    // dd($images, $key, $image);
                    if ($image) {
                        $path = public_path('images/teacher_files');
                        $files_name = 'images' .'/'. 'teacher_files' .'/'. date('Ymd') . '_' . $image->getClientOriginalName();
                        // dd($images);
                        $image->move($path, $files_name);
                        $teacherDetail = new TeacherDetails;
                        $teacherDetail->tcd_teacher_id = $teacher->tcr_id;
                        $teacherDetail->tcd_type       = 'other';
                        $teacherDetail->tcd_key        = $key;
                        $teacherDetail->tcd_value      = $files_name;
                        $teacherDetail->tcd_created_by = Auth()->user()->usr_id;
                        $teacherDetail->save();
                    }
                }
            }
        } else {
            dd('gagal user');
        }
        return redirect('/pending-verification/' . $teacher->tcr_id);

    }

    public function receipted($tcr_id)
    {
        $teacher = Teachers::findOrFail($tcr_id);
        $teacher->tcr_registration_status = '1';
        $teacher->update();
        return back()->with('success', 'Guru berhasil diterima');
    }

    public function rejected($tcr_id)
    {
        $teacher = Teachers::findOrFail($tcr_id);
        
        $teacher->tcr_registration_status = '2';
        $teacher->update();

        return back()->with('success', 'Guru berhasil ditolak');
    }

    public function restore($tcr_id)
    {
        $teacher = Teachers::findOrFail($tcr_id);
        $user = User::where('usr_id', $teacher->tcr_user_id)->first();

        $user->usr_is_active = '1';
        $user->update();

        $teacher->tcr_registration_status = '0';
        $teacher->update();

        return back()->with('success', 'Guru berhasil dikembalikan menjadi calon Guru');
    }
}
