<?php

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
    return view('auth/login');
});

// Route::get('/', function () {
//     return view('layout/index');
// });
Route::resource('doctor', 'DoctorController');
Route::resource('report', 'ReportController');
Route::resource('patient', 'PatientController');
Route::resource('medical-record', 'MedicalRecordController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
