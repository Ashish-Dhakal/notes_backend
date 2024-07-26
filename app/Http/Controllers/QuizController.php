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
        $subjects = Subject::get();
        $quizzes = Quiz::with('subject')->get();
    
        foreach ($quizzes as $quiz) {
            $quiz->options = json_decode($quiz->options, true);
        }
    
        $data['subjects'] = $subjects;
        $data['quizzes'] = $quizzes;
    
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
            'option-1' => 'required',
            'option-2' => 'required',
            'option-3' => 'required',
            'option-4' => 'required',
            'correct_ans' => 'required|max:20',
            'reason' => 'required|max:20',
            'question'=>'required|max:20'
        ]);

        $option_collection=[
            'option-1' => $validate['option-1'],
            'option-2' => $validate['option-2'],
            'option-3' => $validate['option-3'],
            'option-4' => $validate['option-4']
        ];

        $quiz = Quiz::create([
            'subject_id' =>  $validate['subject_id'],
            'options' => json_encode($option_collection),
            'correct_ans' =>  $validate['correct_ans'],
            'question' =>  $validate['question'],
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
