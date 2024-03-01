<div class="product_item">
    <div class="square-container"><img src="{{$product['image']}}" alt=""></div>
    <div class="title-black fs-medium">
        {{$product['title']}}
    </div>
    <p class="text-gray fs-regular">
        {{$product['text']}}
    </p>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.product_item .text-gray');
    elements.forEach(function(element) {
        var text = element.textContent.trim();
        if (text.length > 100) {
            element.textContent = text.substring(0, 50) + '...';
        }
    });
});

</script>
