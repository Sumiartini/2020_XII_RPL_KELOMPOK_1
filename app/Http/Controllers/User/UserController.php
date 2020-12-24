<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

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
        $user = Auth()->user();

        if ($user->usr_is_accepted == '0' && $user->hasRole('student')) {
            return redirect('student-registration');
        } elseif ($user->usr_is_accepted == '0' && $user->hasRole('teacher')) {
            return redirect('teacher-registration');
        } elseif ($user->usr_is_accepted == '0' && $user->hasRole('staff')) {
            return redirect('staff-registration');
        } elseif ($user->usr_is_accepted == '1') {
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
