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
                $detail = '<a href="' . url('students', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';

                if (Auth()->user()->hasRole('admin')) {
                    $edit = '<a href="' . url('student/edit', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
                    $delete = '<button onclick="btnDel(' . $row->stu_id . ')" name="btnDel" type="button" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="fa fa-trash fa-lg"></i></button>';
                }

                if (Auth()->user()->hasRole('admin')) {
                    return $detail . '&nbsp' . $edit . '&nbsp' . $delete;
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
                $detail = '<a href="' . url('students', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
                $approve = '<a href="' . url('student/approve', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TERIMA" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-check fa-lg"></i></a>';
                $rejected = '<a href="' . url('student/reject', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="TOLAK" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="zmdi zmdi-close fa-lg"></i></a>';
                return $detail . '&nbsp' . $approve . '&nbsp' . $rejected;
            
            })->rawColumns(['action'])
            ->make(true);
    }
    public function getStudentRejected(Request $request)
    {
        $students_rejected = Students::getStudentRejected($request->query());
        // dd($students_rejected);
        return Datatables::of($students_rejected)
            ->addColumn('action', function ($row) { 
                $detail = '<a href="' . url('students', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="DETAIL" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-info-outline fa-lg"></i></a>';
                $restore = '<a href="' . url('student/restore', $row->stu_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="KEMBALI" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="zmdi zmdi-time-restore-setting fa-lg"></i></a>';            
                return $detail . '&nbsp' . $restore;
            
            })->rawColumns(['action'])
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
                    $delete = '<button onclick="btnDel(' . $row->stf_id . ')" name="btnDel" type="button" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="fa fa-trash fa-lg"></i></button>';
                }
                if (Auth()->user()->hasRole('admin')) {
                    return $detail . '&nbsp' . $edit . '&nbsp' . $delete;
                } else {
                    return $detail;
                }
            })->rawColumns(['action', 'usr_is_active'])
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
                    $delete = '<button onclick="btnDel(' . $row->tcr_id . ')" name="btnDel" type="button" class="btn btn-outline-danger waves-effect waves-light m-1"><i class="fa fa-trash fa-lg"></i></button>';
                }

                if (Auth()->user()->hasRole('admin')) {
                    return $detail . '&nbsp' . $edit . '&nbsp' . $delete;
                } else {
                    return $detail;
                }
            })->rawColumns(['action', 'usr_is_active'])
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
            })
            ->addColumn('action', function ($row) {
                $edit = '<a href="' . url('position-type/edit', $row->pst_id) . '" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i></a>';
                return $edit;
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
                return $edit;
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
                return $edit;
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
                return $edit;
            })->rawColumns(['action', 'mjr_is_active'])
            ->make(true);
    }
}
