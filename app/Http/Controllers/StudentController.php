<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use App\User;
use App\StudentDetails;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students.list-student');
    }

    public function list_prospective()
    {
        return view('students.list-student-prospective');
    }

    public function list_rejected()
    {
        return view('students.list-student-rejected');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add-student');
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
        $user = new User;
        $user->usr_name = $request->usr_name;
        $user->usr_email = $request->usr_email;
        $user->usr_password = $request->usr_password;
        $user->usr_nik = $request->usr_nik;
        $user->usr_religion = $request->usr_religion;
        $user->usr_place_of_birth = $request->usr_place_of_birth;
        $user->usr_date_of_birth = $request->usr_date_of_birth;
        $user->usr_gender = $request->usr_gender;
        $user->usr_disctrict_id = $request->usr_disctrict_id;
        $user->usr_postal_code = $request->usr_postal_code;
        $user->usr_address = $request->usr_address;
        $user->usr_rt = $request->usr_rt;
        $user->usr_rw = $request->usr_rw;
        // $user->usr_profile_picture = $request->usr_profile_picture;
        
        if($user->save()){
            $student = new Student;
            $student->no_kip = $request->no_kip;
            if ($student->save()) {

              }          
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('students.detail-student');
    }
    public function show_prospective()
    {
        return view('students.detail-student-prospective');
    }
    public function show_rejected()
    {
        return view('students.detail-student-rejected');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        return view('students.edit-student');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()) {
            User::findOrFail($request->studentID)->delete();
            return $this->getResponse(true,200,'','Student berhasil dihapus');
        }
    }
    public function formRegistrasion()
    {
        return view('students.registration-student');
    }
    public function storeFormRegistrasion(Request $request)
    {
        $messages = [
            'required' =>'data wajib diisi',
            'unique' => 'data yang digunakan telah terdaftar'
        ];

        $request->validate([
            'usr_name' => 'required',
            'usr_gender' => 'required',
            'stu_nisn' => 'required | unique:students,stu_nisn',
            'usr_phone_number' => 'required | unique:users,usr_phone_number',
            'usr_whatsapp_number' => 'required | unique:users,usr_whatsapp_number',
            'usr_place_of_birth' => 'required',
            'usr_date_of_birth' => 'required',
            
        ], $messages);

        $user = Auth()->user();
        $user->usr_gender           = $request->usr_gender;
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_address          = $request->usr_address;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $userSave                   = $user->update();

        if ($userSave) {
            $students = new Students;
            $students->stu_user_id          = $user->usr_id;
            $students->stu_school_year_id   = 1; 
            $students->stu_nisn             = $request->stu_nisn;
            $students->stu_school_origin    = $request->stu_school_origin;
            $students->stu_major            = $request->stu_major;
            $studentSave                    = $students->save();

            if ($studentSave) {
                foreach ($request as $key => $requestData) {
                    if (is_array($requestData)) {
                        foreach ($requestData as $requestKey => $requestValue) {
                            $studentDetails = new StudentDetails;
                            $studentDetails->std_student_id = $students->stu_id;
                            $studentDetails->std_type       = $key;
                            $studentDetails->std_key        = $requestKey;
                            $studentDetails->std_value      = $requestValue;
                            $studentDetails->std_created_by = $user->usr_id;
                            $studentDetailSave              = $studentDetails->save();
                            if ($studentDetailSave) {
                                dd('beres');
                            }else{
                                dd('gagal student detail');
                            }
                        }   
                    }
                }

            } else{
                dd('gagal student ');
            }
        } else {
            dd('gagal user');
        }
        dd('rebes');

        
    }
}
