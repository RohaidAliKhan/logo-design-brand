$(document).ready(function () {
    $(".companies-list").addClass("owl-carousel owl-theme"),
        $(".companies-list").owlCarousel({
            loop: !0,
            margin: 0,
            nav: !1,
            dots: !0,
            autoplay: !0,
            navText: ["Previous", "Next"],
            responsiveClass: !0,
            autoplayTimeout: 2e3,
            autoplayHoverPause: !0,
            responsive: { 0: { items: 2 }, 576: { items: 3 }, 992: { items: 4 }, 1200: { items: 5 } },
        }),
        $(".logo-catagories-wrapper").addClass("owl-carousel owl-theme"),
        $(".logo-catagories-wrapper").owlCarousel({
            loop: !1,
            margin: 0,
            nav: !1,
            dots: !0,
            autoplay: !1,
            navText: ["Previous", "Next"],
            responsiveClass: !0,
            autoplayTimeout: 4e3,
            autoplayHoverPause: !0,
            responsive: { 0: { items: 2 }, 576: { items: 2 }, 992: { items: 2 }, 1200: { items: 2 } },
        }),
        $(".testimonials-inner-wrapper").addClass("owl-carousel owl-theme"),
        $(".testimonials-inner-wrapper").owlCarousel({
            loop: !1,
            margin: 0,
            autoplay: !0,
            nav: !1,
            dots: !0,
            autoplay: !1,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsiveClass: !0,
            autoplayTimeout: 4e3,
            autoplayHoverPause: !0,
            responsive: { 0: { items: 1 }, 1200: { items: 1 } },
        }),
        $(window).width() <= 991 &&
            0 != ".services-slider".length &&
            ($(".services-slider").addClass("owl-carousel owl-theme"),
            $(".services-slider").owlCarousel({ loop: !1, nav: !1, dots: !0, autoplay: !1, autoplayTimeout: 4e3, autoplayHoverPause: !0, mouseDrag: !0, responsiveClass: !0, responsive: { 0: { items: 1 }, 768: { items: 2 } } })),
        $(window).width() > 0 &&
            0 != ".packages-slider".length &&
            ($(".packages-slider").addClass("owl-carousel owl-theme"),
            $(".packages-slider").owlCarousel({
                loop: !1,
                mouseDrag: !0,
                nav: !1,
                dots: !0,
                margin: 5,
                autoplay: !1,
                autoplayTimeout: 4e3,
                autoplayHoverPause: !0,
                mouseDrag: !0,
                responsiveClass: !0,
                responsive: { 0: { items: 1 }, 768: { items: 2 }, 992: { items: 2 }, 1200: { items: 3 } },
            }));
}),
    (function (e) {
        e(window).on("load", function () {
            (e.mCustomScrollbar.defaults.scrollButtons.enable = !0),
                (e.mCustomScrollbar.defaults.axis = "y"),
                e(".package-body ul").mCustomScrollbar({ setHeight: 300, scrollInertia: 1e3, mouseWheel: { normalizeDelta: !0 }, scrollButtons: { enable: !0 }, keyboard: { enable: !0, scrollAmount: "20px" }, theme: "3d-dark" });
        });
    })(jQuery),
    $(function () {
        $(".open-popup").on("click", function (e) {
            e.stopPropagation(), e.preventDefault(), $(".popup-wrapper").addClass("popup-wrapper-active"), $(".popup-wrapper").find(".popup-content").addClass("popup-content-active");
        }),
            $(".cross").on("click", function (e) {
                e.stopPropagation(),
                    e.preventDefault(),
                    $(".popup-wrapper").find(".popup-content").removeClass("popup-content-active"),
                    $(".popup-wrapper").find(".popup-content").addClass("popdown"),
                    window.setTimeout(function () {
                        $(".popup-wrapper").removeClass("popup-wrapper-active");
                    }, 1e3);
            });
    }),
    $(function () {
        $(".banner1").on({
            mousemove: function (e) {
                e.stopPropagation(), e.preventDefault();
                let t = 0.05 * -e.clientX,
                    a = 0.05 * -e.clientY;
                $(".banner-right-images-wrapper img:nth-child(3)").css("transform", `translate(${t}px,${a}px)`),
                    $(".banner-right-images-wrapper img:last-child").css("transform", ` translate(${-t}px,${-a}px)`),
                    $(".banner-right-images-wrapper img:nth-child(4)").css("transform", `translate(${t}px,${a}px)`);
            },
            mouseleave: function () {
                $(".banner-right-images-wrapper img:nth-child(3)").css("transform", "translate(0,0)"),
                    $(".banner-right-images-wrapper img:last-child").css("transform", "translate(0,0)"),
                    $(".banner-right-images-wrapper img:nth-child(4)").css("transform", "translate(0,0)"),
                    $(".cta-right-wrapper-images img:last").css("transform", "translate(0,0)");
            },
        }),
            $(document).scroll(function () {
                "use strict";
                var e = $(this).scrollTop();
                e > 200 ? $(".sticky-container").fadeIn() : $(".sticky-container").fadeOut(),
                    e >= 70 ? $(".header-main").addClass("stickyyy") : $(".header-main").removeClass("stickyyy"),
                    e > 600 ? ($(".floating_wrap").addClass("visible"), $(".floatbutton").addClass("visible")) : ($(".floating_wrap").removeClass("visible"), $(".floatbutton").removeClass("visible"));
            }),
            $(document).ready(function () {
                $(".clickbutton").click(function () {
                    $(".floatbutton").toggleClass("active"), $(".crossplus").toggleClass("rotate");
                }),
                    $(".topformswitch").click(function () {
                        $(".topformwrap").toggleClass("active");
                    });
            });
    }),
    $(function () {
        $(".nav-link").on("click", function () {
            $(".tab-pane").hasClass("active") && $(".tab-pane").find(".portfolio-box").addClass("animate__animated animate__zoomIn");
        }),
            $(".lazy").lazy({ effect: "fadeIn", effectTime: 1e3, threshold: 0 });
    }),
    $(".combo-slider").addClass("owl-carousel owl-theme"),
    $(".combo-slider").owlCarousel({
        loop: !1,
        margin: 0,
        nav: !1,
        dots: !0,
        autoplay: !1,
        navText: ["Previous", "Next"],
        responsiveClass: !0,
        autoplayTimeout: 4e3,
        autoplayHoverPause: !1,
        responsive: { 0: { items: 1 }, 576: { items: 1 }, 992: { items: 1 }, 1200: { items: 1 } },
    });
