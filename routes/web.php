<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/course', [CourseController::class,'index'])->name('course.index');

