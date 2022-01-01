<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use App\Http\Controllers\studentcoreController;
use App\Http\Controllers\TestUPController;
use Illuminate\Routing\RouteGroup;

// use App\Http\Controllers\TestUPController;

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

Route::get('/', 'indexController@index');

//ตรวจสอบสถานะการสมัครเข้าเรียน(หน้าหลัก)
Route::get('/check/status', function () {
    return view('Newstudent.success-statuscheck.form-check-index');
});

//ส่งเอกสารรายงานตัว(หน้าหลัก)
Route::get('/Newstudent/documentIndex', function () {
    return view('Newstudent.Newstudent-document.form-document-index');
});

//ส่งเอกสารรายงานตัว ม.1
Route::get('/Newstudent/documentM1', function () {
    return view('Newstudent.Newstudent-document.document-statusM1');
});
Route::post('/search/documentM1', 'newstudentm1Controller@searchdocument');

Route::get('/Newstudent/documentM1onsubmit', function () {
    return view('Newstudent.Newstudent-document.document-statusM1-onsubmit');
});

Route::get('/documentPhotoM1/{id}', 'newstudentm1Controller@documentM1');
Route::post('/editDocumentM1/{id}', 'newstudentm1Controller@editDocument');

//ส่งเอกสารรายงานตัว ม.4
Route::get('/Newstudent/documentM4', function () {
    return view('Newstudent.Newstudent-document.document-statusM4');
});
Route::post('/search/documentM4', 'newstudentm4Controller@searchdocument');

Route::get('/Newstudent/documentM4onsubmit', function () {
    return view('Newstudent.Newstudent-document.document-statusM4-onsubmit');
});

Route::get('/documentPhotoM4/{id}', 'newstudentm4Controller@documentM4');
Route::post('/editDocumentM4/{id}', 'newstudentm4Controller@editDocument');


//Route::view('/AddstudentCore','Studentcore.addstudentcore');

//NewstudentRegister
Route::get('/AgreeMentNewstudentRegisterM1', function () {
    return view('Newstudent.agreement-newstudentm1');
});
Route::get('/AgreeMentNewstudentRegisterM4', function () {
    return view('Newstudent.agreement-newstudentm4');
});
//studentm1
Route::resource('/SortNewstudentM1', 'newstudentm1Controller');

Route::get('/NewstudentM1', function () {
    return view('Newstudent.newstudentm1');
});

Route::get('/SortNewstudentM1/{id}', 'newstudentm1Controller@show');
Route::get('/FixNewstudentM1/{id}', 'newstudentm1Controller@edit');
Route::post('/updated1/{id}', 'newstudentm1Controller@update');
Route::get('/deletem1/{id}', 'newstudentm1Controller@destroy');

Route::post('/insertnewstudentm1', 'newstudentm1Controller@store');

Route::post('/searchM1', 'newstudentm1Controller@search');
Route::get('/success/rigisM1', function () {
    return view('Newstudent.success-statuscheck.success-regisM1');
});

//ตรวจสอบสถานะการสมัครเข้าเรียน
Route::get('/check/statusM1', function () {
    return view('Newstudent.success-statuscheck.check-statusM1');
});
Route::post('/search/statusM1', 'newstudentm1Controller@searchstatus');

Route::get('/check/statusM1onsubmit', function () {
    return view('Newstudent.success-statuscheck.check-statusM1-onsubmit');
});
//---------------------------------------------------------------------

Route::get('/success/checkM1', function () {
    return view('Newstudent.success-statuscheck.success-checkM1');
});

Route::get('/EditNewstudentM1/{id}', 'newstudentm1Controller@editnewstudentm1');
Route::post('/updateNewstudentM1/{id}', 'newstudentm1Controller@updatestudent');
Route::get('/ShowNewstudentM1/{id}', 'newstudentm1Controller@shownewstudentm1');

//statusPic
Route::get('/statusM1pic/{id}', 'newstudentm1Controller@showStatusPic');
Route::post('/updatePicM1/{id}', 'newstudentm1Controller@updateStatusPic');

