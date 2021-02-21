<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Majors;
use Datatables;
class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('majors.add-major');
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
        $requests = $request->input();
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        $request->validate([
        'mjr_name'      => 'required | unique:majors,mjr_name',
        ], $messages);

        $major               = new Majors;
        $major->mjr_name     = $request->mjr_name;
        $major->mjr_is_active = '1';
        $major->mjr_created_by = Auth()->user()->usr_id; 
        $major->save();

        return redirect('/majors')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($majorID)
    {
        $major = Majors::where('mjr_id', $majorID)->first();
        return view('majors.edit-major',['major' => $major]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $majorID)
    {
        $major = Majors::where('mjr_id', $majorID)->first();

        if ($major->mjr_name == $request->mjr_name) {
            $major->mjr_name = $request->mjr_name;
            $major->update();
            return redirect('majors');
        }
        $check_major_name = Majors::where('mjr_name', $request->mjr_name)->first();
        if ($check_major_name) {
            return redirect()->back()->with('error', 'Nama jurusan sudah digunakan');
        }
        $major->mjr_name = $request->mjr_name;
        $major->mjr_updated_by = Auth()->user()->usr_id;
        $major->update();
        return redirect('majors')->with('success', 'jurusan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd("Jurusan Berhasil DI delete");
    }

    public function edit_status($majorID)
    {
        $major = Majors::where('mjr_id', $majorID)->first();
       if ($major->mjr_is_active == '1') {
            $major->mjr_is_active = '0';
            $major->mjr_updated_by = Auth()->user()->usr_id;
            $major->update();
            return redirect()->back()->with('success', 'Jurusan berhasil di non aktifkan');
        }else{
            $major->mjr_is_active = '1';
            $major->update();
            return redirect()->back()->with('success', 'Jurusan berhasil di aktifkan');
        }    
    }
}
