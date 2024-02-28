<?php

namespace App\Livewire;

use Livewire\Component;

class BlogItem extends Component
{
    public $title;
    public $text;
    public $img;
    
    public function render()
    {
        return view('livewire.blog-item');
    }
}
