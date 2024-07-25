<?php

namespace App\Http\Controllers;

use App\Models\LiveCourse;
use Illuminate\Http\Request;

class LiveCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['liveCourse'] = LiveCourse::get();
        return view('live-course.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('live-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        LiveCourse::create($input);
    
        return redirect()->route('liveCourse.index')->with('success', 'Free Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LiveCourse $liveCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LiveCourse $liveCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LiveCourse $liveCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LiveCourse $liveCourse)
    {
        //
    }
}
