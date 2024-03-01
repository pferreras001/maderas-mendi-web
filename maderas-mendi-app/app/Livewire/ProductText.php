<?php

namespace App\Livewire;

use Livewire\Component;

class ProductText extends Component
{
    public $title;
    public $text;
    public $file;
    public function render()
    {
        return view('livewire.product-text');
    }
}
