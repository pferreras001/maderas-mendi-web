<div class="carousel">
  <div class="slides">
    <div class="slide">@livewire('carousel-slide', ['slide_title' => 'Hello!', 'slide_subtitle' => 'This is our slide #1'])</div>
    <div class="slide">@livewire('carousel-slide', ['slide_title' => 'Hello!', 'slide_subtitle' => 'This is our slide #2'])</div>
    <div class="slide">@livewire('carousel-slide', ['slide_title' => 'Bye!', 'slide_subtitle' => 'This is our slide #3'])</div>
  </div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var slides = document.querySelectorAll('.slide');
  var slidesContainer = document.querySelector('.slides');
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