//swiper third section

var chooseSwiper = new Swiper(".choose-us__swiper-container", {
  // Navigation arrows
  navigation: {
    nextEl: ".choose-swiper-button-next",
    prevEl: ".choose-swiper-button-prev",
  },

  // Default parameters
  loop: false,
  allowTouchMove: true,
  pauseOnMouseEnter: false,

  autoplay: false,

  longSwipesRatio: 0.01,
  followFinger: false,
  grabCursor: true,
  watchSlidesProgress: true,
  parallax: true,
  lazy: {
    loadPrevNext: true,
  },

  spaceBetween: 50,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

    // when window width is >= 575.98px
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

var heroTextSwiper = new Swiper(".hero-text-swiper", {
  // Default parameters
  direction: "horizontal",
  effect: "slides",
  loop: true,
  allowTouchMove: false,

  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },

  //responsives
  // breakpoints: {
  //   768: {
  //     autoplay: false,
  //     loop: false,
  //     allowTouchMove: true,
  //   },
  // },
});

var heroImgSwiper = new Swiper(".hero-img-swiper", {
  // Navigation arrows
  navigation: {
    nextEl: ".hero__swiper-button-next",
    prevEl: ".hero__swiper-button-prev",
  },

  pagination: {
    el: ".hero__swiper-pagination",
    type: "fraction",
    formatFractionCurrent: function (number) {
      return ("0" + number).slice(-2);
    },
    formatFractionTotal: function (number) {
      return ("0" + number).slice(-2);
    },
    renderFraction: function (currentClass, totalClass) {
      return (
        '<span class="' +
        currentClass +
        '"></span>' +
        " / " +
        '<span class="' +
        totalClass +
        '"></span>'
      );
    },
  },
  // Default parameters
  loop: true,
  allowTouchMove: true,
  pauseOnMouseEnter: false,

  autoplay: true,

  longSwipesRatio: 0.01,
  followFinger: false,
  grabCursor: true,
  watchSlidesProgress: true,
  parallax: true,
  lazy: {
    loadPrevNext: true,
  },

  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },

  //responsives
  // breakpoints: {
  //   768: {
  //     autoplay: false,
  //     loop: false,
  //     allowTouchMove: true,
  //   },
  // },
});

heroImgSwiper.controller.control = this.heroTextSwiper;
