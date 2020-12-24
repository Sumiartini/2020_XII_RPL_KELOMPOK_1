<?php

namespace App\Http\Controllers;

use App\Staffs;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function list_prospective()
    {
        return view('staffs.list-staff-prospective');
    }

    public function list_rejected()
    {
        return view('staffs.list-staff-rejected');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.add-staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'usr_name' => ['required', 'string', 'max:255'],
        'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
        'usr_password' => ['required', 'string', 'min:8', 'confirmed'],
        'usr_phone' => ['required', 'min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
    ]);
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('staffs.detail-staff');
    }

    public function show_prospective()
    {
        return view('staffs.detail-staff-prospective');
    }
    public function show_rejected()
    {
        return view('staffs.detail-staff-rejected');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('staffs.edit-staff');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
        'usr_name' => ['required', 'string', 'max:255'],
    ]);
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        return 'data terhapus';
    }
    public function formRegistrasion()
    {
        return view('staffs.registration-staff');
    }
    public function storeFormRegistrasion(Request $request)
    {
        dd($request, "MASUK KE HALAMAN MENUNGGU KEPUTUSAN DAN INFO PEMBAYARAN");
    }
}
