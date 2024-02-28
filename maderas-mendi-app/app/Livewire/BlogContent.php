<?php

namespace App\Livewire;

use Livewire\Component;

class BlogContent extends Component
{
    public $title;
    public $subtitle;
    public $text;
    public function render()
    {
        return view('livewire.blog-content');
    }
}
