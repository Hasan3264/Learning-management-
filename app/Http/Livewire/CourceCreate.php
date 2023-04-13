<?php

namespace App\Http\Livewire;

use DateTime;
use DatePeriod;
use DateInterval;
use Carbon\Carbon;
use App\Models\curriculam;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Livewire\Component;

class CourceCreate extends Component
{
    public $name;
    public $description;
    public $price;
    public $time;
    public $endtime;
    public $selectedDays =[];
    public $days = [
        'Sunday',
         'Monday',
         'Tuesday',
         'Wednesday',
         'Thursday',
         'Friday',
         'Saturday',
    ];
    public function render()
    {
        return view('livewire.cource-create');
    }
    protected $rules = [
        'name' => 'required|unique:courses,name',
        'description' => 'required',
        'price' => 'required',
        'selectedDays' => 'required',
        'time' => 'required'
    ];
    public function formSubmit(){
        $this->validate();
        $cource = Course::create([
             'name' => $this->name,
            'description' => $this->description,
            'slug' => str_replace(' ', '-', $this->name),
            'price' => $this->price,
            'user_id' =>Auth::user()->id
        ]);

        $i = 1;
        $start_date = new DateTime(Carbon::now());
        $endDate =   new DateTime($this->endtime);
        $interval =  new DateInterval('P1D');
        $date_range = new DatePeriod($start_date, $interval, $endDate);
        foreach ($date_range as $date) {
            foreach ($this->selectedDays as $day) {
                if ($date->format("l") === $day) {
                    curriculam::create([
                        'name' => $this->name . ' #' . $i++,
                        'week_day' => $day,
                        'class_time' => $this->time,
                        'end_date' => $this->endtime,
                        'course_id' => $cource->id,
                    ]);
                }
            }
        }
        $i++;

        flash()->addSuccess('Course created successfully');

    }
}
