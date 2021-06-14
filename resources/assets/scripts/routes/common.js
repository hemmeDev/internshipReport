import LocomotiveScroll from 'locomotive-scroll';
import Swiper from 'swiper';
import SwiperCore, { Navigation } from 'swiper/core';

export default {
  init() {

    SwiperCore.use([Navigation]);

    //Swiper
    var swiper = new Swiper('.mySwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    console.log(swiper);

    // LocomotiveScroll
    let locoScroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true,
      multiplier: 1.5,
    });

    // Overlay menu function
    $('.hamburger').click(function () {

      $(this).toggleClass('active');
      $('body').toggleClass('hamburger-active');

      if ($('body').hasClass('hamburger-active')) {
        locoScroll.destroy();
      } else {
        locoScroll.init();
      }

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
