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
    //Mengupload bukti pembayaran
    Route::get('/payment-upload', 'StudentController@payment');
    Route::post('/payment-upload', 'StudentController@payment_upload');

    //Menunggu Verifikasi Terima atau Tolak
    Route::get('/pending-verification', 'Auth\AccountController@pending_verification');

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
    Route::get('/staff/{stf_id}', 'StaffController@show_staff');
    Route::get('/staff/edit/{stf_id}', 'StaffController@edit');
    Route::post('/staff/edit/{stf_id}', 'StaffController@update');
    Route::get('/staffs/delete/1', 'StaffController@destroy');


    Route::get('/teachers', function () {
        return view('teachers.list-teacher');
    });
    Route::get('teacher', 'DatatableController@getTeachers');

    Route::get('/teachers-prospective', function(){
        return view('teachers.list-teacher-prospective');
    });
    Route::get('teacher/prospective', 'DatatableController@getTeachersProspective');

    Route::get('/teachers-rejected', function(){
        return view('teachers.list-teacher-rejected');
    });
    Route::get('teacher/rejected', 'DatatableController@getTeachersRejected');


    Route::get('/teacher/create', 'TeacherController@create');
    Route::post('/teacher/create', 'TeacherController@store');
    Route::get('/teacher/{tcr_id}', 'TeacherController@show_teacher');
    Route::get('/teacher/edit/{tcr_id}', 'TeacherController@edit');
    Route::post('/teacher/edit/{tcr_id}', 'TeacherController@update');
    Route::get('/teachers/delete/1', 'TeacherController@destroy');
    Route::get('/teacher/restore/{tcr_id}', 'TeacherController@restore');

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

    Route::get('/student-payments', function () {
        return view('students.list-student-payment');
    });
    Route::get('/student/payment', 'DatatableController@getStudentPayment');

    

    Route::get('/student/create', 'StudentController@create');
    Route::post('/student/create', 'StudentController@store');
    Route::get('/student/{stu_id}', 'StudentController@show_student');
    Route::get('/student/edit/{std_id}', 'StudentController@edit');
    Route::post('/student/edit/{std_id}', 'StudentController@update');
    Route::post('/student/delete', 'StudentController@destroy');    
    Route::get('/student/payment/{std_id}', 'StudentController@payment_detail');

    Route::get('/page/list', 'PageController@index');
    Route::get('/page/detail', 'PageController@show');
    Route::get('/page/add', 'PageController@create');
    Route::get('/page/edit', 'PageController@edit');

    Route::get('/account/profile/edit-password', 'Auth\AccountController@editPassword');
    Route::post('/account/profile/edit-password', 'Auth\AccountController@storeEditPassword');

    Route::get('/account/profile/edit', 'Auth\AccountController@editProfile');
    Route::post('/account/profile/edit', 'Auth\AccountController@storeEditProfile');

    Route::get('/account/profile', 'Auth\AccountController@profile');


});

