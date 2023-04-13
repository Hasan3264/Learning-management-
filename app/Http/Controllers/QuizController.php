<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('Quize.index');
    }
    public function store(Request $request)
    {
        $quiz = $request->validate([
            'name' => 'required',
        ]);
        $created = Quiz::create($quiz);

        flash()->addSuccess('Quiz created successfully');


        return redirect()->route('quize.index', $created->id);
    }
    public function show($id)
    {
        return view('Quize.show', [
            'quiz_id' => $id,
        ]);
    }
    public function edit($id)
    {
        return view('Quize.edit',[
            'quiz_id' => $id,
        ]);
    }
    public function quizShow($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('Quize.quiz-show', [
            'quiz_id' => $quiz,
        ]);
    }

}
