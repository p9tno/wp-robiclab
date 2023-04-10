$(document).ready(function() {


    const composition = new Swiper('.composition_slider_js', {
        speed: 500,
        autoplay: {
            delay: 5000,
        },
        lazy: true,
        slidesPerView: 1,
        spaceBetween: 10,
        // loop: true,


        navigation: {
          nextEl: ".icon_slider_right",
          prevEl: ".icon_slider_left",
        },

        pagination: {
            el: '.composition__dotted',
            clickable: true,
            dynamicBullets: true,
        },

        scrollbar: {
         el: ".swiper-scrollbar",
        },

        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },

    });

    const row = new Swiper('.row_slider_js', {
        speed: 500,
        // autoplay: {
        //     delay: 5000,
        // },
        // lazy: true,
        slidesPerView: 1,
        spaceBetween: 20,

        // loop: true,
        // loopedSlides: 0,
        // slidesPerView: "auto",
        //
        // createElements: true,


        navigation: {
          nextEl: ".icon_slider_right",
          prevEl: ".icon_slider_left",
        },

        // pagination: {
        //     el: '.composition__dotted',
        //     clickable: true,
        //     dynamicBullets: true,
        // },

        scrollbar: {
         el: ".swiper-scrollbar",
         // draggable: true,
        },

        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
          // clickable: true,
        },

        // pagination: {
        //  el: '.swiper-dotted-line',
        //  // draggable: true,
        // },

        breakpoints: {
            768: {
                // spaceBetween: 68,
                // spaceBetween: 5,
                slidesPerView: 5,
            },
        }

    });

    function mobilSlider () {
      let slider_robot = null;
      let mediaQuerySize = 767;
      
      function initSlider () {
          if (!slider_robot) {
              slider_robot = new Swiper('.robot_swiper_js', {
                  speed: 500,
                  autoplay: {
                      delay: 5000,
                  },
                  
                  allowTouchMove: false,
                  loop: true,
                  effect: "fade",
                  fadeEffect: {
                      crossFade: true
                  },
                  slidesPerView: 1,
              });
          }
          $('.robot__menu').on('click',  '.hexagon__button', function(e) {
              e.preventDefault();
              let index = $(this).data('index');
              // console.log(index);
              // advantage.slideTo(index);
              slider_robot.slideToLoop(index);
          });
          
          slider_robot.on('slideChange', function (e) {
              let currentSlide = e.realIndex;
              let currentItem = $('.robot__menu').find(`[data-index='${currentSlide}']`);
              $('.hexagon__button').removeClass('active');
              currentItem.addClass('active');
          });
          
      }
      
      function destroySlider () {
          if (slider_robot) {
              slider_robot.destroy();
              slider_robot = null;
          }
          
      }
      
      $(window).on('load resize', function () {
          let windowWidth = $(this).innerWidth();
          if (windowWidth <= mediaQuerySize) {
              initSlider();
              // console.log('init slider');
          } else {
              destroySlider();
              // console.log('destroy slider');
          }
      });
  }
  mobilSlider();

});
