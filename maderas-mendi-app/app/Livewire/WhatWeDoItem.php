<?php

namespace App\Livewire;

use Livewire\Component;

class WhatWeDoItem extends Component
{
    public $type;
    public $title;
    public $text;
    public $image;
    public $color;
    public $id;
    public function render()
    {
        return view('livewire.what-we-do-item');
    }
}
