<?php

namespace App\Livewire;

use Livewire\Component;

class BrandsSlider extends Component
{
    public $brands;
    public function render()
    {
        return view('livewire.brands-slider');
    }
}
