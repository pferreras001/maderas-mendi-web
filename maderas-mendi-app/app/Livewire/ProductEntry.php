<?php

namespace App\Livewire;

use Livewire\Component;

class ProductEntry extends Component
{
    public $title;
    public $text;
    public $file;
    public $images;
    public function render()
    {
        return view('livewire.product-entry');
    }
}
