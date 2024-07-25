<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['subjects'] = Subject::get();
        $data['courses'] = Course::get();
        return view('subject.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['courses'] = Course::get();
        return view('subject.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'course_id' => 'required',
            'subject_name' => 'required',
            'subject_code' => 'required|unique:subjects,subject_code',
        ]);

        $subject = Subject::create([
            'course_id' =>  $validate['course_id'],
            'subject_name' =>  $validate['subject_name'],
            'subject_code' =>  $validate['subject_code'],
        ]);

        return redirect()->route('subject.index')->with('success' , 'Subject Created');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
