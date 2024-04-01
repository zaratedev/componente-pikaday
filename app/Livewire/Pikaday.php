<?php

namespace App\Livewire;

use Livewire\Component;

class Pikaday extends Component
{
    public $date;

    public function render()
    {
        return view('livewire.pikaday');
    }
}
