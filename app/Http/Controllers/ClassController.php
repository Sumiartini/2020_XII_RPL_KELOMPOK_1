<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Majors;
use App\GradeLevels;

class ClassController extends Controller
{
    public function create()
    {
    	$majors = Majors::where('mjr_is_active', 1)->get();
    	$grade_levels = GradeLevels::all();
    	return view('classes.add-class',['grade_levels' => $grade_levels, 'majors' => $majors]);
    }
    public function store(Request $request)
    {
    	// dd($request);
        $messages = [
            'required'  => 'Kolom wajib diisi',
        ];
        $request->validate([
      		'cls_grade_level'	=> 'required',
      		'cls_major'			=> 'required',
      		'cls_number'		=> 'required'
        ], $messages);
    	
    	$class_check = Classes::where('cls_grade_level_id', $request->cls_grade_level)->where('cls_major_id', $request->cls_major)->where('cls_number', $request->cls_number)->first();
    	// dd($class_check);
    	if ($class_check) {
    		return redirect()->back()->with('error', 'Kelas sudah tersedia');
    	}

    	$class = new Classes;
    	$class->cls_major_id = $request->cls_major;
    	$class->cls_grade_level_id = $request->cls_grade_level;
    	$class->cls_number = $request->cls_number;
    	$class->cls_is_active = 1;
    	$class->cls_created_by = Auth()->user()->usr_id;
    	$class->save();

    	return redirect('/classes')->with('success', 'Kelas berhasil ditambahkan');	
    }

    public function edit($classID)
    {
    	$majors = Majors::where('mjr_is_active', 1)->get();
    	$grade_levels = GradeLevels::all();
    	$class = Classes::join('majors','classes.cls_major_id','=','majors.mjr_id')->join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')->where('classes.cls_id', $classID)->first();
    	// dd($class);
    	return view('classes.edit-class',['grade_levels' => $grade_levels, 'majors' => $majors, 'class' => $class ]);
    }
    public function update(Request $request, $classID)
    {
    	// dd($request, $classID);
    	$messages = [
            'required'  => 'Kolom wajib diisi',
        ];
        $request->validate([
      		'cls_grade_level'	=> 'required',
      		'cls_major'			=> 'required',
      		'cls_number'		=> 'required'
        ], $messages);
    	
    	$class = Classes::where('cls_id', $classID)->first();
    	$class_check = Classes::where('cls_grade_level_id', $request->cls_grade_level)->where('cls_major_id', $request->cls_major)->where('cls_number', $request->cls_number)->first();
    	// dd($class_check);

    	if ($class->cls_grade_level_id == $request->cls_grade_level && $class->cls_major_id == $request->cls_major && $class->cls_number == $request->cls_number) {
    		return redirect('/classes');
    	}

    	if ($class_check) {
    		return redirect()->back()->with('error', 'Kelas sudah tersedia');
    	}

    	$class = Classes::where('cls_id', $classID)->first();
    	$class->cls_major_id = $request->cls_major;
    	$class->cls_grade_level_id = $request->cls_grade_level;
    	$class->cls_number = $request->cls_number;
    	$class->cls_updated_by = Auth()->user()->usr_id;
    	$class->update();

    	return redirect('/classes')->with('success', 'Kelas berhasil diubah');
    }



    public function editStatus($classID)
    {
        // dd($classID);
        $class = Classes::where('cls_id', $classID)->first();
        if ($class->cls_is_active == 1) {
            $class->cls_is_active = 0;
            $class->cls_updated_by = Auth()->user()->usr_id;
            $class->update();
            return redirect()->back()->with('success', 'Kelas berhasil di non aktifkan');
        }else{
            $class->cls_is_active = 1;
            $class->update();
            return redirect()->back()->with('success', 'Kelas berhasil di aktifkan');
        }
    }
}
