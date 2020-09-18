<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

// <<<<=========CRUD===========>>>>
Route::get('/add_student', 'Add_StudentController@addstudent');

Route::get('/all_student', 'Add_StudentController@allstudent');

Route::post('/add_student_post', 'Add_StudentController@AddStudentPost');

Route::get('/student_view/{student_id}', 'Add_StudentController@studentview');

Route::get('/student_edit/{student_id}', 'Add_StudentController@studentedit');

Route::get('/student_delete/{student_id}', 'Add_StudentController@studentdelete');

Route::post('/update_student/{student_id}', 'Add_StudentController@update_student');

// <<<<=========End CRUD===========>>>>




