<?php

namespace App\Http\Livewire;

use DateTime;
use DatePeriod;
use DateInterval;
use Carbon\Carbon;
use App\Models\Course;
use Livewire\Component;
use App\Models\curriculam;
use Illuminate\Support\Facades\Auth;

class CourceEdit extends Component
{
    public $course_id;
    public $name;
    public $description;
    public $price;
    public $slug;
    public $selectedDays = [];
    public $time;
    public $end_date;

    public $days = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
    ];
    public function render()
    {
        return view('livewire.cource-edit');
    }
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'selectedDays' => 'required',
        'time' => 'required'
    ];
    public function mount()
    {
        $course = Course::where('id', $this->course_id)->with('curriculams')->first();

        $this->name = $course->name;
        $this->description = $course->description;
        $this->price = $course->price;
        $this->slug = $course->slug;
        if (!empty(count($course->curriculams))) {
            $this->time = $course->curriculams[0]->class_time;
            $this->end_date = $course->curriculams[0]->end_date;

            foreach ($course->curriculams as $curriculumn) {
                $this->selectedDays[] = $curriculumn->week_day;
            }
        }
    }
    public function courseUpdate()
    {
        $this->validate();

        $course = Course::where('id', $this->course_id)->with('curriculams')->first();

        foreach ($course->curriculams as $curriculumn) {
            $course->curriculams()->delete($course->id);
        }

        $course->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'slug' => str_replace(' ', '-', $this->name),
            'user_id' => Auth::user()->id
        ]);

        // check how many sunday available
        $i = 1;
        $start_date = new DateTime(Carbon::now());
        $endDate =   new DateTime($this->end_date);
        $interval =  new DateInterval('P1D');
        $date_range = new DatePeriod($start_date, $interval, $endDate);

        foreach ($date_range as $date) {
            foreach ($this->selectedDays as $day) {
                if ($date->format("l") === $day) {
                    curriculam::create([
                        'name' => $this->name . ' #' . $i++,
                        'week_day' => $day,
                        'class_time' => $this->time,
                        'end_date' => $this->end_date,
                        'course_id' => $course->id,
                    ]);
                }
            }
        }
        $i++;

        flash()->addSuccess('Course updated successfully');

        return redirect()->route('cource.index');
    }

}
