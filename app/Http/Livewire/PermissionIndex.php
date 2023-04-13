<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
class PermissionIndex extends Component
{
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.permission-index',[
            'permissions' => $permissions,
        ]);
    }
}
