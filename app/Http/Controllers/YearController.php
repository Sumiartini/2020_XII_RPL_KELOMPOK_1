<?php

namespace App\Http\Controllers;

use App\Years;
use Illuminate\Http\Request;
class YearController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $years = Years::all();
            return Datatables::of($years)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
            }
            // dd($request);
        return view('years.list-year');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('years.add-year');
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
        'scy_name'      => 'required | unique:school_years,scy_name',
        ], $messages);

        $year               = new Years;
        $year->scy_name     = $request->scy_name;
        $year->scy_is_active ='1';
        $year->save();

        return redirect('/school-years')->with('success', 'Data berhasil ditambahkan');
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
    public function edit($yearID)
    {
        $year = new Years;
        $year_edit = $year->getSchoolYearsEdit($yearID); 
        $year->get();       
        return view('years.edit-year', ['year_edit' => $year_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $yearID)
    {
        // dd($request);
        $requests = $request->input();
        $year = Years::where('scy_id', $yearID)->first();
        $year->scy_name     = $request->scy_name; 
        $year->update();       

       return redirect('/school-years')->with('success', 'Data berhasil diubah');
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

    public function edit_status($yearID)
    {
        $year = Years::where('scy_id', $yearID)->first();
       if ($year->scy_is_active == '1') {
            $year->scy_is_active = '0';
            $year->update();
            return back()->with('success', 'Tahun Ajaran berhasil di non aktifkan');
        }else{
            $year->scy_is_active = '1';
            $year->update();
            return back()->with('success', 'Tahun Ajaran berhasil di aktifkan');
        }    
    }
}
