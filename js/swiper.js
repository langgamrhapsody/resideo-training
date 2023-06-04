//swiper third section

const chooseSwiper = new Swiper(".choose-swiper", {
  // Navigation arrows
  navigation: {
    nextEl: ".choose-swiper-button-next",
    prevEl: ".choose-swiper-button-prev",
  },
  // Default parameters
  slidesPerView: 1,
  loop: false,
  spaceBetween: 50,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      spaceBetween: 30,
    },

    // when window width is >= 768px
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

const heroTextSwiper = new Swiper(".hero-text-swiper", {
  // Navigation arrows
  navigation: {
    nextEl: ".hero-swiper-button-next",
    prevEl: ".hero-swiper-button-prev",
  },
  // Default parameters
  slidesPerView: 1,
  loop: true,
  allowTouchMove: false,
  pauseOnMouseEnter: false,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  //responsives
  breakpoints: {
    768: {
      autoplay: false,
      loop: false,
      allowTouchMove: true,
    },
  },
});

const heroImgSwiper = new Swiper(".hero-img-swiper", {
  // Navigation arrows
  navigation: {
    nextEl: ".hero-swiper-button-next",
    prevEl: ".hero-swiper-button-prev",
  },
  // Default parameters
  slidesPerView: 1,
  loop: true,
  allowTouchMove: false,
  pauseOnMouseEnter: false,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  //responsives
  breakpoints: {
    768: {
      autoplay: false,
      loop: false,
      allowTouchMove: true,
    },
  },
});
