<?php

namespace App\Http\Controllers;

use App\Teachers;
use Illuminate\Http\Request;

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
        dd($request);
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
        return view('teachers.registration-teacher');
    }
    public function storeFormRegistrasion(Request $request)
    {
        dd($request, "MASUK KE HALAMAN MENUNGGU KEPUTUSAN DAN INFO PEMBAYARAN");
    }
}
