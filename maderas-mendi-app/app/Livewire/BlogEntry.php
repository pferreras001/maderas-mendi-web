<?php

namespace App\Livewire;

use Livewire\Component;

class BlogEntry extends Component
{
    public $title;
    public $subtitle;
    public $text;
    public $images;
    public function render()
    {
        return view('livewire.blog-entry');
    }
}