Route::get('/ProfileStudentM1/{id}', 'newstudentm1Controller@profileStudent');
Route::get('/IdCardStudentM1/{id}', 'newstudentm1Controller@IdCardStudent');
Route::get('/HouseStudentM1/{id}', 'newstudentm1Controller@HouseStudent');
Route::get('/SubmitStudentM1/{id}', 'newstudentm1Controller@SubmitStudent');
Route::get('/IdCardFatherM1/{id}', 'newstudentm1Controller@IdCardFather');
Route::get('/IdCardMotherM1/{id}', 'newstudentm1Controller@IdCardMother');
Route::get('/IdCardParentM1/{id}', 'newstudentm1Controller@IdCardParent');
Route::get('/HouseFatherM1/{id}', 'newstudentm1Controller@HouseFather');
Route::get('/HouseMotherM1/{id}', 'newstudentm1Controller@HouseMother');
Route::get('/HouseParentM1/{id}', 'newstudentm1Controller@HouseParent');
Route::get('/FrontGradeM1/{id}', 'newstudentm1Controller@FrontGrade');
Route::get('/BackGradeM1/{id}', 'newstudentm1Controller@BackGrade');
Route::get('/BirthCertificateM1/{id}', 'newstudentm1Controller@BirthCertificate');
Route::get('/DisabilityCertificateM1/{id}', 'newstudentm1Controller@DisabilityCertificate');


//studentm4
Route::resource('/SortNewstudentM4', 'newstudentm4Controller');

Route::get('/NewstudentM4', 'newstudentm4Controller@create');

Route::get('/SortNewstudentM4/{id}', 'newstudentm4Controller@show');
Route::get('/FixNewstudentM4/{id}', 'newstudentm4Controller@edit');
Route::post('/updated4/{id}', 'newstudentm4Controller@update');
Route::get('/deletem4/{id}', 'newstudentm4Controller@destroy');

Route::post('/insertnewstudentm4', 'newstudentm4Controller@store');

Route::post('/searchM4', 'newstudentm4Controller@search');
Route::get('/success/rigisM4', function () {
    return view('Newstudent.success-statuscheck.success-regisM4');
});

//ตรวจสอบสถานะการสมัครเข้าเรียน
Route::get('/check/statusM4', function () {
    return view('Newstudent.success-statuscheck.check-statusM4');
});

Route::post('/search/statusM4', 'newstudentm4Controller@searchstatus');

Route::get('/check/statusM4onsubmit', function () {
    return view('Newstudent.success-statuscheck.check-statusM4-onsubmit');
});
//---------------------------------------------------------------------

Route::get('/success/checkM4', function () {
    return view('Newstudent.success-statuscheck.success-checkM4');
});

Route::get('/EditNewstudentM4/{id}', 'newstudentm4Controller@editnewstudentm4');
Route::post('/updateNewstudentM4/{id}', 'newstudentm4Controller@updatestudent');
Route::get('/ShowNewstudentM4/{id}', 'newstudentm4Controller@shownewstudentm4');

//statusPic
Route::get('/statusM4pic/{id}', 'newstudentm4Controller@showStatusPic');
Route::post('/updatePicM4/{id}', 'newstudentm4Controller@updatePic');

Route::get('/ProfileStudentM4/{id}', 'newstudentm4Controller@profileStudent');
Route::get('/IdCardStudentM4/{id}', 'newstudentm4Controller@IdCardStudent');
Route::get('/HouseStudentM4/{id}', 'newstudentm4Controller@HouseStudent');
Route::get('/SubmitStudentM4/{id}', 'newstudentm4Controller@SubmitStudent');
Route::get('/IdCardFatherM4/{id}', 'newstudentm4Controller@IdCardFather');
Route::get('/IdCardMotherM4/{id}', 'newstudentm4Controller@IdCardMother');
Route::get('/IdCardParentM4/{id}', 'newstudentm4Controller@IdCardParent');
Route::get('/HouseFatherM4/{id}', 'newstudentm4Controller@HouseFather');
Route::get('/HouseMotherM4/{id}', 'newstudentm4Controller@HouseMother');
Route::get('/HouseParentM4/{id}', 'newstudentm4Controller@HouseParent');
Route::get('/FrontGradeM4/{id}', 'newstudentm4Controller@FrontGrade');
Route::get('/BackGradeM4/{id}', 'newstudentm4Controller@BackGrade');
Route::get('/BirthCertificateM4/{id}', 'newstudentm4Controller@BirthCertificate');
Route::get('/DisabilityCertificateM4/{id}', 'newstudentm4Controller@DisabilityCertificate');

// Route::resource('testup', TestUPController::class);

//Studentcore
Route::resource('/StudentCore', 'studentcoreController');

Route::get('/Addstudentcore', 'studentcoreController@create');

