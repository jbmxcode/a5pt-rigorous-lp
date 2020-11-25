import Swiper, { Navigation, Autoplay } from 'swiper';

Swiper.use([Navigation, Autoplay]);

const swiper = new Swiper('.swiper-container', {  
    centeredSlides: true,
    slidesPerView: 1,
    loop: true,
    effect: 'fade',
    speed: 1200,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    },
    keyboard: {
        enabled: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
})