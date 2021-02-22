<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterSlides;
use App\MasterConfigs;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($request->ajax()) {
            $master_slides = MasterSlides::all();
            return Datatables::of($master_slides)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
            }
            // dd($request);
        return view('landing-page.list-master-slide');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing-page.add-master-slide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $requests = $request->input();
        $massages = [
            'required' => 'kolom wajib diisi'
        ];
        $request->validate([
            'mss_name'  => 'required',
            'mss_file'  => 'required',  
        ], $massages);

        $master_slides = new MasterSlides;
        $master_slides->mss_name = $request->mss_name;
        $master_slides->mss_file = $request->mss_file;
        $master_slides->save();

        return redirect('/master-slides')->with('success', 'Data berhasil ditambahkan'); 
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
    public function edit($id)
    {
        return view('landing-page.edit-landing-page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function createConfig(){
        return view('landing-page.add-master-config');
    }
}
