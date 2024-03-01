<div class="my_navbar bg-black">
    <div class="flex-nowrapper-horizontal">
        <div class="brand">
            {!! file_get_contents('../resources/svg/navbar/brand.svg') !!}
        </div>
        <div class="menu_items text-white">
            <ul class="ul-horizontal">
                <li><a href="">Inicio</a></li>
                <li><a href="">Productos</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contacto</a></li>
                <li>   
                    <div class="languages">
                        <div>Idiomas <span>></span></div>
                        <ul class="bg-black">
                            <li><a href="">Euskara</a></li>
                            <li><a href="">Castellano</a></li>
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
                <li><a href="">Inicio</a></li>
                <li><a href="">Productos</a></li>
                <li><a href="">Servicios</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
            <ul class="title-white fs-regular">
                <li><a href="">Castellano</a></li>
                <li><a href="">Euskara</a></li>
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

