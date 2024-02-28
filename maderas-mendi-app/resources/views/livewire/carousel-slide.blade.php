<div class="carousel_slide">
    <div class="rectangle_vertical_big-container"><img src="img/test/wood_rings.png" alt=""></div>
    <div class="container-gray">
        <div class="title-white fs-extra_big">{{$slide_title}}</div>
        <div class="title-black fs-big">{{$slide_subtitle}}</div>
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