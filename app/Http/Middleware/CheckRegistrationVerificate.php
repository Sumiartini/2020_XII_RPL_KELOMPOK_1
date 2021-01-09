<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
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
            $user = Auth::user();
            if ($user->usr_is_accepted == 0 && $user->hasRole('student')) {
                if ($user->usr_is_regist == 1) {
                    return redirect('/pending-verification');
                }else {
                    return redirect('student-registration');
                }    
            } elseif ($user->usr_is_accepted == 0 && $user->hasRole('teacher')) {
                if ($user->usr_is_regist == 1) {
                    return redirect('/pending-verification');
                }else {
                    return redirect('teacher-registration');
                }    
            } elseif ($user->usr_is_accepted == 0 && $user->hasRole('staff')) {
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
