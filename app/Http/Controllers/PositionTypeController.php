<?php

namespace App\Http\Controllers;

use App\PositionTypes;
use Illuminate\Http\Request;

class PositionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('position-types.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('position-types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        
        $request->validate([
            'pst_name'      => 'required | unique:position_types,pst_name',
        ], $messages);

        $position_type = new PositionTypes;
        $position_type->pst_name = $request->pst_name;
        $position_type->pst_honorarium = str_replace(".", "", $request->pst_honorarium);
        $position_type->pst_is_active = 1;
        $position_type->pst_created_by = Auth()->user()->usr_id;
        $position_type->save();

        return redirect('/position-types')->with('success', 'Jabatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PositionTypes  $positionTypes
     * @return \Illuminate\Http\Response
     */
    public function show(PositionTypes $positionTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PositionTypes  $positionTypes
     * @return \Illuminate\Http\Response
     */
    public function edit($positionTypeID)
    {
        $position_type = PositionTypes::where('pst_id', $positionTypeID)->first();
        return view('position-types.edit',['position_type' => $position_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PositionTypes  $positionTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $position_typeID)
    {
        $position_type = PositionTypes::where('pst_id', $position_typeID)->first();

        if ($position_type->pst_name == $request->pst_name) {
            $position_type->pst_name = $request->pst_name;
            $position_type->pst_honorarium = str_replace(".", "", $request->pst_honorarium);
            $position_type->pst_updated_by = Auth()->user()->usr_id;
            $position_type->update();
            return redirect('position-types');
        }
        $check_subject_name = PositionTypes::where('pst_name', $request->pst_name)->first();
        if ($check_subject_name) {
            return redirect()->back()->with('error', 'Jabatan sudah digunakan');
        }
        $position_type->pst_name = $request->pst_name;
        $position_type->pst_honorarium = str_replace(".", "", $request->pst_honorarium);
        $position_type->pst_updated_by = Auth()->user()->usr_id;
        $position_type->update();
        return redirect('position-types')->with('success', 'Jabatan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PositionTypes  $positionTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd("Jabatan Berhasil Di Hapus");
    }

    public function editStatus($positionTypeID)
    {
        // dd($positionTypeID);
        $position_type = PositionTypes::where('pst_id', $positionTypeID)->first();
        if ($position_type->pst_is_active == 1) {
            $position_type->pst_is_active = 0;
            $position_type->pst_updated_by = Auth()->user()->usr_id;
            $position_type->update();
            return redirect()->back()->with('success', 'Jabatan berhasil di non aktifkan');
        }else{
            $position_type->pst_is_active = 1;
            $position_type->update();
            return redirect()->back()->with('success', 'Jabatan berhasil di aktifkan');
        }
    }
}
