<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterSlides;
use App\MasterConfigs;
use App\MasterVideos;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing-page.list-master-slide');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing-page.add-master-slide');
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
        $massages = [
            'required' => 'kolom wajib diisi'
        ];
        $request->validate([
            'mss_name'  => 'required',
            'mss_file'  => 'required',  
        ], $massages);

        $master_slides = new MasterSlides;
        $master_slides->mss_name        = $request->mss_name;
        $master_slides->mss_is_active   = 1;
        $master_slides->mss_created_by  = Auth()->user()->usr_id;
        if ($request->hasFile('mss_file')) {
            $files = $request->file('mss_file');
            $path = public_path('images/landing_pictures');
            $files_name = 'images' . '/' . 'landing_pictures' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $master_slides->mss_file = $files_name;
        }
        $master_slides->save();

        return redirect('/master-slides')->with('success', 'Data berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($masterSlideID)
    {
        $master_slide = MasterSlides::where('mss_id', $masterSlideID)->first();
        return view('landing-page.detail-master-slide', ['master_slide' => $master_slide]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($masterSlideID)
    {
        $master_slide = MasterSlides::where('mss_id', $masterSlideID)->first();
        return view('landing-page.edit-master-slide',['master_slide' => $master_slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $masterSlideID)
    {
        $master_slide = MasterSlides::where('mss_id', $masterSlideID)->first();
        $master_slide->mss_name         = $request->mss_name;
        if ($request->hasFile('mss_file')) {
            $files = $request->file('mss_file');
            $path = public_path('images/landing_pictures');
            $files_name = 'images' . '/' . 'landing_pictures' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $master_slide->mss_file = $files_name;
        }
        $master_slide->mss_updated_by   = Auth()->user()->usr_id;
        $master_slide->update();
        return redirect('master-slide/'.$masterSlideID)->with('success', 'Berkas berhasil di ubah');

    }

     public function editStatus($masterSlideID)
    {
        $slide = MasterSlides::where('mss_id', $masterSlideID)->first();
        if ($slide->mss_is_active == 1) {
            $slide->mss_is_active = 0;
            $slide->mss_updated_by = Auth()->user()->usr_id;
            $slide->update();
            return redirect()->back()->with('success', 'berhasil di non aktifkan');
        }else{
            $slide->mss_is_active = 1;
            $slide->update();
            return redirect()->back()->with('success', 'berhasil di aktifkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function index_master_config()
    {
        
        return view('landing-page.list-master-config');
    }

    public function showConfig($masterConfigID)
    {
        $master_config = MasterConfigs::join('master_videos', 'master_configs.msc_master_video_id', '=', 'master_videos.msv_id')
                        ->where('master_configs.msc_id', $masterConfigID)->get();
        return view('landing-page.detail-master-config',['master_config' => $master_config]);
    }

    public function createConfig(Request $request){
        return view('landing-page.add-master-config');
    }
    
    public function storeConfig(Request $request){
        // dd($request)
        $requests = $request->input();
        $massages = [
            'required' => 'kolom wajib diisi'
        ];
        $request->validate([
            'msc_name'  => 'required',
        ], $massages);

        $master_videos = new MasterVideos;
        $master_videos->msv_name = $request->msv_name;
        $master_videos->msv_url_video = $request->msv_url_video;
        $master_videos->msv_is_active = 1;
        $master_videos->msv_created_by = Auth()->user()->usr_id;
        $master_videos->save();

        $master_configs = new MasterConfigs;
        $master_configs->msc_master_video_id     = $master_videos->msv_id;
        $master_configs->msc_name                = $request->msc_name;
        $master_configs->msc_description         = $request->msc_description;
        $master_configs->msc_vision              = $request->msc_vision;
        $master_configs->msc_mision              = $request->msc_mision;
        if ($request->hasFile('msc_logo')) {
            $files = $request->file('msc_logo');
            $path = public_path('images/school_logo');
            $files_name = 'images' . '/' . 'school_logo' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $master_configs->msc_logo = $files_name;
        }
        $master_configs->msc_first_school_phone_number = $request->msc_first_school_phone_number;
        $master_configs->msc_second_school_phone_number = $request->msc_second_school_phone_number;
        $master_configs->msc_is_active   = 1;
        $master_configs->msc_created_by = Auth()->user()->usr_id;
        $master_configs->save();


        return redirect('/master-configs')->with('success', ' berhasil ditambahkan');
    }

    public function editConfig($masterConfigID){
        $master_config = MasterConfigs::join('master_videos', 'master_configs.msc_master_video_id', '=', 'master_videos.msv_id')
                        ->where('master_configs.msc_id', $masterConfigID)->first();
        return view('landing-page.edit-master-config',['master_config' => $master_config]);
    }

    public function updateConfig(Request $request, $masterConfigID){
        // dd($request);
        $massages = [
            'required' => 'kolom wajib diisi'
        ];
        $request->validate([
            'msc_name'  => 'required',
        ], $massages);


        $master_config = MasterConfigs::where('msc_id', $masterConfigID)->first();
        $master_video = MasterVideos::where('msv_id', $master_config->msc_master_video_id)->first();
        $master_video->msv_name = $request->msv_name;
        $master_video->msv_url_video = $request->msv_url_video;
        $master_video->msv_updated_by = Auth()->user()->usr_id;
        $master_video->update();
        
        $master_config->msc_name                = $request->msc_name;
        $master_config->msc_description         = $request->msc_description;
        $master_config->msc_vision              = $request->msc_vision;
        $master_config->msc_mision              = $request->msc_mision;
        if ($request->hasFile('msc_logo')) {
            $files = $request->file('msc_logo');
            $path = public_path('images/school_logo');
            $files_name = 'images' . '/' . 'school_logo' . '/' . date('Ymd') . '_' . $files->getClientOriginalName();
            $files->move($path, $files_name);
            $master_config->msc_logo = $files_name;
        }
        $master_config->msc_first_school_phone_number = $request->msc_first_school_phone_number;
        $master_config->msc_second_school_phone_number = $request->msc_second_school_phone_number;
        $master_config->msc_updated_by   = Auth()->user()->usr_id;
        $master_config->update();

        return redirect('master-config/'.$masterConfigID)->with('success', 'berhasil di ubah');
    }

    public function editStatusConfig($masterConfigID)
    {
        $config = MasterConfigs::where('msc_id', $masterConfigID)->first();
        $video = MasterVideos::where('msv_id', $config->msc_master_video_id)->first();
        
        if ($config->msc_is_active == 1) {
            $config->msc_is_active = 0;
            $video->msv_is_active = 0;
            $config->msc_updated_by = Auth()->user()->usr_id;
            $config->update();
            return redirect()->back()->with('success', 'berhasil di non aktifkan');
        }else{
            $config->msc_is_active = 1;
            $video->msv_is_active = 1;
            $config->update();
            return redirect()->back()->with('success', 'berhasil di aktifkan');
        }
    }


    //Integrasi landing Page

    public function integrationLandingPage(){
        $master_slide  = MasterSlides::all();
        $master_config = MasterConfigs::join('master_videos', 'master_configs.msc_master_video_id', '=', 'master_videos.msv_id')->get();
        return view('landing-page',['master_config' => $master_config, 'master_slide' => $master_slide]);
    }



}
