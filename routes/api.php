<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('university', UniversityController::class , 'UniversityController@store');


// Route::apiResource('university', UniversityController::class);
// Route::apiResource('course', CourseController::class);
// Route::apiResource('liveCourse', LiveCourseController::class);
// Route::apiResource('quiz', QuizController::class);
// Route::apiResource('subject', SubjectController::class);
// Route::apiResource('freeCourse', FreeCourseController::class);