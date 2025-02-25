<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//Route::get('/', function () {
  //  return view('students.index');
//});
Route::get('/student_index', [StudentController::class, 'index']);
Route::get('/student_hello', [StudentController::class, 'hello']);
Route::get('/student_excel', [StudentController::class, 'excel']);
Route::get('/student_show', [StudentController::class, 'show']);
Route::resource('students', StudentController::class);