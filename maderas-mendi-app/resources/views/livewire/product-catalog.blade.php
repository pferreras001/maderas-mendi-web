<div class="product_catalog container">
    <div class="flex-wrapper-31">
        @foreach ($products as $product)
            @livewire('product-item', ['product' => $product])            
        @endforeach
    </div>
    {{ $products->links() }}
</div>
