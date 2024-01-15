let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
  });
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  showSlide(currentIndex);
}

// Mostrar la primera diapositiva al inicio
showSlide(currentIndex);

// Cambiar a la siguiente diapositiva cada 5 segundos
setInterval(nextSlide, 5000);

