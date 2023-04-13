<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\Note;
use Livewire\Component;

class LeadEdit extends Component
{
    public $lead_id;
    public $name;
    public $number;
    public $note;

    public function mount()
    {
        $lead = Lead::findOrFail($this->lead_id);
        $this->lead_id = $lead->id;
        $this->name = $lead->name;
        $this->number = $lead->number;
    }

    public function render()
    {
        $lead = Lead::findOrFail($this->lead_id);

        return view('livewire.lead-edit', [
            'notes' => $lead->Note,
        ]);
    }
    protected $rules = [

        'name' => 'required',

        'number' => 'required',

    ];
    public function submitForm()
    {

        sleep(1);
        $lead = Lead::findOrFail($this->lead_id);
        $this->validate();
        $lead->name = $this->name;
        $lead->number = $this->number;
        $lead->save();
        flash()->addSuccess('Success.');
        return back();
    }

    public function submitNote()
    {
        $notes = new Note();
        $notes->description = $this->note;
        $notes->lead_id = $this->lead_id;
        $notes->save();
        $this->note = '';
        flash()->addSuccess('Success.');
        return back();
    }
}
