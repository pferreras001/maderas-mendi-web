<?php

namespace App\Livewire;

use Livewire\Component;

class ProductItem extends Component
{
    public $title;
    public $text;
    public $img;
    public function render()
    {
        return view('livewire.product-item');
    }
}