var brandLogo = Array.from(document.querySelectorAll("a.logo-animated"));
brandLogo.forEach(function (e) {
    console.log(brandLogo), bodymovin.loadAnimation({ wrapper: e, animType: "svg", loop: !0, path: "assets/images/logo-white.json" });
});
var currentTab = 0;
function showTab(e) {
    var t = document.getElementsByClassName("tab");
    (t[e].style.display = "block"),
        0 == e
            ? ((document.getElementById("prevBtn").style.display = "none"), (document.getElementById("signupBtn2").style.display = "none"), (document.getElementById("nextBtn").style.display = "inline"))
            : (document.getElementById("prevBtn").style.display = "inline"),
        e == t.length - 1 ? ((document.getElementById("nextBtn").style.display = "none"), (document.getElementById("signupBtn2").style.display = "inline")) : (document.getElementById("nextBtn").innerHTML = "Next");
}
function nextPrev(e) {
    var t = document.getElementsByClassName("tab");
    if (1 == e && !validateForm()) return !1;
    (t[currentTab].style.display = "none"), showTab((currentTab += e));
}
function validateForm() {
    var e,
        t,
        a = !0;
    for (e = document.getElementsByClassName("tab")[currentTab].getElementsByTagName("input"), t = 0; t < e.length; t++) "" == e[t].value && ((e[t].className += " invalid"), (a = !1));
    return a;
}
var currentTab03 = 0;
function showTabPopupExit(e) {
    var t = document.getElementsByClassName("tab03");
    (t[e].style.display = "block"),
        0 == e
            ? ((document.getElementById("prevBtn03").style.display = "none"), (document.getElementById("signupBtn03").style.display = "none"), (document.getElementById("nextBtn03").style.display = "inline"))
            : (document.getElementById("prevBtn03").style.display = "inline"),
        e == t.length - 1 ? ((document.getElementById("nextBtn03").style.display = "none"), (document.getElementById("signupBtn03").style.display = "inline")) : (document.getElementById("nextBtn03").innerHTML = "Next");
}
var swiper = new Swiper(".swiper-container", {
        loopedSlides: 1,
        slidesPerView: 1,
        spaceBetween: 5,
        loop: !1,
        freeMode: !0,
        autoplay: { delay: 3e3 },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
          },

        breakpoints: {
            390: { slidesPerView: 1 },
            480: { slidesPerView: 1, mousewheel: { releaseOnEdges: !1 } },
            700: { slidesPerView: 1 },
            991: { slidesPerView: 2 },
            1366: { slidesPerView: 1 },
            1920: { slidesPerView: 2 },
            1600: { slidesPerView: 1 },
        },
    }),
    thumb = document.querySelectorAll(".thumbContainer");
thumb.forEach(function (e, t) {
    var a = 90 * t;
    e.classList.add("fadeInSlide"), (e.style.animationDelay = a + "ms");
});
$(".package-body ul li:contains('24 - 48 Hours Turn Around Time'), .combo-list-style ul li:contains('24 - 48 Hours Turn Around Time')").html("24 - 48 Business Hours Turn Around Time");
