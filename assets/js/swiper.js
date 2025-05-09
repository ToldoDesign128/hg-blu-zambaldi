document.addEventListener('DOMContentLoaded', function () {
    var swiper1 = new Swiper('.gallery-1', {
        loop: true,
        autoplay: {
            delay: 2000, // Tempo tra una slide e l'altra in millisecondi
        },
        effect: 'fade', // Altri effetti: 'fade', 'cube', 'coverflow'
    });

    var swiper2 = new Swiper('.gallery-2', {
        loop: true,
        autoplay: {
            delay: 3000,
        },
        effect: 'fade',
    });

    var swiper3 = new Swiper('.gallery-3', {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        effect: 'fade',
    });

    var swiper4 = new Swiper(".swiperGallery", {
        slidesPerView: 1,
        spaceBetween: 23,
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 3,
            },
            1560: {
                slidesPerView: 4,
            },
        },
    });
});
