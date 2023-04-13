<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserManipulation extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user-manipulation', [
            'users' => $users,
        ]);
    }
}
