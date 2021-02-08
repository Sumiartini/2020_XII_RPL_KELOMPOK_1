<?php

namespace App\Http\Controllers;

use App\Teachers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('teachers.add-teacher');
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
           }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teachers  $teachers
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('teachers.detail-teacher');
    }
    public function show_prospective()
    {
        return view('teachers.detail-teacher-prospective');
    }
    public function show_rejected()
    {
        return view('teachers.detail-teacher-rejected');
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

        if ($user->usr_is_regist == 0 && $user->hasRole('teacher')) {            
            return view('teachers.registration-teacher');
        }else{
            return redirect('/pending-verification');
        }
        
    }
    public function storeFormRegistrasion(Request $request)
    {
        //dd($request, "MASUK KE HALAMAN MENUNGGU KEPUTUSAN DAN INFO PEMBAYARAN");
        $requests = $request->input();
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        $request->validate([
            'usr_name'                                     => 'required',
            'usr_nik'                                      => 'required',
            'usr_place_of_birth'                           => 'required',
            'usr_date_of_birth'                            => 'required',
            'usr_religion'                                 => 'required',
            'prv_name'                                     => 'required',
            'cit_name'                                     => 'required',
            'dst_name'                                     => 'required',
            'usr_address'                                  => 'required',
            'usr_rt'                                       => 'required',
            'usr_rw'                                       => 'required',
            'usr_rural_name'                               => 'required',
            'usr_postal_code'                              => 'required',
            'educational_background.year_grade_school'     => 'required',
            'educational_background.grade_school'          => 'required',
            
         ], $messages);
        return redirect('test');

    }
}
