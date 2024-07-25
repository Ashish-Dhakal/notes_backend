<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['quizzes'] = Quiz::get();
        return view('quiz.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['subjects'] = Subject::get();
        return view('quiz.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'subject_id' => 'required',
            'question-1' => 'required',
            'question-2' => 'required',
            'question-3' => 'required',
            'question-4' => 'required',
            'correct_ans' => 'required|max:20',
            'reason' => 'required|max:20',
        ]);

        $question_collection=[
            'question-1' => $validate['question-1'],
            'question-2' => $validate['question-2'],
            'question-3' => $validate['question-3'],
            'question-4' => $validate['question-4']
        ];

        $quiz = Quiz::create([
            'subject_id' =>  $validate['subject_id'],
            'question' => json_encode($question_collection),
            'correct_ans' =>  $validate['correct_ans'],
            'reason' =>  $validate['reason'],
        ]);


        return redirect()->route('quiz.index')->with('success' , 'Quiz Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
