<div class="carousel_slide">
    <div class="rectangle_vertical_big-container"><img src="{{$image}}" alt=""></div>
    <div class="container-gray">
        <div class="title-white fs-big">{{$slide_title}}</div>
        <div class="title-black fs-medium">{{$slide_subtitle}}</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        function adjustSlide() {
            var width = $(window).width();
            if (width <= 768) {
                $('.carousel_slide .rectangle-container').removeClass('rectangle-container').addClass('rectangle_vertical_big-container');
            } else {
                $('.carousel_slide .rectangle_vertical_big-container').removeClass('rectangle_vertical_big-container').addClass('rectangle-container');
            }
        }
        adjustSlide();
        $(window).resize(adjustSlide);
    });
</script>