<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['courses'] = Course::with('university')->get();
        return view('course.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        $data['universities'] = University::get();

        return view('course.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            'university_id' => 'required',
            'course_name' => 'required|string|max:30|unique:courses,course_name'
        ]);

        $university = Course::create([
            'university_id' =>  $validate['university_id'],
            'course_name' => $validate['course_name']
        ]);

        return redirect()->route('course.index')->with('success' , 'University Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
