<div class="product_entry">
    <div class="flex-wrapper-21 container">
        @livewire('product-text', 
            [
                'title' => $title,
                'text' => $text,
                'file' => $file
            ]
        )
        @livewire('image-slider', 
            [
                'images' => $images
            ]
        )
    </div>
</div>