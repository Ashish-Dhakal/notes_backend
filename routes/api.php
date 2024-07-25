<?php


use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\FreeCourseController;
use App\Http\Controllers\Api\LiveCourseController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\UniversityController;

Route::get('course', [CourseController::class, 'index']);
Route::get('free-course', [FreeCourseController::class, 'index']);
Route::get('live-course', [LiveCourseController::class, 'index']);
Route::get('quiz', [QuizController::class, 'index']);
Route::get('subject', [SubjectController::class, 'index']);
Route::get('university', [UniversityController::class, 'index']);
