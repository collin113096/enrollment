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
    return view('welcome');
});

Route::get('/application_form','ApplicationFormController@create');
Route::post('/application_form','ApplicationFormController@store');

Route::get('/documents/{student}','DocumentController@create');
Route::post('/documents/{student}','DocumentController@store');

Route::get('/applicants','AdmissionController@index');
Route::get('/applicant/{student}/information','AdmissionController@show');
Route::patch('/applicants/{student}','AdmissionController@update');
Route::get('/admitted/applicants','AdmittedController@index');

Route::get('/registers','RegisterController@index');
Route::get('/registers/{student}','RegisterController@create');
Route::post('/registers/{student}','RegisterController@store');
Route::get('/registers/{register}/edit','RegisterController@edit');
Route::delete('/registers/{register}','RegisterController@destroy');
Route::patch('/registers/{register}','RegisterController@update');

Route::resource('/times','TimeController');
Route::resource('/subjects','SubjectController');
Route::resource('/rooms','RoomController');
Route::resource('/teachers','TeacherController');
Route::resource('/sections','SectionController');
Route::resource('/grades','GradeController');
Route::resource('/fees','FeeController');


Route::get('/advisory','AdvisoryController@index');
Route::get('/advisory/{section}/create','AdvisoryController@create');
Route::post('/advisory/{section}/assign/{teacher}','AdvisoryController@store');
Route::get('/advisory/{section}/edit','AdvisoryController@edit');
Route::patch('/advisory/{section}/assign/{teacher}','AdvisoryController@update');
Route::delete('/advisory/{section}','AdvisoryController@destroy');

Route::resource('/classes','ClassController');