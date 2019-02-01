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
// Route::get('/applicant/{student}/application_form','AdmissionController@showApplicationForm');
Route::get('/applicant/{student}/information','AdmissionController@showDocuments');
// Route::patch('/applicants/{student}','AdmissionController@update');
// Route::get('/admitted','AdmittedController@index');



Route::resource('/times','TimeController');
Route::resource('/subjects','SubjectController');
Route::resource('/rooms','RoomController');
Route::resource('/teachers','TeacherController');
Route::resource('/sections','SectionController');

Route::resource('/advisory','AdvisoryController');

Route::get('/sections/{section}/display/adviser','SectionController@display');
Route::post('/sections/{section}/assign/{teacher}','SectionController@assign');
Route::resource('/grades','GradeController');
Route::resource('/fees','FeeController');
