<?php

namespace App\Http\Controllers;

use App\Years;
use Illuminate\Http\Request;
class YearController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('years.create');
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
     * @param  \App\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function show(Years $years)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function edit(Years $years)
    {
        return view('years.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Years $years)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function destroy(Years $years)
    {
        dd("Tahun Ajaran Telah dihapus");
    }
}
