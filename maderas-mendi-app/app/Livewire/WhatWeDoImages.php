<?php

namespace App\Livewire;

use Livewire\Component;

class WhatWeDoImages extends Component
{
    public $type;
    public $image;
    public $id;
    public function render()
    {
        return view('livewire.what-we-do-images');
    }
}
