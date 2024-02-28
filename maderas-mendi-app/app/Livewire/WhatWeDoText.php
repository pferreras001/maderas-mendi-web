<?php

namespace App\Livewire;

use Livewire\Component;

class WhatWeDoText extends Component
{
    public $title;
    public $text;
    public $align;
    public function render()
    {
        return view('livewire.what-we-do-text');
    }
}