Route::get('/StudentCore/{id}', 'studentcoreController@show');
Route::get('/FixStudentCore/{id}', 'studentcoreController@edit');
Route::post('/updatedstudentcore/{id}', 'studentcoreController@update');
Route::get('/deletestudentcore/{id}', 'studentcoreController@destroy');
Route::post('/addstudentcore', 'studentcoreController@addstudentcore');

Route::post('/searchStudent', 'studentcoreController@search');

//ข้อมูลนักเรียนพื้นฐาน
Route::get('/showStudentByID/{id}', 'studentcoreController@showStudentByID');


//test controller
Route::get('/testall', 'TestUPController@index');
Route::post('/testmulti', 'TestUPController@testmultiup');

Route::get('/Fixtest/{id}', 'TestUPController@edit');
Route::get('/Fixfile/{id}', 'TestUPController@editfile');
Route::get('/showtest/{id}', 'TestUPController@show');
Route::post('/updatedtest/{surname}', 'TestUPController@update');
Route::post('/updatedfile/{id}', 'TestUPController@updatefile');

Route::get('/testup', 'TestUPController@createview');
Route::post('/created', 'TestUPController@create');

Route::get('/test/report', 'newstudentm1Controller@reportExel');
Route::get('/testlink', function () {
    return view('testall.form-m1');
});




Auth::routes();

//AcademicLogin
Route::get('/academic', 'AcademicsController@index')->name('academic.dashboard');
Route::get('/academic/login', 'Auth\AcademicsLoginController@showLogin')->name('academic.login');
Route::post('/academic/login', 'Auth\AcademicsLoginController@login')->name('academic.login.submit');
Route::post('/academic/logout', 'Auth\AcademicsLoginController@logout')->name('academic.logout');

//AdminLogin
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
//AdminResetPassword
Route::post('/admin/password/username', 'Auth\AdminForgotPassword@sendResetLinkUsername')->name('admin.password.username');
Route::get('/admin/password/reset', 'Auth\AdminForgotPassword@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset', 'Auth\AdminResetPassword@reset');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPassword@showResetForm')->name('admin.password.reset');

//StudentLogin
Route::get('/student', 'StudentController@index')->name('student.dashboard');
Route::get('/student/login', 'Auth\StudentLoginController@showLogin')->name('student.login');
Route::post('/student/login', 'Auth\StudentLoginController@login')->name('student.login.submit');
Route::post('/student/logout', 'Auth\StudentLoginController@logout')->name('student.logout');


//AffairLogin
Route::get('/affair', 'AffairController@index')->name('affair.dashboard');
Route::get('/affair/login', 'Auth\AffairLoginController@showLogin')->name('affair.login');
Route::post('/affair/login', 'Auth\AffairLoginController@login')->name('affair.login.submit');
Route::post('/affair/logout', 'Auth\AffairLoginController@logout')->name('affair.logout');

Route::get('/home', 'HomeController@index')->name('home');


//Export file
Route::get('/export/newstudentm1', 'newstudentm1Controller@reportExel');
Route::get('/export/newstudentm4', 'newstudentm4Controller@reportExel');

Route::post('/search/reportM1', 'newstudentm1Controller@reportExel');
Route::post('/search/reportM4', 'newstudentm4Controller@reportExel');

//behavior
Route::get('/behavior/index', 'behaviorstudentController@index');
Route::post('/SearchBehavior/index', 'behaviorstudentController@index');

Route::get('/behavior/all', 'behaviorstudentController@behaviorIndex');
Route::post('/SearchBehavior/all', 'behaviorstudentController@behaviorIndex');

Route::get('/behaviorMinus/{id}', 'behaviorstudentController@addMinus');
Route::get('/behaviorPlus/{id}', 'behaviorstudentController@addPlus');
Route::get('/behaviorView/{id}', 'behaviorstudentController@viewBehaviorID');
Route::post('/minusinsert/{id}', 'behaviorstudentController@minusInsert');
Route::post('/plusinsert/{id}', 'behaviorstudentController@plusInsert');

//behavior report
Route::get('behaviorReport/index', function () {
    return view('behavior-student.behavior-report.behavior-report-index');
});
Route::get('/behaviorReport/all', 'behaviorstudentController@behaviorAll');
Route::post('/search/reportbehaviorall', 'behaviorstudentController@behaviorAll');

Route::get('/behaviorReportID/{id}', 'behaviorstudentController@viewBehaviorIDReport');

//academic
//-->เลื่อนชั้นเรียน
Route::get('/academic/class', 'AcademicsController@academicClassAll');
Route::post('/Searchacademic/class', 'AcademicsController@academicClassAll');

