<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FreeCourse;
use Illuminate\Http\Request;

class FreeCourseController extends Controller
{
    public function index()
    {
        $freeCourses = FreeCourse::get();
        return response()->json($freeCourses);
    }
}
