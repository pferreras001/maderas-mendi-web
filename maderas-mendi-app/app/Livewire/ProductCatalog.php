<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProductCatalog extends Component
{
    use WithPagination;

    public $products;

    public function render()
    {
        return view('livewire.product-catalog', ['products' => $this->products->paginate(6)]);
    }
}
