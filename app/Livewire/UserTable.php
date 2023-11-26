<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }
}
