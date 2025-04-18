const slides = document.getElementById("carousel-slides");
const totalSlides = slides.children.length;
let currentIndex = 0;

document.getElementById("prev").addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateCarousel();
});

document.getElementById("next").addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % totalSlides;
  updateCarousel();
});

function updateCarousel() {
  const translatePercentage = -100 * currentIndex;
  slides.style.transform = `translateX(${translatePercentage}%)`;
}
