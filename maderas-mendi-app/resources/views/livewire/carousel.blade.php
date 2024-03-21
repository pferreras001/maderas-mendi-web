<div class="carousel">
  <div class="slides">
    <div class="slide">
      @livewire('carousel-slide', 
        [
          'slide_title' => 'Maderas Mendi.', 
          'slide_subtitle' => 'Ayudando a confeccionar piezas de carpintería desde 1992.',
          'image' => 'img/carousel/wood_rings.jpeg'
        ]
      )
    </div>
    <div class="slide">
      @livewire('carousel-slide', 
        [
          'slide_title' => 'De su imaginario, a la realidad.', 
          'slide_subtitle' => 'Da rienda suelta a tus ideas, nosotros las hacemos reales.',
          'image' => 'img/carousel/artisan_wood.jpeg'
        ]
      )
    </div>
    <div class="slide">
      @livewire('carousel-slide', 
        [
          'slide_title' => 'La calidad, nuestro punto de partida.', 
          'slide_subtitle' => 'Nos enfocamos en la calidad, la artesanía, la sostenibilidad y la tradición.',
          'image' => 'img/carousel/artisan_square.jpeg'
        ]
      )
    </div>
  </div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var slides = document.querySelectorAll('.carousel .slides .slide');
  var slidesContainer = document.querySelector('.carousel .slides');
  var currentSlide = 0;

  function showSlide(index) {
    var translateValue = -index * slides[0].offsetWidth + 'px';
    slidesContainer.style.transform = 'translateX(' + translateValue + ')';
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  showSlide(currentSlide);
  setInterval(nextSlide, 5000);
});
</script>