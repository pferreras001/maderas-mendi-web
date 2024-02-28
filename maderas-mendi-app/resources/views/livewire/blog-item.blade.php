<div class="blog_item">
    <div class="title-black fs-big">
        {{$title}}
    </div>
    <p class="text-gray fs-regular">
        {{$text}}
    </p>
    <div class="rectangle-container"><img src="{{$img}}" alt=""></div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.blog_item .text-gray');
    elements.forEach(function(element) {
        var text = element.textContent.trim();
        if (text.length > 100) {
            element.textContent = text.substring(0, 100) + '...';
        }
    });
});

</script>