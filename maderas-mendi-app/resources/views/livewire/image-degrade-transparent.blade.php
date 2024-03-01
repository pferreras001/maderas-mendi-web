<style>
    .image_degrade_transparent_{{$id}} {
        background: linear-gradient(to {{$direction}}, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url({{$image}});
        background-size: cover;
        background-position: center;
    }

</style>

<div class="image_degrade_transparent_{{$id}} {{$container}}-container"></div>
