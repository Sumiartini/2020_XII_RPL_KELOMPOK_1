<?php

namespace App\Http\Controllers;

use App\Years;
use Illuminate\Http\Request;
class YearController extends Controller
{
    public function index(Request $request)
    {

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
        // dd($request);
        $requests = $request->input();
        $messages = [
            'required'  => 'Kolom wajib diisi',
        ];
        $request->validate([
            'scy_first_year'      => 'required',
            'scy_last_year'      => 'required',
        ], $messages);


        $first_year_check = Years::where('scy_first_year', $request->scy_first_year)->first();
        $last_year_check = Years::where('scy_last_year', $request->scy_last_year)->first();
        // dd($class_check);
        if ($first_year_check OR $last_year_check) {
            if ($first_year_check AND $last_year_check) {                
                return redirect()->back()->with('error', 'Tahun Ajaran Sudah Tersedia');
            }elseif($first_year_check){
                return redirect()->back()->with('error', 'Tahun Ajaran dengan Tahun Awal yang dimasukkan Sudah Tersedia');
            }else{
                return redirect()->back()->with('error', 'Tahun Ajaran dengan Tahun Akhir yang dimasukkan Sudah Tersedia');
            }
        }
        $year               = new Years;
        $year->scy_first_year = $request->scy_first_year;
        $year->scy_last_year = $request->scy_last_year;        
        $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
        $year->scy_is_active ='1';
        $year->scy_created_by = Auth()->user()->usr_id; 
        $year->save();

        return redirect('/school-years')->with('success', 'Tahun Ajaran berhasil ditambahkan');
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
        $year = Years::where('scy_id', $yearID)->first();
        return view('years.edit-year',['year' => $year]);
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
        $year = Years::where('scy_id', $yearID)->first();
        
        $year_check = Years::where('scy_first_year', $request->scy_first_year)->where('scy_last_year', $request->scy_last_year)->first();
        $first_year_check = Years::where('scy_first_year', $request->scy_first_year)->first();
        $last_year_check = Years::where('scy_last_year', $request->scy_last_year)->first();
        
        if ($year_check) {
            $year->scy_first_year = $request->scy_first_year;
            $year->scy_last_year = $request->scy_last_year;        
            $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
            $year->scy_updated_by = Auth()->user()->usr_id; 
            $year->update();
            return redirect('school-years')->with('success', 'Tahun Ajaran berhasil di ubah');  
        }

        if (isset($first_year_check->scy_id)) {
            if ($first_year_check->scy_id == $yearID) {

                if (isset($last_year_check->scy_id)) {
                    if ($last_year_check->scy_id != $yearID) {
                        return redirect()->back()->with('error', 'Tahun Ajaran dengan Tahun Akhir yang dimasukkan Sudah Tersedia');
                    }else{
                        $year->scy_first_year = $request->scy_first_year;
                        $year->scy_last_year = $request->scy_last_year;        
                        $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
                        $year->scy_updated_by = Auth()->user()->usr_id; 
                        $year->update();
                        return redirect('school-years')->with('success', 'Tahun Ajaran berhasil di ubah');                
                    }                    
                }else{
                    $year->scy_first_year = $request->scy_first_year;
                    $year->scy_last_year = $request->scy_last_year;        
                    $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
                    $year->scy_updated_by = Auth()->user()->usr_id; 
                    $year->update();
                    return redirect('school-years')->with('success', 'Tahun Ajaran berhasil di ubah');  
                }
            }else{
                return redirect()->back()->with('error', 'Tahun Ajaran dengan Tahun Awal yang dimasukkan Sudah Tersedia');
            }
        }else{
            if (isset($last_year_check->scy_id)) {
                if ($last_year_check->scy_id != $yearID) {
                    return redirect()->back()->with('error', 'Tahun Ajaran dengan Tahun Akhir yang dimasukkan Sudah Tersedia');
                }else{
                    $year->scy_first_year = $request->scy_first_year;
                    $year->scy_last_year = $request->scy_last_year;        
                    $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
                    $year->scy_updated_by = Auth()->user()->usr_id; 
                    $year->update();
                    return redirect('school-years')->with('success', 'Tahun Ajaran berhasil di ubah');                
                }                    
            }else{
                $year->scy_first_year = $request->scy_first_year;
                $year->scy_last_year = $request->scy_last_year;        
                $year->scy_name     = $request->scy_first_year.'/'.$request->scy_last_year;
                $year->scy_updated_by = Auth()->user()->usr_id; 
                $year->update();
                return redirect('school-years')->with('success', 'Tahun Ajaran berhasil di ubah');  
            }
        }
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
            $year->scy_updated_by = Auth()->user()->usr_id;
            $year->update();
            return redirect()->back()->with('success', 'Tahun Ajaran berhasil di non aktifkan');
        }else{
            $year->scy_is_active = '1';
            $year->update();
            return redirect()->back()->with('success', 'Tahun Ajaran berhasil di aktifkan');
        }    
    }
}
