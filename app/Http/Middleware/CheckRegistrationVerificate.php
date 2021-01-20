<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Students;
use App\Teachers;
use App\Staffs;
use Illuminate\Support\Facades\Auth;

class CheckRegistrationVerificate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $student = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            -> where('students.stu_user_id' , Auth::user()->usr_id)->first();
            $teacher = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            -> where('teachers.tcr_user_id', Auth::user()->usr_id)->first();
            $staff = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
            -> where('staffs.stf_user_id', Auth::user()->usr_id)->first();

            $user = Auth::user();   
            if ($user->hasRole('student')) {
                if ($student->stu_registration_status == 0) {
                    if ($user->usr_is_regist == 1 ) {
                        return redirect('/pending-verification/'.$student->stu_id);
                    }else{
                        return redirect('student-registration');
                    }
                }    
            } elseif ( $user->hasRole('teacher')) {
                if ($teacher->tcr_registration_status == 0) {
                    if ($user->usr_is_regist == 1) {
                        return redirect('/pending-verification');
                    }else {
                        return redirect('teacher-registration');
                    }    
                }
            } elseif ($user->hasRole('staff')) {
                if ($staff->stf_registration_status == 0) {
                    if ($user->usr_is_regist == 1) {
                        return redirect('/pending-verification');
                    }else {
                        return redirect('staff-registration');
                    }
                }    
            }
            
        }

        return $next($request);
    }
}
