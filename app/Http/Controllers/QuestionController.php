<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('Question.index');
    }
    public function create()
    {
        return view('Question.create');
    }
    public function edit($id)
    {
        return view("Question.edit", [
            'question_id' => $id
        ]);
    }
}
