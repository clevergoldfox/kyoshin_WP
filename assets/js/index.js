const swiper = new Swiper(".mySwiper", {
    loop: true,           // Infinite loop
    centeredSlides: true,      // Active slide is centered
    slidesPerView: 5,          // Show 5 slides at once
    spaceBetween: 10,          // Gap between slides
    speed: 500,           // Slide animation duration (ms)
    autoplay: {
        delay: 2000,         // Delay between slides
        disableOnInteraction: false
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1440 : { // at 768px and up
          slidesPerView: 4.5,
          spaceBetween: 10,
        },
        1024 : { // at 768px and up
          slidesPerView: 3,
          spaceBetween: 10,
        },
        768 : { // at 768px and up
            slidesPerView: 2.2,
            spaceBetween: 10,
        },
        425 : { // at 768px and up
          slidesPerView: 1.5,
          spaceBetween: 10,
        },
        375 : { // at 768px and up
          slidesPerView: 1.2,
          spaceBetween: 10,
        },
        320 : { // at 768px and up
          slidesPerView: 1,
          spaceBetween: 10,
        },
      }
    // breakpoints: {
    //     768: {
    //       slidesPerView: 3,
    //       spaceBetween: parseInt(getComputedStyle(document.documentElement).getPropertyValue('--slide-space')),
    //     }
    // }
});
