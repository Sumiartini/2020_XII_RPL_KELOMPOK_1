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
        ->join('majors','classes.cls_major_id','=','majors.mjr_id')->get();
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
    		return redirect()->back()->with('error', 'Wali Kelas sudah tersedia');
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
    	$classes = Classes::join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')->join('majors','classes.cls_major_id','=','majors.mjr_id')->get();
        $teachers = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')->get();
    	$homeroom_teachers = new HomeroomTeachers;

    	$homeroom_teachers_edit = $homeroom_teachers->getHomeroomTeacherEdit($homeroomTeacherID);
    	return view('homeroom-teachers.edit-homeroom-teacher', ['homeroom_teachers'=>$homeroom_teachers, 'classes' => $classes, 'teachers' => $teachers]);
    }

    public function update(Request $request, $homeroomTeacherID)
    {

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
