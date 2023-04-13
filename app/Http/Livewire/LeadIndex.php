<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class LeadIndex extends Component
{
    public function render()
    {
        $leads = Lead::paginate(10);
        return view('livewire.lead-index', [
            'leads' => $leads,
        ]);
    }
    public function leadDelete($id)
    {
        $leadDeleteId = Lead::findOrFail($id);
        $leadDeleteId->Delete();
        flash()->addSuccess('Delation Success.');
    }
}
