<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LiveCourse;
use Illuminate\Http\Request;

class LiveCourseController extends Controller
{
    public function index()
    {
        $liveCourses = LiveCourse::get();
        return response()->json($liveCourses);
    }
}
