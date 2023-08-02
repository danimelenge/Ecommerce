const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
let counter = 0;

function slideTo(index) {
    const sliderWidth = slider.clientWidth;
    slider.style.transform = `translateX(-${index * sliderWidth}px)`;
}

function prevSlide() {
    counter--;
    if (counter < 0) {
        counter = slides.length - 1;
    }
    slideTo(counter);
}

function nextSlide() {
    counter++;
    if (counter >= slides.length) {
        counter = 0;
    }
    slideTo(counter);
}

prevBtn.addEventListener("click", prevSlide);
nextBtn.addEventListener("click", nextSlide);