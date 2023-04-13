<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\curriculam;
use Livewire\Component;
class CourseShow extends Component
{

    
    public $course_id;
    public function render()
    {
        $course = Course::where('id', $this->course_id)->first();
        $curriculums = curriculam::where('course_id', $this->course_id)->paginate(20);

        return view('livewire.course-show', [
            'course' => $course,
            'curriculums' => $curriculums,
        ]);
    }

    public function curriculamDelete($id)
    {
        $curriculum = curriculam::findOrFail($id);

        $curriculum->delete();

        flash()->addSuccess('Curriculum deleted successfully');
    }
}

