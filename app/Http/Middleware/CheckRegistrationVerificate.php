<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Students;
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
            $user = Auth::user();   
            if ($student->stu_registration_status == 0 && $user->hasRole('student')) {
                if ($user->usr_is_regist == 1) {
                    return redirect('/pending-verification');
                }else {
                    return redirect('student-registration');
                }    
            } elseif ($student->stu_registration_status == 0 && $user->hasRole('teacher')) {
                if ($user->usr_is_regist == 1) {
                    return redirect('/pending-verification');
                }else {
                    return redirect('teacher-registration');
                }    
            } elseif ($student->stu_registration_status == 0 && $user->hasRole('staff')) {
                if ($user->usr_is_regist == 1) {
                    return redirect('/pending-verification');
                }else {
                    return redirect('staff-registration');
                }    
            }
            
        }

        return $next($request);
    }
}
