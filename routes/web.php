<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index']);
Route::get('/classrooms', [App\Http\Controllers\ClassRoomController::class, 'index']);
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index']);