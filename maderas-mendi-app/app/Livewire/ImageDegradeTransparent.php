<?php

namespace App\Livewire;

use Livewire\Component;

class ImageDegradeTransparent extends Component
{
    public $direction;
    public $container;
    public $image;
    public $background;
    public $id;
    public function render()
    {
        return view('livewire.image-degrade-transparent');
    }
}
