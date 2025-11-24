const slider = document.querySelector('.slide-bar');


function autoSlide() {
    slider.scrollLeft += 2; // speed
    if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
        slider.scrollLeft = 0;
    }
}


setInterval(autoSlide, 20); // speed: lower = faster
