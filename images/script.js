let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel-img");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// Optional: Auto-slide
// Uncomment the code below if you want the carousel to auto-slide
/*
let autoSlideInterval = setInterval(function() {
  plusSlides(1);
}, 5000); // Ganti gambar setiap 5 detik

// Untuk menghentikan auto-slide saat mouse hover
document.querySelector('.carousel-container').addEventListener('mouseover', () => {
  clearInterval(autoSlideInterval);
});

document.querySelector('.carousel-container').addEventListener('mouseleave', () => {
  autoSlideInterval = setInterval(function() {
    plusSlides(1);
  }, 5000);
});
*/