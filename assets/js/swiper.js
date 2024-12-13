document.addEventListener('DOMContentLoaded', function () {
    var swiper1 = new Swiper('.gallery-1', {
        loop: true,
        autoplay: {
            delay: 3000, // Tempo tra una slide e l'altra in millisecondi
        },
        effect: 'slide', // Altri effetti: 'fade', 'cube', 'coverflow'
    });

    var swiper2 = new Swiper('.gallery-2', {
        loop: true,
        autoplay: {
            delay: 3000,
        },
        effect: 'slide',
    });

    var swiper3 = new Swiper('.gallery-3', {
        loop: true,
        autoplay: {
            delay: 3000,
        },
        effect: 'slide',
    });
});
