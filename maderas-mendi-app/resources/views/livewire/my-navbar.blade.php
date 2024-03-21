<div class="my_navbar bg-black">
    <div class="flex-nowrapper-horizontal">
        <div class="brand">
            <a class="opacity6" href="">{!! file_get_contents('../resources/svg/navbar/brand.svg') !!}</a>
        </div>
        <div class="menu_items text-white">
            <ul class="ul-horizontal">
                @foreach ($items as $item)
                    <li class="opacity6"><a href="{{$item[1]}}">{{$item[0]}}</a></li>
                @endforeach
                <li>   
                    <div class="languages">
                        <div>Idiomas <span>></span></div>
                        <ul class="bg-black">
                            @foreach ($languages as $language)
                                <li class="opacity6"><a href="{{$language[1]}}">{{$language[0]}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <div class="hamburguer" id="hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menupage bg-black fs-medium">
            <ul class="title-white">
                @foreach ($items as $item)
                    <li class="opacity6"><a href="{{$item[1]}}">{{$item[0]}}</a></li>
                @endforeach
            </ul>
            <ul class="title-white fs-regular">
                @foreach ($languages as $language)
                    <li class="opacity6"><a href="{{$language[1]}}">{{$language[0]}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script>
var isMenuPageActive = false;
$(document).ready(function() {

    $('.hamburguer').on('click', function() {
        handleMenuPageActivation();
    });

    $('.menupage ul li').on('click', function() {
        handleMenuPageActivation();
    });
});
function handleMenuPageActivation() {
    if(isMenuPageActive) {
        $('.menupage').toggleClass('menupage_active');
        $('.hamburguer').toggleClass('hamburguer_active');

    }else{
        $('.menupage').toggleClass('menupage_active');
        $('.hamburguer').toggleClass('hamburguer_active');
    }
    isMenuPageActive=!isMenuPageActive;
}
</script>

