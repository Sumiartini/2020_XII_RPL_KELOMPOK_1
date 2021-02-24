<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Students;
use App\Staffs;
use App\Teachers;
use App\PositionTypes;
use App\Subjects;
use App\Years;
use App\majors;
use App\MasterSlides;
use App\MasterConfigs;

class DatatableController extends Controller
{
    public function getStudent(Request $request)
    {
        $students = Students::getStudents($request->query());
        return Datatables::of($students)
        ->editColumn("usr_is_active", function ($row) {
            $usr_is_active = $row->usr_is_active;
            if ($usr_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($usr_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $detail = '<a href="' . url('student', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';

            if (Auth()->user()->hasRole('admin')) {
                $edit = '<a href="' . url('student/edit', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
                $usr_is_active = $row->usr_is_active;
                if ($usr_is_active == '0') {
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
                }else{
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
                }

            }

            if (Auth()->user()->hasRole('admin')) {
                return $detail . '&nbsp' . $edit . '&nbsp' . $status;
            } else {
                return $detail;
            }
        })->rawColumns(['action', 'usr_is_active'])
        ->make(true);
    }

    public function getStudentProspective(Request $request)
    {
        $students_prospective = Students::getStudentProspective($request->query());
        // dd($students_prospective);
        return Datatables::of($students_prospective)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('student', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $receipted = '<a href="' . url('student/receipted', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>';
            $rejected = '<a href="' . url('student/rejected', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="zmdi zmdi-close fa-lg"></i></a>';
            return $detail . '&nbsp' . $receipted . '&nbsp' . $rejected;
            
        })->rawColumns(['action'])
        ->make(true);
    }
    public function getStudentRejected(Request $request)
    {
        $students_rejected = Students::getStudentRejected($request->query());
        // dd($students_rejected);
        return Datatables::of($students_rejected)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('student', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $restore = '<a href="' . url('student/restore', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="KEMBALI" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-time-restore-setting fa-lg"></i></a>';            
            return $detail . '&nbsp' . $restore;
            
        })->rawColumns(['action'])
        ->make(true);
    }
    public function getStudentPayment(Request $request)
    {
        $students_payment = Students::getStudentPayment($request->query());
        // dd($students_payment);
        return Datatables::of($students_payment)        
        ->editColumn("stu_payment_status", function ($row) {
            $stu_payment_status = $row->stu_payment_status;
            if ($stu_payment_status == "0") {
                return '<span class="badge badge-danger shadow-warning m-1">Menunggu</span>';
            } elseif ($stu_payment_status == "1") {
                return '<span class="badge badge-success shadow-success m-1">Diterima</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            if ($row->stu_payment_status == "0") {
                $accept = '<a href="' . url('student/accept-payment', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>';            
                
            }
            $detail = '<a href="' . url('student/payment', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            if ($row->stu_payment_status == "0") {
                return $detail . '&nbsp' . $accept;
            } else{
                return $detail;
            }
        })->rawColumns(['action', 'stu_payment_status'])
        ->make(true);
    }

    public function getStaffs(Request $request)
    {
        $staffs = Staffs::getStaffs($request->query());
        return Datatables::of($staffs)
        ->editColumn("usr_is_active", function ($row) {
            $usr_is_active = $row->usr_is_active;
            if ($usr_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($usr_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $detail = '<a href="' . url('staff', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            if (Auth()->user()->hasRole('admin')) {
                $edit = '<a href="' . url('staff/edit', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
                $usr_is_active = $row->usr_is_active;
                if ($usr_is_active == '0') {
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
                }else{
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
                }
            }
            if (Auth()->user()->hasRole('admin')) {
                return $detail . '&nbsp' . $edit . '&nbsp' . $status;
            } else {
                return $detail;
            }
        })->rawColumns(['action', 'usr_is_active'])
        ->make(true);
    }
    public function getStaffsProspective(Request $request)
    {
        $staffs_prospective = Staffs::getStaffsProspective($request->query());
        // dd($staffs_prospective);
        return Datatables::of($staffs_prospective)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('staff', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $receipted = '<a href="' . url('staff/receipted', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>';
            $rejected = '<a href="' . url('staff/rejected', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="zmdi zmdi-close fa-lg"></i></a>';
            return $detail . '&nbsp' . $receipted . '&nbsp' . $rejected;
            
        })->rawColumns(['action'])
        ->make(true);
    }
    public function getStaffsRejected(Request $request)
    {
        $staffs_rejected = Staffs::getStaffsRejected($request->query());
        // dd($staffs_rejected);
        return Datatables::of($staffs_rejected)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('staff', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $restore = '<a href="' . url('staff/restore', $row->stf_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="KEMBALI" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-time-restore-setting fa-lg"></i></a>';            
            return $detail . '&nbsp' . $restore;
            
        })->rawColumns(['action'])
        ->make(true);
    }

    public function getTeachers(Request $request)
    {
        $teachers = Teachers::getTeachers($request->query());
        return Datatables::of($teachers)
        ->editColumn("usr_is_active", function ($row) {
            $usr_is_active = $row->usr_is_active;
            if ($usr_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($usr_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $detail = '<a href="' . url('teacher', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            if (Auth()->user()->hasRole('admin')) {
                $edit = '<a href="' . url('teacher/edit', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
                $usr_is_active = $row->usr_is_active;
                if ($usr_is_active == '0') {
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
                }else{
                    $status = '<a href="' . url('edit-status', $row->usr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
                }
            }

            if (Auth()->user()->hasRole('admin')) {
                return $detail . '&nbsp' . $edit . '&nbsp' . $status;
            } else {
                return $detail;
            }
        })->rawColumns(['action', 'usr_is_active'])
        ->make(true);
    }

    public function getTeachersProspective(Request $request)
    {
        $teachers_prospective = Teachers::getTeachersProspective($request->query());
        return Datatables::of($teachers_prospective)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('teacher', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $receipted = '<a href="' . url('teacher/receipted', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>';
            $rejected = '<a href="' . url('teacher/rejected', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="zmdi zmdi-close fa-lg"></i></a>';
            return $detail . '&nbsp' . $receipted . '&nbsp' . $rejected;
            
        })->rawColumns(['action'])
        ->make(true);
    }

    public function getTeachersRejected(Request $request)
    {
        $teachers_rejected = Teachers::getTeachersRejected($request->query());
        return Datatables::of($teachers_rejected)
        ->addColumn('action', function ($row) { 
            $detail = '<a href="' . url('teacher', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
            $restore = '<a href="' . url('teacher/restore', $row->tcr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="KEMBALI" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-time-restore-setting fa-lg"></i></a>';            
            return $detail . '&nbsp' . $restore;
            
        })->rawColumns(['action'])
        ->make(true);
    }

    public function getPositionType(Request $request)
    {
        $positionTypes = PositionTypes::getPositionTypes($request->query());
        return Datatables::of($positionTypes)
        ->editColumn("pst_is_active", function ($row) {
            $pst_is_active = $row->pst_is_active;
            if ($pst_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($pst_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })->editColumn("pst_honorarium", function ($row) {
            $pst_honorarium = moneyFormat($row->pst_honorarium);
            return "Rp. " . $pst_honorarium;

        })
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('position-type/edit', $row->pst_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            $pst_is_active = $row->pst_is_active;
            if ($pst_is_active == '0') {
                $status = '<a href="' . url('position-type/edit-status', $row->pst_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
            }else{
                $status = '<a href="' . url('position-type/edit-status', $row->pst_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
            }
            return $edit . '&nbsp' . $status;
        })->rawColumns(['action', 'pst_is_active'])
        ->make(true);
    }

    public function getSubject(Request $request)
    {
        $subjects = Subjects::getSubjects($request->query());
        return Datatables::of($subjects)
        ->editColumn("sbj_is_active", function ($row) {
            $sbj_is_active = $row->sbj_is_active;
            if ($sbj_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($sbj_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('subject/edit', $row->sbj_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            $sbj_is_active = $row->sbj_is_active;
            if ($sbj_is_active == '0') {
                $status = '<a href="' . url('subject/edit-status', $row->sbj_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
            }else{
                $status = '<a href="' . url('subject/edit-status', $row->sbj_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
            }
            return $edit . '&nbsp' . $status;
        })->rawColumns(['action', 'sbj_is_active'])
        ->make(true);
    }

    public function getSchoolYear(Request $request)
    {
        $school_years = Years::getSchoolYears($request->query());
        return Datatables::of($school_years)
        ->editColumn("scy_is_active", function ($row) {
            $scy_is_active = $row->scy_is_active;
            if ($scy_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($scy_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('school-year/edit', $row->scy_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            $scy_is_active = $row->scy_is_active;
            if ($scy_is_active == '0') {
                $status = '<a href="' . url('edit-status/school-year', $row->scy_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
            }else{
                $status = '<a href="' . url('edit-status/school-year', $row->scy_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
            }
            return $edit . '&nbsp' . $status;
        })->rawColumns(['action', 'scy_is_active'])
        ->make(true);
    }

    public function getMajor(Request $request)
    {
        $majors = Majors::getMajors($request->query());
        return Datatables::of($majors)
        ->editColumn("mjr_is_active", function ($row) {
            $mjr_is_active = $row->mjr_is_active;
            if ($mjr_is_active == "0") {
                return '<span class="badge badge-danger shadow-danger m-1">Tidak Aktif</span>';
            } elseif ($mjr_is_active == "1") {
                return '<span class="badge badge-success shadow-success m-1">Aktif</span>';
            } else {
                return "Tidak punya status aktif";
            }
        })
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('major/edit', $row->mjr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            $mjr_is_active = $row->mjr_is_active;
            if ($mjr_is_active == '0') {
                $status = '<a href="' . url('edit-status/major', $row->mjr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Aktifkan" class="btn btn-success"> <i class="zmdi zmdi-check zmdi-lg"></i></a>';
            }else{
                $status = '<a href="' . url('edit-status/major', $row->mjr_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="Non Aktifkan" class="btn btn-danger"> <i class="zmdi zmdi-close zmdi-lg"></i></a>';
            }
            return $edit . '&nbsp' . $status;
        })->rawColumns(['action', 'mjr_is_active'])
        ->make(true);
    }

    public function getMasterSlide(Request $request)
    {
        $master_slides = MasterSlides::getMasterSlides($request->query());
        return Datatables::of($master_slides)
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('master-slide/edit', $row->mss_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            
            return $edit ;
        })->rawColumns(['action'])
        ->make(true);
    }

    public function getMasterConfig(Request $request){
        $master_configs = MasterConfigs::getMasterConfigs($request->query());
        return Datatables::of($master_configs)
        ->addColumn('action', function ($row) {
            $edit = '<a href="' . url('master-config/edit', $row->msc_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
            
            return $edit ;
        })->rawColumns(['action'])
        ->make(true);
    }
}
