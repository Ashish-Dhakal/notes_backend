<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

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
    $request->validate([
        'university_id' => 'required|integer',
        'course_name' => [
            'required',
            'string',
            'max:30',
            function ($attribute, $value, $fail) use ($request) {
                $exists = Course::where('course_name', $value)
                                ->where('university_id', $request->input('university_id'))
                                ->exists();
                if ($exists) {
                    $fail('The course name has already been taken for this university.');
                }
            },
        ],
    ]);

    // Create a new course record
    $course = Course::create([
        'university_id' => $request->input('university_id'),
        'course_name' => $request->input('course_name'),
    ]);

    return redirect()->route('course.index')->with('success', 'Course Created');
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
