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

Route::post('/insertnewstudentm1', 'newstudentm1Controller@store');

//studentm4
Route::resource('/SortNewstudentM4', 'newstudentm4Controller');

Route::get('/NewstudentM4', function () {
    return view('Newstudent.newstudentm4');
} );

Route::post('/insertnewstudentm4', 'newstudentm4Controller@store');

// Route::resource('testup', TestUPController::class);

//Studentcore
Route::resource('/StudentCore', studentcoreController::class);

Route::get('/testupload', function () {
    return view('test');
} );

Route::post('/upload', 'TestUPController@store');


