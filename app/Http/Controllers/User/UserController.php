<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Students;
use App\Teachers;
use App\Staffs;

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
        -> where('students.stu_user_id' , Auth::user()->usr_id)->first();
        $teacher = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        -> where('teachers.tcr_user_id', Auth::user()->usr_id)->first();
        $staff = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
        -> where('staffs.stf_user_id', Auth::user()->usr_id)->first();
        $user = Auth()->user();

        if ($user->usr_is_active == false) {
            Auth::logout();
            return redirect()->back()->with(['error' => 'Maaf akun anda di Non Aktifkan']);
        }
        $students = Students::count();
        $teachers = Teachers::count();
        $staffs = Staffs::count();

        if ($user->hasRole('student')) {
            if ($student->stu_registration_status == '0' ) {
                return redirect('student-registration');    
            }
            elseif ($student->stu_registration_status == '1' ) {
                return view('dashboard', compact('students','teachers','staffs'));
            }
            elseif ($student->stu_registration_status == '2' ) {
                return view('students.student-rejected');
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
                return view('dashboard', compact('students','teachers','staffs'));
            }
               if ($staff->stf_registration_status == '2') {
                return view('staffs.staff-rejected');
            }
            
        } elseif ($user->hasRole('admin')) {
            return view('dashboard', compact('students','teachers','staffs'));
        } else {
            abort(404);
        }

        // return view('dashboard');
    }

   public function downloadFile()
    {
        $pdf = ("download/smkmahaputra-info20201101.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'smkmahaputra-info-'.time().'.pdf';
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
}
