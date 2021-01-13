$(document).ready(function () {
    // Banner  Owl Carosuel
    $("#banner-area .owl-carousel").owlCarousel({
      dots: true,
      items: 1,
    });
    //   Top sale
    $("#top-sale .owl-carousel").owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      },
    });
  });
  