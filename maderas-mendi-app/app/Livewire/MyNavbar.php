<?php

namespace App\Livewire;

use Livewire\Component;

class MyNavbar extends Component
{
    public $items;
    public $languages;
    public function render()
    {
        return view('livewire.my-navbar');
    }
}
