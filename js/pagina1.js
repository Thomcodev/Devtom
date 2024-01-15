
var slider = document.getElementById("slider");
var images = slider.getElementsByTagName("img");
var currentIndex = 0;
var interval = 10500; // Cambia el valor según tus necesidades (en milisegundos)

function showNextImage() {
  images[currentIndex].style.display = "none";
  currentIndex = (currentIndex + 1) % images.length;
  images[currentIndex].style.display = "block";
}

setInterval(showNextImage, interval);