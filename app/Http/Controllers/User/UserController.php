<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Students;
use App\Teachers;
use App\Staffs;
use App\StudentRegistration;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $student = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id') 
        -> join('student_registrations','student_registrations.str_student_id','=','students.stu_id')
        -> where('students.stu_user_id' , Auth::user()->usr_id)->first();
        // dd($student);
        $teacher = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        -> where('teachers.tcr_user_id', Auth::user()->usr_id)->first();
        $staff = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
        -> where('staffs.stf_user_id', Auth::user()->usr_id)->first();
        $user = Auth()->user();

        if ($user->usr_is_active == false) {
            Auth::logout();
            return redirect()->back()->with(['error' => 'Akun anda di Non Aktifkan, hubungi admin untuk mengaktifkan akun anda']);
        }
        
        

        //siswa
        $students = Students::join('student_registrations','student_registrations.str_student_id','=','students.stu_id')->where('str_status', 1)->orWhere('str_status', 6)->count();
        $students_rejected = Students::join('student_registrations','student_registrations.str_student_id','=','students.stu_id')->where('str_status', 2)->count();
        $students_prospective = Students::join('student_registrations','student_registrations.str_student_id','=','students.stu_id')->where('str_status', 0)->count(); 
        $students_moves = Students::join('student_registrations','student_registrations.str_student_id','=','students.stu_id')->where('str_status', 4)->count();
        $students_drop_outs = Students::join('student_registrations','student_registrations.str_student_id','=','students.stu_id')->where('str_status', 3)->count(); 
       //guru
        $teachers = Teachers::where('tcr_registration_status', 1)->count();
        $teachers_rejected = Teachers::where('tcr_registration_status', 2)->count();
        $teachers_prospective = Teachers::where('tcr_registration_status', 0)->count();

        //staff
        $staffs = Staffs::where('stf_registration_status', 1)->count();
        $staffs_rejected = Staffs::where('stf_registration_status', 2)->count();
        $staffs_prospective = Staffs::where('stf_registration_status', 0)->count();


        if ($user->hasRole('student')) {
            if ($student->str_status == '0' ) {
                return redirect('student-registration');    
            }
            elseif ($student->str_status == '1' || '6') {
                return view('dashboard', compact('students','teachers','staffs'));
            }
            elseif ($student->str_status == '2' ) {
                return view('students.student-rejected', compact('student'));
            }
            
        } elseif ($user->hasRole('teacher')) {
            if ($teacher->tcr_registration_status == '0') {
                return redirect('teacher-registration');
            }
            elseif ($teacher->tcr_registration_status == '1') {
                return view('dashboard', compact('students','teachers','staffs'));
            }
            elseif ($teacher->tcr_registration_status == '2') {
                return view('teachers.teacher-rejected');
            }

        } elseif ($user->hasRole('staff')) {
            if ($staff->stf_registration_status == '0') {
                return redirect('staff-registration');
            }
            elseif ($staff->stf_registration_status == '1') {
                return view('dashboard', compact('students', 'students_rejected', 'students_prospective', 'students_moves', 'students_drop_outs', 'teachers','staffs','staffs_prospective','staffs_rejected','teachers_prospective','teachers_rejected'));
            }
               if ($staff->stf_registration_status == '2') {
                return view('staffs.staff-rejected');
            }
            
        } elseif ($user->hasRole('admin')) {
            return view('dashboard', compact('students', 'students_rejected', 'students_prospective', 'students_moves', 'students_drop_outs', 'teachers','staffs','staffs_prospective','staffs_rejected','teachers_prospective','teachers_rejected'));
        } else {
            abort(404);
        }

        // return view('dashboard',);
    }

   public function downloadFile()
    {
        $pdf = ("download/smkmahaputra-info20201101.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'smkmahaputra-info-'.time().'.pdf';
        return response()->download($pdf, $newName, $headers);
    }

    public function downloadFilePPDB()
    {
        $pdf = ("download/RINCIAN-PPDB-TH2021.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'PPDB2021-info-'.time().'.pdf';
        return response()->download($pdf, $newName, $headers);
    }


    public function downloadFileStudent($locationFile)
    {
        // dd($locationFile);
        $fileDownload = ("images/student_files/".$locationFile);
        $headers = ['Content-Type: application/pdf, image/jpeg, image/jpg'];
        $newName = 'file-siswa' . '_' . date('Ymd'). $locationFile;
        // dd($fileDownload, $headers, $newName);
        return response()->download($fileDownload, $newName, $headers);
    }

    public function downloadFileTeacher($locationFile)
    {
        // dd($locationFile);
        $fileDownload = ("images/teacher_files/".$locationFile);
        $headers = ['Content-Type: application/pdf, image/jpeg, image/jpg'];
        $newName = 'file-guru' . '_' . date('Ymd'). $locationFile;
        // dd($fileDownload, $headers, $newName);
        return response()->download($fileDownload, $newName, $headers);
    }

    public function downloadFileStaff($locationFile)
    {
        // dd($locationFile);
        $fileDownload = ("images/staff_files/".$locationFile);
        $headers = ['Content-Type: application/pdf, image/jpeg, image/jpg'];
        $newName = 'file-staf' . '_' . date('Ymd'). $locationFile;
        // dd($fileDownload, $headers, $newName);
        return response()->download($fileDownload, $newName, $headers);
    }
}
