<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $images;
    public function render()
    {
        return view('livewire.image-slider');
    }
}
