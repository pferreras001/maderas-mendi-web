<div>
@livewire('my-navbar')
    <div class="title-black fs-extra_big">
        Hello
    </div>
    <div class="title-white bg-dark fs-extra_big">
        Hello
    </div>
    <div class="title_thin-black fs-extra_big">
        Hello
    </div>

    <p class="text-gray fs-medium">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    <p class="text-black fs-regular">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    <p class="text-white bg-dark fs-small">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>

    <div class="container-gray">
        <div class="title-white fs-extra_big">Hello</div>
        <div class="title-black fs-big">Welcome to our webpage</div>
    </div>

    <form action="" class="form">
        <input type="text" class="input" value="Hello World!">
        <textarea class="textarea"></textarea>
        <button class="button">Enviar</button>
    </form>

    <ul>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
        <li>Hello</li>
    </ul>

    <div class="circle-container"><img src="img/test/woods.png" alt=""></div>
    <div class="square-container"><img src="img/test/woods.png" alt=""></div>
    <div class="rectangle-container"><img src="img/test/woods.png" alt=""></div>
    <div class="rectangle_vertical-container"><img src="img/test/woods.png" alt=""></div>

    @livewire('image-degrade-transparent',
        [
            'direction' => 'left',
            'container' => 'rectangle_vertical',
            'image' => 'img/test/woods.png'
        ]
    )

    @livewire('carousel')

    @livewire('services')

    @livewire('blog-home')
    {{--
    @livewire('product-catalog',
        [
            'products' => [
                ['id' => 1, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 2, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 3, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 4, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 5, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 6, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 7, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 8, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 9, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
                ['id' => 10, 'title' => 'Maderas blandas', 'text' => "Lorem Ipsum ...", 'image' => 'img/test/woods.png'],
            // Add more products here...
            ]
        ]
    )
    --}}
    @livewire('blog-entry',
        [
            'title' => 'Lore ipsum',
            'subtitle' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis libero id leo consectetur bibendum. Sed dictum justo a erat congue condimentum vel vitae magna. Aliquam egestas nisl a magna tincidunt laoreet. Phasellus accumsan semper erat vitae ultrices. Aliquam consectetur, sapien et vulputate vehicula, quam lorem ullamcorper dui, sit amet consectetur lectus turpis eget libero. Vivamus vel nunc sapien. Ut efficitur porta pellentesque. Nam posuere porttitor venenatis. In hac habitasse platea dictumst. Nunc tempus in tellus et pulvinar. Sed consequat, leo quis dictum iaculis, nunc orci bibendum diam, laoreet viverra lectus risus id felis. Ut cursus maximus tellus sit amet scelerisque. Praesent non gravida est. In convallis orci in urna pharetra rutrum.

Proin turpis orci, rutrum in porta sit amet, aliquet a nibh. Curabitur lobortis accumsan tortor, sed suscipit sapien cursus et. Nunc tristique aliquam tincidunt. Fusce tincidunt vehicula vehicula. Nulla ornare, nunc ac placerat pulvinar, tellus ante congue sem, ac tempor nulla libero ullamcorper mi. Nam lacinia, libero quis porttitor euismod, nulla diam ornare augue, blandit condimentum nibh purus vitae nunc. Nunc finibus eleifend venenatis. Maecenas non leo euismod ligula ultrices fringilla in lobortis lorem. Phasellus ut nulla sed purus bibendum sodales sed vel dolor.

Etiam non congue dolor. Suspendisse hendrerit convallis lacus a lacinia. Nullam efficitur risus at efficitur egestas. Mauris vitae lectus egestas, fringilla elit porta, fringilla sapien. Quisque est dui, viverra vel purus sit amet, accumsan ullamcorper orci. Fusce convallis felis id sagittis laoreet. Aenean eget lobortis massa, vel dictum lacus. Ut eget malesuada est. Nunc eleifend sapien ut quam auctor blandit. Sed at venenatis orci.

Ut dignissim vitae magna nec sodales. Integer vel placerat orci. Integer ultricies rutrum sem. Praesent blandit libero vitae hendrerit gravida. Nam bibendum viverra eros, nec convallis diam aliquam sit amet. Sed sed scelerisque lectus, vel viverra dolor. Nam lacinia volutpat orci vel mattis. Morbi eleifend consequat sapien, condimentum vestibulum nibh sodales sit amet.

Cras mi arcu, lacinia ac commodo non, tincidunt semper ante. Cras commodo lacus augue, eget vestibulum dolor molestie vitae. Morbi sit amet viverra enim. Vivamus vitae ligula lectus. Suspendisse potenti. Pellentesque rutrum eros sit amet viverra laoreet. Pellentesque vitae sem sed neque tempus cursus quis vel est. Fusce sed lectus consequat, viverra neque et, pulvinar magna. Suspendisse mattis, sapien sed euismod molestie, sapien purus tincidunt eros, nec tempus libero enim sit amet leo. Sed ut placerat ex, vel maximus magna.',
            'images' => array('img/test/woods.png', 'img/test/wood_rings.png')
        ]
    )

    @livewire('contact')

    @livewire('what-we-do-item',
        [
            //type 'invert' or 'regular'
            'type' => 'regular',
            'title' => 'La calidad lo es todo.',
            'text' => 'Cada pieza que sale de nuestro taller está hecha con materia prima de primera calidad y de manera sostenible. Creemos en construir no solo productos excepcionales, sino también un futuro mejor para nuestro planeta.',
            'image' => 'img/test/woods.png',
            //color 'wood', 'green' or black
            'color' => 'green',
            'id' => '1'
        ]
    )
    @livewire('what-we-do-item',
        [
            //type 'invert' or 'regular'
            'type' => 'invert',
            'title' => 'La calidad lo es todo.',
            'text' => 'Cada pieza que sale de nuestro taller está hecha con materia prima de primera calidad y de manera sostenible. Creemos en construir no solo productos excepcionales, sino también un futuro mejor para nuestro planeta.',
            'image' => 'img/test/woods.png',
            //color 'wood', 'green' or black
            'color' => 'wood',
            'id' => '2'
        ]
    )
    @livewire('what-we-do-item',
        [
            //type 'invert' or 'regular'
            'type' => 'regular',
            'title' => 'La calidad lo es todo.',
            'text' => 'Cada pieza que sale de nuestro taller está hecha con materia prima de primera calidad y de manera sostenible. Creemos en construir no solo productos excepcionales, sino también un futuro mejor para nuestro planeta.',
            'image' => 'img/test/woods.png',
            //color 'wood', 'green' or black
            'color' => 'black',
            'id' => '3'
        ]
    )

    @livewire('product-entry', 
        [
            'title' => 'Maderas blandas',
            'text' => 'Fundamentalmente, las coníferas. Las formas de estos árboles son altos, espigados y en punta. Son árboles de crecimiento rápido y escasa densidad, dando lugar a troncos rectos y largos. Además, las maderas blandas son fáciles de trabajar y de escasa resistencia. Son maderas bastante más económicas que las duras; por eso, su uso tan extendido en la construcción, en la ebanistería o en la fábrica de papel y de tableros de fibras. Los colores de estas maderas son siempre claros, pero con la exposición al aire y a la luz, tienden a oscurecer.',
            'file' => '',
            'images' => array('img/test/woods.png', 'img/test/wood_rings.png')
        ]
    )

    @livewire('brands-top')
    @livewire('brands-slider',
        [
            'brands' => array(
                //array('imageUrl', 'brandUrl')
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png',''),
                array('https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png',''),
            )
        ]
    )
    
</div>

