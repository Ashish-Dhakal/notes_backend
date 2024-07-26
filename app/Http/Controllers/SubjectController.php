<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\University;
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
        $data['universities'] = University::get();
        return view('subject.create', $data);
    }




    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'course_id' => 'required',
    //         'subject_name' => 'required',
    //         'subject_code' => 'required|unique:subjects,subject_code',
    //         'pdf_file' => 'required|mimes:pdf|max:2048', // Validate PDF file, max 2MB
    //     ]);

    //     if ($request->hasFile('pdf_file')) {
    //         $file = $request->file('pdf_file');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $filePath = $file->storeAs('pdfs', $fileName, 'public');

    //         // Save to database
    //         $subject = new Subject();
    //         $subject->subject_name = $request->subject_name;
    //         $subject->course_id = $request->course_id;
    //         $subject->subject_code = $request->subject_code;
    //         $subject->file_path = $filePath;
    //         $subject->save();

    //         return redirect()->back()->with('success', 'Subject Created');
    //     }

    //     // $subject = Subject::create([
    //     //     'course_id' =>  $validate['course_id'],
    //     //     'subject_name' =>  $validate['subject_name'],
    //     //     'subject_code' =>  $validate['subject_code'],
    //     // ]);

    //     return redirect()->route('subject.index')->with('success', 'Subject Created');
    // }

    public function store(Request $request)
    {
        $validate =  $request->validate([
            'university_id' => 'required',
            'course_id' => 'required',
            'subject_name' => 'required|string|max:255',
            'subject_code' => 'required',
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('pdfs', $fileName, 'public');

            // $subject = new Subject();
            // $subject->subject_name = $request->subject_name;
            // $subject->course_id = $request->cou; 
            // $subject->subject_code = 'Some subject code'; 
            // $subject->file_path = $filePath; 
            // $subject->save();

            $subject = Subject::create([
                'university_id' =>  $validate['university_id'],
                'course_id' =>  $validate['course_id'],
                'subject_name' =>  $validate['subject_name'],
                'subject_code' =>$validate['subject_code'],
                'file_path' => $filePath,
            ]);

            return redirect()->route('subject.index')->with('success', 'Subject Created');
        }


     

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
