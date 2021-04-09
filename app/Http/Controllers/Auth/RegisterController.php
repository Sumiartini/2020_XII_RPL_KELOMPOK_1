<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Students;
use App\Teachers;
use App\Staffs;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;
use App\StudentRegistration;
use App\StudentPayments;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function selectRegistration()
    {
        return view('auth.register');
    }
    
    public function registerStudent()
    {
        return view('auth.register-student');
    }

    public function registerTeacher()
    {
        return view('auth.register-teacher');
    }

    public function registerStaff()
    {
        return view('auth.register-staff');
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usr_name' => ['required', 'string', 'max:255'],
            'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            //untuk pattern regex email bila butuh 'regex:/(.*)@gmail|yahoo\.com/i'
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'usr_phone_number' => ['required', 'min:10','regex:/^([0-9\s\-\+\(\)]*)$/']
        ],
        [
            'usr_email.unique' => 'User Email Sudah Digunakan'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'usr_name' => $data['usr_name'],
            'usr_email' => $data['usr_email'],
            'usr_phone_number' => $data['usr_phone_number'],
            'usr_password' => Hash::make($data['password']),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
            'usr_is_regist' => false,
            
        ]);            

        if ($data['role'] == 1) {
            $student = Students::create([
                'stu_user_id'             => $user->usr_id,
            ]);
            $student_registration = StudentRegistration::create([
                'str_student_id'    => $student->stu_id,
                'str_status'        => false,
            ]);
            $student_payment = StudentPayments::create([
                'stp_student_id'                 => $student->stu_id,
                'stp_payment_status'             => false,
            ]);

            $user->assignRole('student');
            $user->created_by = $user->usr_id;
        } elseif ($data['role'] == 2) {
            $teacher = Teachers::create([
                'tcr_registration_status' => false,
                'tcr_user_id'             => $user->usr_id,
            ]);
            $user->assignRole('teacher');
            $user->created_by = $user->usr_id;
        } elseif ($data['role'] == 3) {
            $staff = Staffs::create([
                'stf_registration_status' => false,
                'stf_user_id'             => $user->usr_id,
            ]);
            $user->assignRole('staff');
            $user->created_by = $user->usr_id;
        }


        Mail::to($data['usr_email'])->send(new SendMail($user));
        return $user;
    }
}
