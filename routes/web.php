<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use App\Http\Controllers\studentcoreController;
use App\Http\Controllers\TestUPController;

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
Route::get('/check/status', function () {
    return view('Newstudent.success-statuscheck.form-check-index');
});


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


//studentm4
Route::resource('/SortNewstudentM4', 'newstudentm4Controller');

Route::get('/NewstudentM4', function () {
    return view('Newstudent.newstudentm4');
});

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

//test controller
Route::resource('/testall', 'TestUPController');
Route::get('/Fixtest/{id}', 'TestUPController@edit');
Route::get('/Fixfile/{id}', 'TestUPController@editfile');
Route::get('/showtest/{id}', 'TestUPController@show');
Route::post('/updatedtest/{surname}', 'TestUPController@update');
Route::post('/updatedfile/{id}', 'TestUPController@updatefile');

Route::get('/testup', 'TestUPController@createview');
Route::post('/created', 'TestUPController@create');

Route::get('/test/report', 'newstudentm1Controller@reportExel');


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
