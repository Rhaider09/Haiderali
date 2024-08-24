// swiper js code for services section

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2000, // Adjust the delay as needed (in milliseconds)
        disableOnInteraction: false, // Allow user interaction to stop autoplay
    },
    pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        800: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
    }
});

// swiper js code for services section ends here
