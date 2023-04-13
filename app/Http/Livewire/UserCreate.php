<?php

namespace App\Http\Livewire;

use Spatie\Permission\Models\Role;
use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $role;
    public $user;
    public function render()
    {
        $roles = Role::all();
        $users = User::all();
        return view('livewire.user-create', [
            'roles' => $roles,
            'users' => $users
        ]);
    }
    protected $rules = [
        'role' => 'required',
        'user' => 'required',
    ];
    public function Createrole()
    {
        $this->validate();
        $user = User::find($this->user);
        $user->assignRole($this->role);
        flash()->addSuccess('Addition Success.');
    }
}
