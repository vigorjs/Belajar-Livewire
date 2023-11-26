<?php

namespace App\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $nama = "";
    public $show_password = false;

    public function render()
    {
        return view('livewire.belajar');
    }
}
