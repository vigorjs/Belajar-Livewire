<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public function render()
    {
        return view('livewire.user-edit');
    }

    public $user;

    public $user_id;
    public $name;
    public $email;

    public function mount($user)
    {
        $this->user = $user;
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user_id
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->name = null;
        $this->email = null;
        redirect()->route('user.index')->with('success', 'User has been updated');
    }
}
