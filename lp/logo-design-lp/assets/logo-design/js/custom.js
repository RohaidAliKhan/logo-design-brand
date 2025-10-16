var currentTab = 0;

function showTab(e) {
  var t = document.getElementsByClassName("tab");
  (t[e].style.display = "block"),
    0 == e
      ? ((document.getElementById("prevBtn").style.display = "none"), (document.getElementById("signupBtn2").style.display = "none"), (document.getElementById("nextBtn").style.display = "inline"))
      : (document.getElementById("prevBtn").style.display = "inline"),
    e == t.length - 1
      ? ((document.getElementById("nextBtn").style.display = "none"), (document.getElementById("signupBtn2").style.display = "inline"))
      : (document.getElementById("nextBtn").innerHTML = "Next");
}

function nextPrev(e) {
  var t = document.getElementsByClassName("tab");
  if (1 == e && !validateForm()) return !1;
  (t[currentTab].style.display = "none"), showTab((currentTab += e));
}

function validateForm() {
  var e,
    t,
    s = !0;
  for (e = document.getElementsByClassName("tab")[currentTab].getElementsByTagName("input"), t = 0; t < e.length; t++) "" == e[t].value && ((e[t].className += " invalid"), (s = !1));
  return s;
}

var currentTab03 = 0;

function showTabPopupExit(e) {
  var t = document.getElementsByClassName("tab03");
  (t[e].style.display = "block"),
    0 == e
      ? ((document.getElementById("prevBtn03").style.display = "none"),
        (document.getElementById("signupBtn03").style.display = "none"),
        (document.getElementById("nextBtn03").style.display = "inline"))
      : (document.getElementById("prevBtn03").style.display = "inline"),
    e == t.length - 1
      ? ((document.getElementById("nextBtn03").style.display = "none"), (document.getElementById("signupBtn03").style.display = "inline"))
      : (document.getElementById("nextBtn03").innerHTML = "Next");
}

$(document).ready(function () {
  $(".companies-list").addClass("owl-carousel owl-theme");
  $(".companies-list").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    navText: ["Previous", "Next"],
    responsiveClass: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 3,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 5,
      },
    },
  });

  $(".logo-catagories-wrapper").addClass("owl-carousel owl-theme");
  $(".logo-catagories-wrapper").owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: false,
    navText: ["Previous", "Next"],
    responsiveClass: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 1,
      },
      992: {
        items: 1,
      },
      1200: {
        items: 1,
      },
    },
  });

  $(".testimonials-inner-wrapper").addClass("owl-carousel owl-theme");
  $(".testimonials-inner-wrapper").owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: false,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsiveClass: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },

      1200: {
        items: 1,
      },
    },
  });

  // $('.portfolio-wrapper-grid-outer').addClass('owl-carousel owl-theme');
  // $('.portfolio-wrapper-grid-outer').owlCarousel({
  //     loop: false,
  //     margin: 0,
  //     nav: false,
  //     dots: true,
  //     autoplay:false,
  //     navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
  //     responsiveClass:true,
  //     autoplayTimeout:4000,
  //     autoplayHoverPause:true,
  //     responsive:{
  //         0:{
  //             items:1
  //         },

  //         1200:{
  //             items:1
  //         }
  //     }
  // });

  if ($(window).width() <= 991) {
    if (".services-slider".length != 0) {
      $(".services-slider").addClass("owl-carousel owl-theme");
      $(".services-slider").owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        mouseDrag: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },

          768: {
            items: 2,
          },
        },
      });
    }
  }
  if ($(window).width() > 0) {
    if (".packages-slider".length != 0) {
      $(".packages-slider").addClass("owl-carousel owl-theme");
      $(".packages-slider").owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        margin: 5,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        mouseDrag: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          992: {
            items: 2,
          },
          1200: {
            items: 3,
          },
        },
      });
    }
  }
});

(function ($) {
  $(window).on("load", function () {
    $.mCustomScrollbar.defaults.scrollButtons.enable = true; //enable scrolling buttons by default
    $.mCustomScrollbar.defaults.axis = "y"; //enable 2 axis scrollbars by default
    $(".package-body ul").mCustomScrollbar({
      setHeight: 300,
      scrollInertia: 1000,
      mouseWheel: { normalizeDelta: true },
      scrollButtons: { enable: true },
      keyboard: { enable: true, scrollAmount: "20px" },
      theme: "3d-dark",
      // theme:"my-theme"
    });
  });
})(jQuery);