Route::group(['middleware' => ['auth', 'verified', 'accepted', 'DisablePreventBack', 'role:admin|staff']], function () {
    Route::get('school-years', function () {
        return view('years.list-year');
    });
    Route::get('/school-year', 'DatatableController@getSchoolYear');
    Route::get('/school-year/create', 'YearController@create');
    Route::post('/school-year/create', 'YearController@store');
    Route::get('/school-year/edit/{scy_id}', 'YearController@edit');
    Route::post('/school-year/edit/{scy_id}', 'YearController@update');

    Route::get('/majors', function () {
        return view('majors.list-major');
    });
    Route::get('/major', 'DatatableController@getMajor');
    Route::get('/major/create', 'MajorController@create');
    Route::post('/major/create', 'MajorController@store');
    Route::get('/major/edit/{mjr_id}', 'MajorController@edit');
    Route::post('/major/edit/{mjr_id}', 'MajorController@update');

    Route::get('/subjects', function () {
        return view('subjects.index');
    });
    Route::get('subject', 'DatatableController@getSubject');
    Route::get('/subject/create', 'SubjectController@create');
    Route::post('/subject/create', 'SubjectController@store');
    Route::get('/subject/edit/{subjectID}', 'SubjectController@edit');
    Route::post('/subject/edit/{subjectID}', 'SubjectController@update');
    Route::get('/subject/edit-status/{subjectID}','SubjectController@editStatus');

    Route::get('/position-types', function () {
        return view('position-types.index');
    });
    Route::get('/position-type', 'DatatableController@getPositionType');
    Route::get('/position-type/create', 'PositionTypeController@create');
    Route::post('/position-type/create', 'PositionTypeController@store');
    Route::get('/position-type/edit/{positionTypeID}', 'PositionTypeController@edit');
    Route::post('/position-type/edit/{positionTypeID}', 'PositionTypeController@update');
    Route::get('/position-type/edit-status/{positionTypeID}', 'PositionTypeController@editStatus');

    Route::get('/classes', function () {
        return view('classes.list-class');
    });
    Route::get('/class', 'DatatableController@getClasses');

    Route::get('/class/create', 'ClassController@create');
    Route::post('/class/create', 'ClassController@store');
    Route::get('/class/edit/{classID}', 'ClassController@edit');
    Route::post('/class/edit/{classID}', 'ClassController@update');
    Route::get('/class/edit-status/{classID}', 'ClassController@editStatus');


    //terima, tolak, restore,  dan terima pembayaran siswa
    Route::get('/student/receipted/{stu_id}', 'StudentController@receipted');
    Route::post('/student/receipted/{str_id}', 'StudentController@storeReceipted');
    Route::get('/student/rejected/{stu_id}', 'StudentController@rejected');
    Route::post('/student/rejected/{str_id}', 'StudentController@storeRejected');
    Route::get('/student/restore/{std_id}', 'StudentController@restore');
    Route::get('/student/accept-payment/{std_id}', 'StudentController@acceptPayment');
    Route::post('/student/accept-payment/{std_id}', 'StudentController@storeAcceptPayment');
    Route::get('/student/refuse-payment/{std_id}', 'StudentController@refusePayment');
    Route::post('/student/refuse-payment/{std_id}', 'StudentController@storeRefusePayment');    

    //terima tolak dan restore staf
    Route::get('/staff/receipted/{stf_id}', 'StaffController@receipted');
    Route::get('/staff/rejected/{stf_id}', 'StaffController@rejected');
    Route::get('/staff/restore/{stf_id}', 'StaffController@restore');
    
    //terima tolak dan restore guru
    Route::get('/teacher/receipted/{tcr_id}', 'TeacherController@receipted');
    Route::get('/teacher/rejected/{tcr_id}', 'TeacherController@rejected');
    Route::get('/teacher/restore/{tcr_id}', 'TeacherController@restore');
    
    Route::get('/edit-status/{usr_id}', 'Auth\AccountController@edit_status');
    Route::get('/edit-status/school-year/{scy_id}','YearController@edit_status');
    Route::get('/edit-status/major/{mjr_id}','MajorController@edit_status');
});

    //Landing page
    Route::get('/master-slides', function () {
        return view('landing-page.list-master-slide');
    });
    Route::get('/master-slide', 'DatatableController@getMasterSlide');
    Route::get('/master-slide/create', 'LandingPageController@create');
    Route::post('/master-slide/create', 'LandingPageController@store');
    Route::get('/master-slide/edit/{mss_id}', 'LandingPageController@edit');
    Route::post('/master-slide/edit/{mss_id}', 'LandingPageController@update');

    Route::get('/master-configs', function () {
        return view('landing-page.list-master-config');
    });
    Route::get('/master-config', 'DatatableController@getMasterConfig');
    Route::get('/master-config/create', 'LandingPageController@createConfig');
    Route::post('/master-config/create', 'LandingPageController@storeConfig');
    Route::get('/master-config/edit/{msc_id}', 'LandingPageController@editConfig');
    Route::post('/master-config/edit/{msc_id}', 'LandingPageController@updateConfig');

    //download file
    Route::get('/download-file-student/images/student_files/{locationFile}','User\UserController@downloadFileStudent');
    Route::get('/download-file-teacher/images/teacher_files/{locationFile}','User\UserController@downloadFileTeacher');
    Route::get('/download-file-staff/images/staff_files/{locationFile}','User\UserController@downloadFileStaff');