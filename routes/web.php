<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function () {
    abort(404);
});

Route::get('/', function () {
    return view('landing-page');
});

Auth::routes();


Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

Route::get('/select-registration', 'Auth\RegisterController@selectRegistration');
Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

Route::group(['middleware' => ['auth', 'verified', 'DisablePreventBack']], function () {

    //Menunggu Verifikasi Terima atau Tolak
    Route::get('/pending-verification/{usr_id}', 'Auth\AccountController@pending_verification');

    //Formulir Siswa
    Route::get('/student-registration', 'StudentController@formRegistrasion');
    Route::post('/student-registration', 'StudentController@storeFormRegistrasion');

    //formulir staff
    Route::get('/staff-registration', 'StaffController@formRegistrasion');
    Route::post('/staff-registration', 'StaffController@storeFormRegistrasion');

    //formulir guru
    Route::get('/teacher-registration', 'TeacherController@formRegistrasion');
    Route::post('/teacher-registration', 'TeacherController@storeFormRegistrasion');


});

Route::get('/download/download-file', 'User\UserController@downloadFile')->middleware('auth','verified');
Route::group(['middleware' => ['auth', 'verified', 'accepted', 'DisablePreventBack']], function () {
    Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');


    Route::get('/staffs', function () {
        return view('staffs.list-staff');
    });
    Route::get('staff', 'DatatableController@getStaffs');

    Route::get('/staffs-prospective', function () {
        return view('staffs.list-staff-prospective');
    });
    Route::get('/staff/prospective', 'DatatableController@getStaffsProspective');

    Route::get('/staffs-rejected', function () {
        return view('staffs.list-staff-rejected');
    });
    Route::get('/staff/rejected', 'DatatableController@getStaffsRejected');

   
    Route::post('/staff/create', 'StaffController@store');
    Route::get('/staff/create', 'StaffController@create');
    Route::get('/staff/{stf_id}', 'StaffController@show');
    Route::get('/staff/edit/{stf_id}', 'StaffController@edit');
    Route::post('/staff/edit/{stf_id}', 'StaffController@update');
    Route::get('/staffs/delete/1', 'StaffController@destroy');


    Route::get('/teachers', function () {
        return view('teachers.list-teacher');
    });
    Route::get('teacher', 'DatatableController@getTeachers');

    Route::get('/teachers/prospective', 'TeacherController@list_prospective');
    Route::get('/teachers/rejected', 'TeacherController@list_rejected');
    Route::get('/teacher/create', 'TeacherController@create');
    Route::post('/teacher/create', 'TeacherController@store');
    Route::get('/teacher/{tcr_id}', 'TeacherController@show');
    Route::get('/teachers/prospective/1', 'TeacherController@show_prospective');
    Route::get('/teachers/rejected/1', 'TeacherController@show_rejected');
    Route::get('/teacher/edit/{tcr_id}', 'TeacherController@edit');
    Route::post('/teacher/edit/{tcr_id}', 'TeacherController@store');
    Route::get('/teachers/delete/1', 'TeacherController@destroy');

    Route::get('/students', function () {
        return view('students.list-student');
    });
    Route::get('/student', 'DatatableController@getStudent');

    //Error double route "students/prospective" !!
    Route::get('/students-prospective', function () {
        return view('students.list-student-prospective');
    });
    Route::get('/student/prospective', 'DatatableController@getStudentProspective');

    Route::get('/students-rejected', function () {
        return view('students.list-student-rejected');
    });
    Route::get('/student/rejected', 'DatatableController@getStudentRejected');

    Route::get('/student/create', 'StudentController@create');
    Route::post('/student/create', 'StudentController@store');
    Route::get('/student/{stu_id}', 'StudentController@show_student');
    Route::get('/student/edit/{std_id}', 'StudentController@edit');
    Route::post('/student/edit/{std_id}', 'StudentController@update');
    Route::post('/student/delete', 'StudentController@destroy');
    Route::get('/student/restore/{std_id}', 'StudentController@restore');
    

    Route::get('/page/list', 'PageController@index');
    Route::get('/page/detail', 'PageController@show');
    Route::get('/page/add', 'PageController@create');
    Route::get('/page/edit', 'PageController@edit');

    Route::get('/account/profile/1/edit-password', 'Auth\AccountController@editPassword');
    Route::post('/account/profile/1/edit-password', 'Auth\AccountController@storeEditPassword');

    Route::get('/account/profile/{usr_id}/edit', 'Auth\AccountController@editProfile');
    Route::post('/account/profile/{usr_id}/edit', 'Auth\AccountController@storeEditProfile');


});

Route::group(['middleware' => ['auth', 'verified', 'accepted', 'DisablePreventBack', 'role:admin|staff']], function () {
    Route::get('school-years', function () {
        return view('years.index');
    });
    Route::get('/school-year', 'DatatableController@getSchoolYear');
    Route::get('/school-year/create', 'YearController@create');
    Route::post('/school-year/create', 'YearController@store');
    Route::get('/school-year/edit/1', 'YearController@edit');
    Route::post('/school-year/edit/1', 'YearController@update');

    Route::get('/majors', function () {
        return view('majors.index');
    });
    Route::get('/major', 'DatatableController@getMajor');
    Route::get('/major/create', 'MajorController@create');
    Route::post('/major/create', 'MajorController@store');
    Route::get('/major/edit/1', 'MajorController@edit');
    Route::post('/major/edit/1', 'MajorController@update');

    Route::get('/subjects', function () {
        return view('subjects.index');
    });
    Route::get('subject', 'DatatableController@getSubject');
    Route::get('/subject/create', 'SubjectController@create');
    Route::post('/subject/create', 'SubjectController@store');
    Route::get('/subject/edit/1', 'SubjectController@edit');
    Route::post('/subject/edit/1', 'SubjectController@update');

    Route::get('/position-types', function () {
        return view('position-types.index');
    });
    Route::get('/position-type', 'DatatableController@getPositionType');
    Route::get('/position-type/create', 'PositionTypeController@create');
    Route::post('/position-type/create', 'PositionTypeController@store');
    Route::get('/position-type/edit/1', 'PositionTypeController@edit');
    Route::post('/position-type/edit/1', 'PositionTypeController@update');

    //terima tolak siswa
    Route::get('/student/receipted/{stu_id}', 'StudentController@receipted');
    Route::get('/student/rejected/{stu_id}', 'StudentController@rejected');

    Route::get('/edit-status/{usr_id}', 'Auth\AccountController@edit_status');
});

    //Landing page
    Route::get('/landing-page', 'DatatableController@getLandingPage');
    Route::get('/landing-page/create', 'LandingPageController@create');
    Route::post('/landing-page/create', 'LandingPageController@store');
    Route::get('/landing-page/edit/1', 'LandingPageController@edit');
    Route::post('/landing-page/edit/1', 'LandingPageController@update');