<?php

namespace App\Livewire;

use Livewire\Component;

class BelajarAction extends Component
{
    public $keranjang = 0;

    public function plus()
    {
        $this->keranjang++;
    }

    public function minus()
    {
        $this->keranjang--;
    }

    public function render()
    {
        return view('livewire.belajar-action');
    }
}
