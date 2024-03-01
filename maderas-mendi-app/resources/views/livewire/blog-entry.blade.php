<div class="blog_entry container">
    <div class="flex-wrapper-21">
    @livewire('blog-content',
        [
            'title' => $title,
            'subtitle' => $subtitle,
            'text' => $text
        ]
    )

    @livewire('image-slider',
        [
            'images' => $images
        ]
    )
    </div>
</div>