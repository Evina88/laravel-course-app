<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/course', [CourseController::class,'index'])->name('course.index');
Route::get('/course/add', [CourseController::class,'create'])->name('course.create');
Route::post('/courses', [CourseController::class,'store'])->name('course.store');

