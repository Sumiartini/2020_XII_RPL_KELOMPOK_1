<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subjects::all();
        return response()->json([ 'subjects' => $subjects], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
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
        $messages = [
            'required'  => 'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
        ];
        
        $request->validate([
            'sbj_name'      => 'required | unique:subjects,sbj_name',
        ], $messages);

        $subject = new Subjects;
        $subject->sbj_name = $request->sbj_name;
        $subject->sbj_is_active = 1;
        $subject->sbj_created_by = Auth()->user()->usr_id;
        $subject->save();

        return redirect('subjects')->with('success', 'Mata pelajaran berhasil di tambahkan');
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
    public function edit($subjectID)
    {
        $subject = Subjects::where('sbj_id', $subjectID)->first();
        return view('subjects.edit',['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subjectID)
    {
        $subject = Subjects::where('sbj_id', $subjectID)->first();

        if ($subject->sbj_name == $request->sbj_name) {
            $subject->sbj_name = $request->sbj_name;
            $subject->update();
            return redirect('subjects');
        }
        $check_subject_name = Subjects::where('sbj_name', $request->sbj_name)->first();
        if ($check_subject_name) {
            return redirect()->back()->with('error', 'Nama jabatan sudah digunakan');
        }
        $subject->sbj_name = $request->sbj_name;
        $subject->sbj_updated_by = Auth()->user()->usr_id;
        $subject->update();
        return redirect('subjects')->with('success', 'Mata pelajaran berhasil di ubah');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        dd("Mata Pelajaran Berhasil Di hapus");
    }


    public function editStatus($subjectID)
    {
        $subject = Subjects::where('sbj_id', $subjectID)->first();
        if ($subject->sbj_is_active == 1) {
            $subject->sbj_is_active = 0;
            $subject->sbj_updated_by = Auth()->user()->usr_id;
            $subject->update();
            return redirect()->back()->with('success', 'Mata pelajaran berhasil di non aktifkan');
        }else{
            $subject->sbj_is_active = 1;
            $subject->update();
            return redirect()->back()->with('success', 'Mata pelajaran berhasil di aktifkan');
        }
    }
}
