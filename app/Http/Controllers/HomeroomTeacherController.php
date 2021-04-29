<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Majors;
use App\GradeLevels;
use App\Teachers;
use App\HomeroomTeachers;

class HomeroomTeacherController extends Controller
{
   public function create()
    {	
    	$classes = Classes::join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')
        ->join('majors','classes.cls_major_id','=','majors.mjr_id')
        ->join('school_years','classes.cls_school_year_id','=','school_years.scy_id')->get();
        $teachers = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')->get();

        return view('homeroom-teachers.add-homeroom-teacher',['classes' => $classes, 'teachers' => $teachers]);
    }

    public function store(Request $request)
    {
    	// dd($request);
        $messages = [
            'required'  => 'Kolom wajib diisi',
        ];
        $request->validate([
      		'usr_name'			=> 'required',
      		'cls_name'			=> 'required'
     
        ], $messages);

        $homeroom_teacher_check = HomeroomTeachers::where('hrt_teacher_id', $request->usr_name)->where('hrt_class_id', $request->cls_name)->first();
    	// dd($homeroom_teacher_check);
    	if ($homeroom_teacher_check) {
    		return redirect()->back()->with('error', 'wali Kelas sudah terdaftar');
    	}

        $teacher_check = HomeroomTeachers::where('hrt_teacher_id', $request->usr_name)->first();
    	// dd($teacher_check);
    	if ($teacher_check) {
    		return redirect()->back()->with('error', 'Guru sudah terdaftar');
    	}

    	$class_check = HomeroomTeachers::where('hrt_class_id', $request->cls_name)->first();
    	// dd($class_check);
    	if ($class_check) {
    		return redirect()->back()->with('error', 'Kelas sudah terdaftar');
    	}

        $homeroom_teachers	= new HomeroomTeachers;
        $homeroom_teachers->hrt_teacher_id = $request->usr_name;
        $homeroom_teachers->hrt_class_id = $request->cls_name;
        $homeroom_teachers->hrt_is_active = 1;
        $homeroom_teachers->hrt_created_by = Auth()->user()->usr_id;
        $homeroom_teachers->save();
    	
    	return redirect('/homeroom-teachers')->with('success', 'Wali Kelas berhasil ditambahkan');	
    }

    public function edit($homeroomTeacherID)
    {	
    	$classes = Classes::join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')->join('majors','classes.cls_major_id','=','majors.mjr_id')->join('school_years','classes.cls_school_year_id','=','school_years.scy_id')->get();
        $teachers = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')->get();
    	$homeroom_teachers = HomeroomTeachers::join('teachers','homeroom_teachers.hrt_teacher_id','=','teachers.tcr_id')
        ->join('classes','homeroom_teachers.hrt_class_id','=','classes.cls_id')
        ->join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')
        ->join('majors','classes.cls_major_id','=','majors.mjr_id')
        ->join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        ->join('school_years','cls_school_year_id','=','school_years.scy_id')
        ->where('homeroom_teachers.hrt_id', $homeroomTeacherID)->first();
    	// dd($homeroom_teachers);
        return view('homeroom-teachers.edit-homeroom-teacher', ['homeroom_teachers'=>$homeroom_teachers, 
            'classes' => $classes, 'teachers' => $teachers]);
    }

    public function update(Request $request, $homeroomTeacherID)
    {
        // dd($request, $homeroomTeacherID);
        $messages = [
            'required'  => 'Kolom wajib diisi',
        ];
        $request->validate([
            'usr_name'          => 'required',
            'cls_name'          => 'required'
     
            
        ], $messages);

        $homeroom_teachers = HomeroomTeachers::where('hrt_id', $homeroomTeacherID)->first();
        $homeroom_teacher_check = HomeroomTeachers::where('hrt_teacher_id', $request->usr_name)->where('hrt_class_id', $request->cls_name)->first();
        // dd($homeroom_teacher_check);
        if ($homeroom_teacher_check) {
            return redirect('homeroom-teachers');
        }

        // $teacher_check = HomeroomTeachers::where('hrt_teacher_id', $request->usr_name)->first();
        // // dd($teacher_check);
        // if ($teacher_check) {
        //     return redirect()->back()->with('error', 'Guru sudah terdaftar');
        // }

        $class_check = HomeroomTeachers::where('hrt_class_id', $request->cls_name)->first();
        // dd($class_check);
        if ($class_check) {
            return redirect()->back()->with('error', 'Kelas sudah terdaftar');
        }

        if ($homeroom_teachers->hrt_teacher_id == $request->usr_name && $homeroom_teachers->hrt_class_id == $request->cls_name) {
            return redirect('/homeroom-teachers');
        }

        $homeroom_teachers = HomeroomTeachers::where('hrt_id', $homeroomTeacherID)->first();
        $homeroom_teachers->hrt_teacher_id = $request->usr_name;
        $homeroom_teachers->hrt_class_id = $request->cls_name;
        $homeroom_teachers->hrt_is_active = 1;
        $homeroom_teachers->hrt_created_by = Auth()->user()->usr_id;
        $homeroom_teachers->update();

        return redirect('/homeroom-teachers')->with('success', 'Wali Kelas berhasil diubah');

    }

     public function editStatus($homeroomTeacherID)
    {
        // dd($homeroomTeacherID);
        $homeroom_teachers = HomeroomTeachers::where('hrt_id', $homeroomTeacherID)->first();
        if ($homeroom_teachers->hrt_is_active == 1) {
            $homeroom_teachers->hrt_is_active = 0;
            $homeroom_teachers->hrt_updated_by = Auth()->user()->usr_id;
            $homeroom_teachers->update();
            return redirect()->back()->with('success', 'Wali Kelas berhasil di non aktifkan');
        }else{
            $homeroom_teachers->hrt_is_active = 1;
            $homeroom_teachers->update();
            return redirect()->back()->with('success', 'Wali Kelas berhasil di aktifkan');
        }
    }
}
