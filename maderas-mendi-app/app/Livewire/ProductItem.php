<?php

namespace App\Livewire;

use Livewire\Component;

class ProductItem extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.product-item');
    }
}
