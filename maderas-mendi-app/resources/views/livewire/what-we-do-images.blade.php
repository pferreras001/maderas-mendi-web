<div class="what_we_do_images">
    @if ($type === 'invert')
        <div class="back_image">
            @livewire('image-degrade-transparent',
                [
                    'direction' => 'right',
                    'container' => 'square',
                    'image' => $image,
                    'id' => $id
                ]
            )
        </div>
        <div class="front_image left">
            <div class="circle-container"><img src="img/test/woods.png" alt=""></div>
        </div>

    @elseif ($type === 'regular')
        <div class="back_image">
            @livewire('image-degrade-transparent',
                [
                    'direction' => 'left',
                    'container' => 'square',
                    'image' => $image,
                    'id' => $id
                ]
            )
        </div>
        <div class="front_image right">
            <div class="circle-container"><img src="img/test/woods.png" alt=""></div>
        </div>
    @endif    
</div>
