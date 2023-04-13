<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;
use App\Models\Question;

class QuizEdit extends Component
{
    public $quiz_id;
    public $name;
    public $question;
    public $questions;

    protected $rules = [
        'name' => 'required',
    ];
    public function mount()
    {
         $quize = Quiz::where('id', $this->quiz_id)->first();
          $this->name = $quize->name;
        $alreadyAddQuestion = $quize->questions->pluck('id')->toArray();
        $this->questions = Question::select(['id', 'name'])->whereNotIn('id', $alreadyAddQuestion)->get();
        if (count($this->questions) > 0) {
            $this->question = $this->questions[0]->id;
        }
    }
    public function render()
    {
        $quize = Quiz::where('id', $this->quiz_id)->first();
        return view('livewire.quiz-edit',[
            'quiz' => $quize
        ]);
    }
    public function addQuestion()
    {
        $this->validate([
            'question' => 'required',
        ]);
        $quiz = Quiz::findOrFail($this->quiz_id);
        $quiz->questions()->attach($this->question);

        flash()->addSuccess('Question added successfully');

        return redirect()->route('quize.edit', $this->quiz_id);
    }
    public function editQuiz()
    {
        $this->validate();
        $quiz = Quiz::findOrFail($this->quiz_id);

        $quiz->name = $this->name;
        $quiz->save();

        flash()->addSuccess('Quiz edit successfully');
    }

    public function removeQuiz($id)
    {
        $quiz = Quiz::findOrFail($this->quiz_id);
        $quiz->questions()->detach($id);

        flash()->addSuccess('Quiz removed successfully');

        return redirect()->route('quize.edit', $this->quiz_id);
    }
}
