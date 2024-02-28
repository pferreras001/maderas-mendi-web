<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselSlide extends Component
{
    public $slide_title;
    public $slide_subtitle;

    public function render()
    {
        return view('livewire.carousel-slide');
    }
}
