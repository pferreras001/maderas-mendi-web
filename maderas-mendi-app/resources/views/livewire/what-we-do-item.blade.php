<div class="what_we_do_item">    
    @if ($type === 'invert')
        <div class="bg-gradient-{{$color}}-right"></div>
        <div class="flex-wrapper-21-46 flex-row-reverse">
            @livewire('what-we-do-images',
                [
                    'type' => 'invert',
                    'image' => $image,
                    'id' => $id
                ]
            )

            @livewire('what-we-do-text',
                [
                    'title' => $title,
                    'text' => $text,
                    'align' => 'left'
                ]
            )
        </div>
        
        @elseif ($type === 'regular')
        <div class="bg-gradient-{{$color}}-left"></div>
        <div class="flex-wrapper-21-46">
            @livewire('what-we-do-images',
                [
                    'type' => 'regular',
                    'image' => $image,
                    'id' => $id
                ]
            )

            @livewire('what-we-do-text',
                [
                    'title' => $title,
                    'text' => $text,
                    'align' => 'right'
                ]
            )
        </div>
    @endif   

</div>