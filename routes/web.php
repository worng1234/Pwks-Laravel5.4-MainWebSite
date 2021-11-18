<?php

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

Route::get('/', function () {
    return view('index');
});


//Route::view('/AddstudentCore','Studentcore.addstudentcore');

//NewstudentRegister
 Route::get('/AgreeMentNewstudentRegisterM1', function () {
    return view('Newstudent.agreement-newstudentm1');
} );
 Route::get('/AgreeMentNewstudentRegisterM4', function () {
    return view('Newstudent.agreement-newstudentm4');
} );
//studentm1
Route::resource('/SortNewstudentM1', 'newstudentm1Controller');

Route::get('/NewstudentM1', function () {
    return view('Newstudent.newstudentm1');
} );

Route::get('/SortNewstudentM1/{id}', 'newstudentm1Controller@show');
Route::get('/FixNewstudentM1/{id}', 'newstudentm1Controller@edit');
Route::post('/updated1/{id}', 'newstudentm1Controller@update');
Route::get('/deletem1/{id}', 'newstudentm1Controller@destroy');

Route::post('/insertnewstudentm1', 'newstudentm1Controller@store');

//studentm4
Route::resource('/SortNewstudentM4', 'newstudentm4Controller');

Route::get('/NewstudentM4', function () {
    return view('Newstudent.newstudentm4');
} );

Route::get('/SortNewstudentM4/{id}', 'newstudentm4Controller@show');
Route::get('/FixNewstudentM4/{id}', 'newstudentm4Controller@edit');
Route::post('/updated4/{id}', 'newstudentm4Controller@update');
Route::get('/deletem4/{id}', 'newstudentm4Controller@destroy');

Route::post('/insertnewstudentm4', 'newstudentm4Controller@store');

// Route::resource('testup', TestUPController::class);

//Studentcore
Route::resource('/StudentCore', 'studentcoreController');

Route::get('/Addstudentcore', function () {
    return view('Studentcore.addstudentcore');
} );

Route::get('/StudentCore/{id}', 'studentcoreController@show');
Route::get('/FixStudentCore/{id}', 'studentcoreController@edit');
Route::post('/updatedstudentcore/{id}', 'studentcoreController@update');
Route::get('/deletestudentcore/{id}', 'studentcoreController@destroy');
Route::post('/addstudentcore', 'studentcoreController@addstudentcore');


Route::get('/testupload', function () {
    return view('test');
} );

Route::post('/created', 'TestUPController@create');


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

Route::get('/home', 'HomeController@index')->name('home');

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


