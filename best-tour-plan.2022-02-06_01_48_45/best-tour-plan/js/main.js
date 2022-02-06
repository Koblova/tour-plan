var hotelSlider = new Swiper(".hotel-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".hotel-slider__button--next",
    prevEl: ".hotel-slider__button--prev",
  },
  
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
});

var reviewsSlider = new Swiper(".reviews-slider", {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: ".reviews-slider__button--next",
    prevEl: ".reviews-slider__button--prev",
  },
  
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
});

var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
  console.log("Клик по кнопке меню");
  document.querySelector(".navbar-bottom").classList.toggle("navbar-bottom--visible");
});

var modalClose = document.querySelector(".modal__close");
modalClose.addEventListener("click", function (event) {
  event.preventDefault();
  document.querySelector(".modal").classList.add("hidden__modal");
  document.querySelector("body").classList.remove("modal__open");
});

var modalClose = document.querySelector(".booking__button");
modalClose.addEventListener("click", function () {
  document.querySelector(".modal").classList.remove("hidden__modal");
  document.querySelector("body").classList.add("modal__open");
});

AOS.init();