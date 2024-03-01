<div class="brands_slider">
    <div class="slider">
        <div class="slide-track">
            @foreach ($brands as $brand)
                <div class="slide">
                    <a href="{{$brand[1]}}"><img src="{{$brand[0]}}" height="100" width="250" alt="" /></a>
                </div>               
            @endforeach
        </div>
    </div>
</div>
