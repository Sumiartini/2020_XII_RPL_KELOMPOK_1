<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Students;

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
        $user = Auth()->user();

        if ($student->stu_registration_status == '0' && $user->hasRole('student')) {
            return redirect('student-registration');
        } elseif ($student->stu_registration_status == '0' && $user->hasRole('teacher')) {
            return redirect('teacher-registration');
        } elseif ($student->stu_registration_status == '0' && $user->hasRole('staff')) {
            return redirect('staff-registration');
        } elseif ($student->stu_registration_status == '1') {
            return view('dashboard');
        } else {
            abort(404);
        }

        // return view('dashboard');
    }
    public function create()
    {
        return view('users.create');
    }
}
