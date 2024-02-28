<div>
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

    @livewire('product-catalog')

    @livewire('blog-entry')

    @livewire('contact')

    @livewire('what-we-do-text',
        [
            'title' => 'La calidad lo es todo.',
            'text' => 'Cada pieza que sale de nuestro taller está hecha con materia prima de primera calidad y de manera sostenible. Creemos en construir no solo productos excepcionales, sino también un futuro mejor para nuestro planeta.',
            'align' => 'right'
        ]
    )

    @livewire('what-we-do-images')
    
</div>

