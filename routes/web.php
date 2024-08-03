<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FreeCourseController;
use App\Http\Controllers\LiveCourseController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('university' , UniversityController::class);
Route::get('/universities/{university}/courses', [UniversityController::class, 'getCourses']);

Route::resource('course' , CourseController::class );

Route::resource('liveCourse' , LiveCourseController::class);

Route::resource('quiz' , QuizController::class);

Route::resource('subject' , SubjectController::class);

Route::resource('freeCourse' , FreeCourseController::class);

Route::resource('notice' , NoticeController::class);

