<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EntryTypes  $entryTypes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EntryTypes  $entryTypes
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('pages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EntryTypes  $entryTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntryTypes $entryTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EntryTypes  $entryTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntryTypes $entryTypes)
    {
        //
    }
}
