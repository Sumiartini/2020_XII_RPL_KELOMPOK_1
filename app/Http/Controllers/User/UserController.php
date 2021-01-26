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
        $students = Students::count();
        $teachers = Teachers::count();
        $staffs = Staffs::count();

        if ($user->hasRole('student')) {
            if ($student->stu_registration_status == '0' ) {
                return redirect('student-registration');    
            }
            if ($student->stu_registration_status == '1' ) {
                return view('dashboard', compact('students','teachers','staffs'));
            }
            
        } elseif ($user->hasRole('teacher')) {
            if ($teacher->tcr_registration_status == '0') {
                return redirect('teacher-registration');
            }
            if ($teacher->tcr_registration_status == '1') {
                return view('dashboard', compact('students','teachers','staffs'));
            }
            
        } elseif ($user->hasRole('staff')) {
            if ($staff->stf_registration_status == '0') {
                return redirect('staff-registration');
            }
            if ($staff->stf_registration_status == '1') {
                return view('dashboard', compact('students','teachers','staffs'));
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
}
