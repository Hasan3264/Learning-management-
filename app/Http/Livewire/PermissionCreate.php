<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
class PermissionCreate extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.permission-create');
    }
    protected $rules = [
        'name' => 'required|unique:permissions,name',
    ];
    public function CreatePermission(){
        $this->validate();
        sleep(1);
        $permission = Permission::create(['name' => $this->name]);
        flash()->addSuccess('Addition Success.');
    }
}