Route::get('/academic/classChange', 'AcademicsController@academicClassChange');
Route::post('/Searchacademic/classChange', 'AcademicsController@academicClassChange');
Route::post('/academic/classChangeStatus', 'AcademicsController@academicChangeStatusAndClass');

//-->จบการศึกษา
Route::get('/academic/final', 'AcademicsController@academicFinalAll');
Route::post('/Searchacademic/final', 'AcademicsController@academicFinalAll');

Route::get('/academic/finalChange', 'AcademicsController@academicFinalChange');
Route::post('/Searchacademic/finalChange', 'AcademicsController@academicFinalChange');
Route::post('/academic/classChangeFinal', 'AcademicsController@academicChangeFinal');

//-->ย้ายสถานศึกษา
Route::get('/academic/move', 'AcademicsController@academicMoveAll');
Route::post('/Searchacademic/move', 'AcademicsController@academicMoveAll');

Route::get('/academic/moveChange', 'AcademicsController@academicMoveChange');
Route::post('/Searchacademic/moveChange', 'AcademicsController@academicMoveChange');
Route::post('/academic/classChangeMove/{id}', 'AcademicsController@academicChangeMove');

//-->ออกกลางคัน
Route::get('/academic/out', 'AcademicsController@academicOutAll');
Route::post('/Searchacademic/out', 'AcademicsController@academicOutAll');

Route::get('/academic/outChange', 'AcademicsController@academicOutChange');
Route::post('/Searchacademic/outChange', 'AcademicsController@academicOutChange');
Route::post('/academic/classChangeOut/{id}', 'AcademicsController@academicChangeOut');

//เพิ่มแอคเค้านักเรียน
Route::get('/academic/allAccount', 'AcademicsController@showAccountStudent');
Route::post('/Searchacademic/allAccount', 'AcademicsController@showAccountStudent');
Route::get('/academicShow/{id}', 'AcademicsController@showAccount');

Route::get('/academic/addAccount', 'AcademicsController@addAccountStudent');
Route::post('/academic/addAccountInsert', 'AcademicsController@addAccount');
Route::get('/academicDelete/{id}', 'AcademicsController@destroy');

//จัดการห้องเรียน
Route::get('/academic/classRoom', 'AcademicsController@classRoom');
Route::get('/academic/classRoomAdd', 'AcademicsController@classRoomAdd');
Route::post('/classRoom/Insert', 'AcademicsController@classRoomInsert');

Route::get('/classRoomShow/{id}', 'AcademicsController@classRoomShow');
Route::post('/classRoomEdit/{id}', 'AcademicsController@classRoomEdit');

Route::get('/classRoomDelete/{id}', 'AcademicsController@deleteClassRoom');

//จัดการสายการเรียน
Route::get('/academic/classMajor', 'AcademicsController@classMajor');
Route::get('/academic/classMajorAdd', 'AcademicsController@classMajorAdd');
Route::post('/classMajor/Insert', 'AcademicsController@classMajorInsert');

Route::get('/classMajorShow/{id}', 'AcademicsController@classMajorShow');
Route::post('/classMajorEdit/{id}', 'AcademicsController@classMajorEdit');

Route::get('/classMajorDelete/{id}', 'AcademicsController@deleteClassMajor');

//ข้อมูลนักเรียนพื้นฐาน
Route::get('/showStudentByID/{id}', 'StudentController@showStudentByID');

Route::get('/editStudentByID/{id}', 'StudentController@editStudentByID');
Route::post('/upStudent/{id}', 'StudentController@upStudentByID');

//รายงานตัวและย้ายข้อมูล
Route::get('/documentIndex/M1', 'AcademicsController@documentIndexM1');
Route::post('/Searchdocument/M1', 'AcademicsController@documentIndexM1');

Route::get('/documentM1/{id}', 'AcademicsController@documentAllM1');

Route::get('/tranferM1/{id}', 'AcademicsController@tranferM1');
Route::post('/tranferM1Insert/{id}', 'AcademicsController@tranferM1Insert');

//ม.4
Route::get('/documentIndex/M4', 'AcademicsController@documentIndexM4');
Route::post('/Searchdocument/M4', 'AcademicsController@documentIndexM4');

Route::get('/documentM4/{id}', 'AcademicsController@documentAllM4');

Route::get('/tranferM4/{id}', 'AcademicsController@tranferM4');
Route::post('/tranferM4Insert/{id}', 'AcademicsController@tranferM4Insert');

