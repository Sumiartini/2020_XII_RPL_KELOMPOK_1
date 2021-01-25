<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use App\User;
use App\StudentDetails;
use App\Majors;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Carbon;
use App\EntryTypes;
use App\Provinces;
use App\Cities;
use App\Districts;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        $majors = Majors::where('mjr_is_active', true)->get();
        $entry_types = EntryTypes::get();
        return view('students.add-student',['majors' => $majors, 'entry_types'  => $entry_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requests = $request->input();
        $messages = [
            'required'  =>'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
            'mimes'     => 'Foto tidak support, ukuran max 2 MB',
            'same'      => 'Kata sandi harus sama ketika di ulangi',
            'min'       => 'Kata sandi Minimal 8 Karakter'
        ];

        $request->validate([
            'usr_name'                      => 'required',
            'usr_email'                     => 'required|unique:users,usr_email',
            'usr_password'                  => 'required|same:usr_retype_password|min:8',
            'stu_candidate_name'            => 'required',
            'usr_gender'                    => 'required',
            'stu_nisn'                      => 'required | unique:students,stu_nisn',
            'stu_entry_type_id'             => 'required',
            'usr_phone_number'              => 'required | unique:users,usr_phone_number',
            'usr_whatsapp_number'           => 'required | unique:users,usr_whatsapp_number',
            'usr_place_of_birth'            => 'required',
            'usr_date_of_birth'             => 'required',
            'personal.living_together'      => 'required',
            'stu_school_origin'             => 'required',
            'stu_major_id'                  => 'required',
            'usr_religion'                  => 'required',
            'usr_profile_picture'           => 'required | mimes:jpeg,jpg,png|max:2048',
            'father_data.name'              => 'required',
            'father_data.nik'               => 'required',
            'father_data.year_of_birth'     => 'required',
            'father_data.education'         => 'required',
            'father_data.profession'        => 'required',
            'father_data.phone_number'      => 'required',
            'mother_data.name'              => 'required',
            'mother_data.nik'               => 'required',
            'mother_data.year_of_birth'     => 'required',
            'mother_data.education'         => 'required',
            'mother_data.profession'        => 'required',
            'mother_data.phone_number'      => 'required',
            'prv_name'                      => 'required',
            'cit_name'                      => 'required',
            'dst_name'                      => 'required',
            'usr_address'                   => 'required',
            'usr_rt'                        => 'required',
            'usr_rw'                        => 'required',
            'usr_rural_name'                => 'required',
            'usr_postal_code'               => 'required',
            'contact.email'                 => 'required',
            
        ], $messages);

        $user                       = new User;
        $user->usr_name             = $request->usr_name;
        $user->usr_email            = $request->usr_email;
        $user->usr_phone_number     = $request->usr_phone_number;
        $user->usr_password         = Hash::make($request->usr_password);
        $user->usr_gender           = $request->usr_gender;
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_address          = $request->usr_address;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_is_regist        = '1';
        $user->usr_is_active        = '1';
        $user->usr_email_verified_at = now();
        $user->usr_created_by       = Auth()->user()->usr_id;
        $user->assignRole('student');

        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('users_profile' . '/' . $user->name);
            $files_name = date('Ymd') . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }

        if ($user->save()) {
            $student                       = new Students;
            $student->stu_candidate_name   = $request->stu_candidate_name;
            $student->stu_user_id          = $user->usr_id;
            $student->stu_entry_type_id    = $request->entry_type_id;
            $student->stu_school_year_id   = 5; 
            $student->stu_nisn             = $request->stu_nisn;
            $student->stu_school_origin    = $request->stu_school_origin;
            $student->stu_major_id         = $request->stu_major_id;
            $student->stu_registration_status   = 1;
            $student->stu_created_by = Auth()->user()->id;

            if ($student->save()) {
                foreach ($requests as $key => $requestData) {
                    if (is_array($requestData)) {
                        foreach ($requestData as $requestKey => $requestValue) {
                            $studentDetail = new StudentDetails;
                            $studentDetail->std_student_id = $student->stu_id;
                            $studentDetail->std_type       = $key;
                            $studentDetail->std_key        = $requestKey;
                            $studentDetail->std_value      = $requestValue;
                            $studentDetail->std_created_by = Auth()->user()->usr_id;
                            $studentDetailSave              = $studentDetail->save();
                        }   
                    }
                }

            } else{
                dd('gagal student ');
            }
        } else {
            dd('gagal user');
        }
        return redirect ('/students');  
    }

    public function show_student($studentID)
    {
        $student = new students;
        $student = $student->getStudentDetail($studentID);
        return view('students.detail-student',['student' => $student]);
    }
    public function show_prospective($studentID)
    {
        $student_prospective = new Students;
        $student_prospective = $student_prospective->getStudentProsvectiveDetail($studentID);   
        //dd($student_prospective);
        return view('students.detail-student-prospective',['student_prospective' => $student_prospective]);
    }
    public function show_rejected($studentID)
    {
        $student_rejected = new Students;
        $student_rejected = $student_rejected->getStudentRejectedDetail($studentID);   
        // dd($student_rejected);
        return view('students.detail-student-rejected',['student_rejected' => $student_rejected]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($studentID)
    {
        $student = new Students;
        $student_edit = $student->getStudentEdit($studentID);   
        
        return view('students.edit-student',['student_edit' => $student_edit]);
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

        $student_edit = Auth()->user();

        $student_edit->usr_name             = $request->usr_name;
        $student_edit->update();

        return back();

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
        $user = Auth::user();

        if ($user->usr_is_regist == 0 && $user->hasRole('student')) {            
            $majors = Majors::where('mjr_is_active', true)->get();
            $province = Provinces::select('prv_id', 'prv_name')->get();
            return view('students.registration-student',['majors' => $majors, 'province' => $province]);
        }else{
            return redirect('/pending-verification');
        }
    }

    public function JsonCities($id){
        $cities = Cities::where('cit_province_id' , $id)->get();
        return response()->json(compact('cities', $cities));
    }

    public function JsonDistricts($id){
        $districts = Districts::where('dst_city_id' , $id)->get();
        return response()->json(compact('districts', $districts));
    }

    public function storeFormRegistrasion(Request $request)
    {
        $requests = $request->input();
        $messages = [
            'required'  =>'Kolom wajib diisi',
            'unique'    => 'Kolom yang digunakan telah terdaftar',
            'mimes'     => 'Foto tidak support, ukuran max 2 MB'
        ];

        $request->validate([
            'stu_candidate_name'            => 'required',
            'usr_gender'                    => 'required',
            'stu_nisn'                      => 'required | unique:students,stu_nisn',
            'usr_phone_number'              => 'required | unique:users,usr_phone_number',
            'usr_whatsapp_number'           => 'required | unique:users,usr_whatsapp_number',
            'usr_place_of_birth'            => 'required',
            'usr_date_of_birth'             => 'required',
            'personal.living_together'      => 'required',
            'stu_school_origin'             => 'required',
            'stu_major_id'                  => 'required',
            'usr_religion'                  => 'required',
            'usr_profile_picture'           => 'required | mimes:jpeg,jpg,png|max:2048',
            'father_data.name'              => 'required',
            'father_data.nik'               => 'required',
            'father_data.year_of_birth'     => 'required',
            'father_data.education'         => 'required',
            'father_data.profession'        => 'required',
            'father_data.phone_number'      => 'required',
            'mother_data.name'              => 'required',
            'mother_data.nik'               => 'required',
            'mother_data.year_of_birth'     => 'required',
            'mother_data.education'         => 'required',
            'mother_data.profession'        => 'required',
            'mother_data.phone_number'      => 'required',
            'prv_name'                      => 'required',
            'cit_name'                      => 'required',
            'dst_name'                      => 'required',
            'usr_address'                   => 'required',
            'usr_rt'                        => 'required',
            'usr_rw'                        => 'required',
            'usr_rural_name'                => 'required',
            'usr_postal_code'               => 'required',
            'contact.email'                 => 'required',
            
        ], $messages);

        $student = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
        -> where('students.stu_user_id' , Auth::user()->usr_id)->first();
        $user = Auth()->user();
        // dd($user->usr_gender);
        $user->usr_gender           = $request->usr_gender;
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_address          = $request->usr_address;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_is_regist        = '1';
        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('users_profile' . '/' . $user->name);
            $files_name = date('Ymd') . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }

        if ($user->update()) {
            $student->stu_candidate_name   = $request->stu_candidate_name;
            $student->stu_user_id          = $user->usr_id;
            $student->stu_entry_type_id    = 1;
            $student->stu_school_year_id   = 5; 
            $student->stu_nisn             = $request->stu_nisn;
            $student->stu_school_origin    = $request->stu_school_origin;
            $student->stu_major_id         = $request->stu_major_id;
            $student->stu_registration_status   = "0";
            $student->stu_created_by = Auth()->user()->id;

            if ($student->update()) {
                foreach ($requests as $key => $requestData) {
                    if (is_array($requestData)) {
                        foreach ($requestData as $requestKey => $requestValue) {
                            $studentDetail = new StudentDetails;
                            $studentDetail->std_student_id = $student->stu_id;
                            $studentDetail->std_type       = $key;
                            $studentDetail->std_key        = $requestKey;
                            $studentDetail->std_value      = $requestValue;
                            $studentDetail->std_created_by = $user->usr_id;
                            $studentDetailSave              = $studentDetail->save();
                        }   
                    }
                }

            } else{
                dd('gagal student ');
            }
        } else {
            dd('gagal user');
        }
        return redirect ('/pending-verification/'.$student->stu_id);   
    }

    public function receipted($stu_id)
    {
        $student = Students::findOrFail($stu_id);
        $student->stu_registration_status = '1';
        $student->update();
        return back();
    }

    public function rejected($stu_id)
    {
        $student = Students::findOrFail($stu_id);
        $user = User::where('usr_id', $student->stu_user_id)->first();
        
        $user->usr_is_active = '0';
        $user->update();

        $student->stu_registration_status = '2';
        $student->update();

        return back();

    }
}
