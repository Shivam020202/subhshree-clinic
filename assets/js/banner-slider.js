// Banner Slider Initialization
jQuery(document).ready(function ($) {
  // Initialize banner slider with auto-slide
  $("#bannerSlider").slick({
    autoplay: true,
    autoplaySpeed: 10000, // 10 seconds
    speed: 800,
    fade: false,
    cssEase: "ease-in-out",
    arrows: true,
    dots: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="far fa-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="far fa-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        },
      },
    ],
  });
});
