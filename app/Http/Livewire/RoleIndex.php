<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::where('name', '!=', 'Super-Admin')->get();
        return view('livewire.role-index', [
            'roles' => $roles,
        ]);
    }
}
