<?php

namespace App\Http\Controllers;

use App\Models\FreeCourse;
use Illuminate\Http\Request;

class FreeCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['freeCourse'] = FreeCourse::get();
        return view('free-course.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('free-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_by' => 'required',
            'course_link' => 'required',
            'course_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($course_image = $request->file('course_image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $course_image->getClientOriginalExtension();
            $course_image->move($destinationPath, $profileImage);
            $input['course_image'] = "$profileImage";
        }
    
        FreeCourse::create($input);
    
        return redirect()->route('freeCourse.index')->with('success', 'Free Course created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(FreeCourse $freeCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FreeCourse $freeCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FreeCourse $freeCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FreeCourse $freeCourse)
    {
        //
    }
}
