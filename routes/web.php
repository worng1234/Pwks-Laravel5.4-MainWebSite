<?php

use Illuminate\Support\Facades\Route;
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


