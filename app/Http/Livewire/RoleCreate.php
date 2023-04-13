<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{
    public $selectedPermissions = [];
    public $name;
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.role-create', [
            'permissions' => $permissions,
        ]);
    }
    protected $rules = [
        'name' => 'required|unique:roles,name',
        'selectedPermissions' => 'required|array|min:1',
    ];
    public function roleSubmit()
    {
        $this->validate();
        sleep(1);
        $role = Role::create(['name' => $this->name]);
        $role->givePermissionTo($this->selectedPermissions);

        flash()->addSuccess('Addition Success.');
    }
}