/* popup js */

$(function () {
  $(".open-popup").on("click", function (e) {
    e.stopPropagation();
    e.preventDefault();
    $(".popup-wrapper").addClass("popup-wrapper-active");
    $(".popup-wrapper").find(".popup-content").addClass("popup-content-active");
  });

  $(".cross").on("click", function (e) {
    e.stopPropagation();
    e.preventDefault();
    $(".popup-wrapper").find(".popup-content").removeClass("popup-content-active");
    $(".popup-wrapper").find(".popup-content").addClass("popdown");
    window.setTimeout(function () {
      $(".popup-wrapper").removeClass("popup-wrapper-active");
    }, 1000);
  });

  //   $(".portfolio-box").on("click", function (e) {
  //     e.stopPropagation();
  //     e.preventDefault();
  //     $(".popup-wrapper2").addClass("popup-wrapper-active2");
  //     $(".popup-wrapper2").find(".popup-content").addClass("popup-content-active2");
  //     $(this).addClass("active-box");
  //   });

  //   $(".cross2").on("click", function (e) {
  //     e.stopPropagation();
  //     e.preventDefault();
  //     $(".popup-wrapper2").find(".popup-content").removeClass("popup-content-active2");
  //     $(".popup-wrapper2").find(".popup-content").addClass("popdown2");
  //     window.setTimeout(function () {
  //       $(".popup-wrapper2").removeClass("popup-wrapper-active2");
  //     }, 1000);
  //   });
});

/* popup js */

// $(function () {
//     $(".banner").on({
//         mousemove: function (e) {
//             e.stopPropagation();
//             e.preventDefault();
//             let Xvalue = - e.clientX * .05;
//             let Yvalue = - e.clientY * .05;
//             $(".banner-right-images-wrapper img:nth-child(3)").css("transform", `translate(${Xvalue}px,${Yvalue}px)`);
//             $(".banner-right-images-wrapper img:last-child").css("transform", ` translate(${-Xvalue}px,${-Yvalue}px)`);
//             $(".banner-right-images-wrapper img:nth-child(4)").css("transform", `translate(${Xvalue}px,${Yvalue}px)`);
//             // $(".cta-right-wrapper-images img:last").css("transform",`rotate(${-Xvalue}deg)  translate(${-Xvalue}px,${-Yvalue}px)`);

//         },
//         mouseleave: function () {
//             $(".banner-right-images-wrapper img:nth-child(3)").css("transform", `translate(0,0)`);
//             $(".banner-right-images-wrapper img:last-child").css("transform", `translate(0,0)`);
//             $(".banner-right-images-wrapper img:nth-child(4)").css("transform", `translate(0,0)`);
//             $(".cta-right-wrapper-images img:last").css("transform", `translate(0,0)`);

//         }
//     });

// sticky social
$(document).scroll(function () {
  "use strict";
  var y = $(this).scrollTop();
  if (y > 200) {
    $(".sticky-container").fadeIn();
  } else {
    $(".sticky-container").fadeOut();
  }

  if (y >= 70) {
    $(".header-main").addClass("stickyyy");
  } else {
    $(".header-main").removeClass("stickyyy");
  }
  if (y > 600) {
    $(".floating_wrap").addClass("visible");
    $(".floatbutton").addClass("visible");
  } else {
    $(".floating_wrap").removeClass("visible");
    $(".floatbutton").removeClass("visible");
  }
});
// sticky social end

// $(document).on("click", ".clickbutton", function () {
//   $(".floatbutton").toggleClass("active");
//   $(".crossplus").toggleClass("rotate");
// });

//=========== FLOATING FORM END

$(function () {
  $(".nav-link").on("click", function () {
    if ($(".tab-pane").hasClass("active")) {
      $(".tab-pane").find(".portfolio-box").addClass("animate__animated animate__zoomIn");
    }
  });

  $(".lazy").lazy({
    effect: "fadeIn",
    effectTime: 1000, // 1s = 1000ms
    threshold: 0,
  });
});

var brandLogo = Array.from(document.querySelectorAll("a.logo-animated"));
// console.log(brandLogo)
brandLogo.forEach(function ($this) {
  console.log(brandLogo);
  bodymovin.loadAnimation({
    wrapper: $this,
    animType: "svg",
    loop: true,
    path: "assets/images/logo-white.json",
  });
});
