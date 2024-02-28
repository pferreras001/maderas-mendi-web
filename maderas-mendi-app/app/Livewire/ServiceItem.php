<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceItem extends Component
{
    public $color;
    public function render()
    {
        return view('livewire.service-item');
    }
}
