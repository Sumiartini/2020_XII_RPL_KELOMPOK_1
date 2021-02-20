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
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $majors = Majors::all();
            return Datatables::of($majors)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>';
                    return $btn;
                })->rawColumns(['action'])
                ->make(true);
            }
            // dd($request);
        return view('majors.list-major');
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
        $major = new Majors;
        $major_edit = $major->getMajorEdit($majorID); 
        $major->get();       
        return view('majors.edit-major', ['major_edit' => $major_edit]);
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
        // dd($request);
        $requests = $request->input();
        $major = Majors::where('mjr_id', $majorID)->first();
        $major->mjr_name     = $request->mjr_name; 
        $major->save();       

       return redirect('/majors')->with('success', 'Data berhasil diubah');
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
            $major->update();
            return back()->with('success', 'Jurusan berhasil di non aktifkan');
        }else{
            $major->mjr_is_active = '1';
            $major->update();
            return back()->with('success', 'Jurusan berhasil di aktifkan');
        }    
    }
}
