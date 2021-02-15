<?php

namespace App\Http\Controllers;

use App\Staffs;
use App\User;
use App\Provinces;
use App\StaffDetails;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function list_prospective()
    {
        return view('staffs.list-staff-prospective');
    }

    public function list_rejected()
    {
        return view('staffs.list-staff-rejected');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.add-staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usr_name' => ['required', 'string', 'max:255'],
            'usr_email' => ['required', 'string', 'max:255', 'unique:users,usr_email'],
            'usr_password' => ['required', 'string', 'min:8', 'confirmed'],
            'usr_phone' => ['required', 'min:10','regex:/^([0-9\s\-\+\(\)]*)$/'],
        ]);
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show_staff($staffID)
    {
        $staff = new Staffs;
        $staff = $staff->getStaffsDetail($staffID);
        $user = User::join('districts', 'districts.dst_id', '=', 'users.usr_district_id')
            ->join('cities', 'cities.cit_id', '=', 'districts.dst_city_id')
            ->join('provinces', 'provinces.prv_id', '=', 'cities.cit_province_id')
            ->select('users.*', 'districts.*', 'cities.*', 'provinces.*')
            ->where('usr_id', $staff->usr_id)
            ->get();
        return view('staffs.detail-staff', ['staff' => $staff, 'user' => $user]);
    }
    public function show_prospective($teacherID)
    {
        $staff_prospective = new Staffs;
        $staff_prospective = $staff_prospective->getStaffsProsvectiveDetail($staffID);
        //dd($staff_prospective);
        return view('staffs.detailstaffr-prospective', ['staff_prospective' => $staff_prospective]);
    }
    public function show_rejected($teacherID)
    {
        $staff_rejected = new Staffs;
        $staff_rejected = $staff_rejected->getStaffsRejectedDetail($teacherID);
        // dd($staff_rejected);
        return view('staffs.detail-staff-rejected', ['staff_rejected' => $staff_rejected]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    
    public function edit()
    {
        return view('staffs.edit-staff');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'usr_name' => ['required', 'string', 'max:255'],
        ]);
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        return 'data terhapus';
    }
    public function formRegistrasion()
    {
        $user = Auth::user();
        $staff = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
        -> where('staffs.stf_user_id', $user->usr_id)->first();


        if ($user->usr_is_regist == 0 && $user->hasRole('staff')) {
            $province = Provinces::select('prv_id', 'prv_name')->get();            
            return view('staffs.registration-staff', ['province' => $province]);            
        }else{
            return redirect('/pending-verification/'.$staff->stf_id);
        }
        
    }
    public function storeFormRegistrasion(Request $request)
    {
        // dd($request);
        $requests = $request->input();
        $messages = [
            'required'                      => 'Kolom wajib diisi',
            'unique'                        => 'Kolom yang digunakan telah terdaftar',
            'usr_profile_picture.mimes'     => 'Foto tidak support',
            'mimes'                         => 'file tidak support',
            'size'                          => 'Ukuran file Max 2 MB',
            'uploaded'  => 'Gagal di unggal, ukuran file max 2 MB'
        ];

        $request->validate([
            'usr_name'                                        => 'required',
            'usr_place_of_birth'                              => 'required',
            'usr_date_of_birth'                               => 'required',
            'usr_religion'                                    => 'required',
            'usr_gender'                                      => 'required',
            'usr_whatsapp_number'                             => 'required | unique:users,usr_whatsapp_number',            
            'usr_profile_picture'                             => 'required',
            'usr_address'                                     => 'required',
            'usr_rt'                                          => 'required',
            'usr_rw'                                          => 'required',
            'usr_rural_name'                                  => 'required',
            'usr_postal_code'                                 => 'required',
            'prv_name'                                        => 'required',
            'cit_name'                                        => 'required',
            'dst_name'                                        => 'required',
            // 'stf_nuptk'                                       => 'unique:staffs,stf_nuptk',
            'personal.nik'                                    => 'required',
            'educational_background.year_grade_school'        => 'required',
            'educational_background.grade_school'             => 'required',
            'educational_background.year_junior_high_school'  => 'required',
            'educational_background.junior_high_school'        => 'required',
            'educational_background.year_senior_high_school'  => 'required',
            'educational_background.senior_high_school'       => 'required',
            'other.identity_card'                             => 'required',
            'other.family_card'                               => 'required',
            'other.senior_high_school_diploma'                => 'required',
            'other.curriculum_vitae'                          => 'required',
            'other.application_letter'                        => 'required',
            'other.resume'                                    => 'required',
        ], $messages);

        $staff = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
        ->where('staffs.stf_user_id', Auth::user()->usr_id)->first();
        $user = Auth()->user();
        // dd($user->usr_gender);
        $user->usr_name             = $request->usr_name;
        $user->usr_place_of_birth   = $request->usr_place_of_birth;
        $user->usr_date_of_birth    = $request->usr_date_of_birth;
        $user->usr_religion         = $request->usr_religion;
        $user->usr_gender           = $request->usr_gender;        
        $user->usr_whatsapp_number  = $request->usr_whatsapp_number;
        $user->usr_district_id      = $request->dst_name;
        $user->usr_address          = $request->usr_address;
        $user->usr_rt               = $request->usr_rt;
        $user->usr_rw               = $request->usr_rw;
        $user->usr_rural_name       = $request->usr_rural_name;
        $user->usr_postal_code      = $request->usr_postal_code;
        $user->usr_is_regist        = '1';

        if ($request->hasFile('usr_profile_picture')) {
            $files = $request->file('usr_profile_picture');
            $path = public_path('images/users_profile');
            $files_name = 'images' . '/' . 'users_profile' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $user->usr_profile_picture = $files_name;
        }

        if ($user->update()) {
            $staff->stf_nuptk                 = $request->stf_nuptk;
            $staff->stf_registration_status   = "0";
            $staff->stf_created_by = Auth()->user()->usr_id;

            if ($staff->update()) {
                foreach ($requests as $key => $requestData) {
                    if (is_array($requestData)) {
                        foreach ($requestData as $requestKey => $requestValue) {
                            // dd($requests, $request, $requestData, $requestKey, $requestValue, $key);                            
                            $staffDetail = new StaffDetails;
                            $staffDetail->sfd_staff_id = $staff->stf_id;
                            $staffDetail->sfd_type       = $key;
                            $staffDetail->sfd_key        = $requestKey;
                            $staffDetail->sfd_value      = $requestValue;
                            $staffDetail->sfd_created_by = $user->usr_id;
                            $staffDetail->save();
                        }
                    }
                }
            } else {
                dd('gagal staff ');
            }
            $images = $request->file('other');
            // dd($image);
            if ($images) {
                foreach ($images as $key => $image) {
                    // dd($images, $key, $image);
                    if ($image) {
                        $path = public_path('images/staff_files');
                        $files_name = 'images' .'/'. 'staff_files' .'/'. date('Ymd') . '_' . $image->getClientOriginalName();
                        // dd($images);
                        $image->move($path, $files_name);
                        $staffDetail = new StaffDetails;
                        $staffDetail->sfd_staff_id = $staff->stf_id;
                        $staffDetail->sfd_type       = 'other';
                        $staffDetail->sfd_key        = $key;
                        $staffDetail->sfd_value      = $files_name;
                        $staffDetail->sfd_created_by = $user->usr_id;
                        $staffDetail->save();
                    }
                }
            }
        } else {
            dd('gagal user');
        }
        return redirect('/pending-verification/' . $staff->stf_id);
    }

    public function receipted($stf_id)
    {
        $staff = Staffs::findOrFail($stf_id);
        $staff->stf_registration_status = '1';
        $staff->update();
        return back()->with('success', 'Staff berhasil diterima');
    }

    public function rejected($stf_id)
    {
        $staff = Staffs::findOrFail($stf_id);
        
        $staff->stf_registration_status = '2';
        $staff->update();

        return back()->with('success', 'Staff berhasil ditolak');
    }

    public function restore($stf_id)
    {
        $staff = Staffs::findOrFail($stf_id);
        
        $staff->stf_registration_status = '0';
        $staff->update();

        return back()->with('success', 'Staff berhasil dikembalikan menjadi calon staff');
    }
}


