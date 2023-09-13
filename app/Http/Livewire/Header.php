<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function render()
    {
        return view('livewire.header');
    }
}
