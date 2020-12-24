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
        dd($request);
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
    public function edit()
    {
        return view('position-types.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PositionTypes  $positionTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request);
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
}
