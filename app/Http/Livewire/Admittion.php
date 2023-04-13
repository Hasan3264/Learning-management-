<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\User;
use App\Models\Course;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\payment;
use Livewire\Component;
use Illuminate\Support\Str;

class Admittion extends Component
{
    public $search;
    public $leads =[];
    public $lead_id;
    public $course_id;
    public $payment;
    public $selectedCourse;
    public function render()
    {
        $courses = Course::all();
        return view('livewire.admittion',[
            'courses' => $courses,
        ]);
    }
    public function scerch(){
          $this ->leads = Lead::where('name' , 'like', '%'. $this ->search . '%')
           ->orWhere('email', 'like', '%'. $this ->search . '%')
           ->orWhere('number', 'like', '%'. $this ->search . '%')
          ->get();
    }
    public function selectCourse(){
        $this->selectedCourse = Course::findOrFail($this ->course_id);
    }
    public function admit(){
        $lead = Lead::findOrFail($this ->lead_id);
        $user = User::create([
            'name' =>$lead->name,
            'email' =>$lead->email,
            'password' => Str::random(8),
        ]);
        $lead -> delete();
        $invice = Invoice::create([
            'due_date' => now()->addDays(20),
            'user_id' => $user->id,
        ]);
        $invoceItems = InvoiceItem::create([
            'name' => 'Course:'. $this ->selectedCourse->name,
            'price' => $this ->selectedCourse->price,
            'quantity' => 1,
            'invoice_id' => $invice->id
        ]);
         $this ->selectedCourse->students()->attach($user->id);

           if(!empty($this->payment)){
              payment::create([
                'amount' => $this->payment,
                'invoice_id' => $invice->id,
                'transaction_id' => Str::random(8),
              ]);
           }



        $this ->selectedCourse = null;
        $this ->leads = [];
        $this ->lead_id = null;
        $this ->course_id = null;
        $this ->payment = null;
        flash()->addSuccess('Admission Success');

    }
}
