<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithPagination;

class QuistionIndex extends Component
{
    public function render()
    {
        $questions = Question::paginate(15);

        return view('livewire.quistion-index',[
            'questions' => $questions,
        ]);
    }

    public function questionDelete($id)
    {
        $question = Question::findOrFail($id);

        $question->delete();

        flash()->addSuccess('Question deleted successfully!');
    }
}
