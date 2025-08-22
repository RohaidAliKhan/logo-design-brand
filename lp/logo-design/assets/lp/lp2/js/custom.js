$(document).ready(function() {
    $("li:first-child").addClass("first"), $("li:last-child").addClass("last"), $('[href="#"]').attr("href", "javascript:;"), $(".closePop,.overlay").click(function() {
        $("body").removeClass("ovr-hide"), $(".popup1").fadeOut(), $(".overlay").fadeOut()
    })
}), $(document).on("click", ".popupBtn1", function() {
    var a = $(this).attr("pack-name"),
        e = $(this).attr("type"),
        t = $(this).attr("amount"),
        i = $(this).attr("pack_details");
    $('#popupform1 input[name="package_name"]').val(a), $('#popupform1 input[name="package_cost"]').val(t), $('#popupform1 input[name="package_cat"]').val(e), $('#popupform1 input[name="package_html"]').val(i), $("body").addClass("ovr-hide"), $(".popup1").fadeIn(), $(".overlay").fadeIn()
}), $(document).on("click", ".pkgBtn", function() {
    var a = $(this).attr("pack-name"),
        e = $(this).attr("type"),
        t = $(this).attr("amount"),
        i = $(this).attr("pack_details");
    $('#popupform1 input[name="package_name"]').val(a), $('#popupform1 input[name="package_cost"]').val(t), $('#popupform1 input[name="package_cat"]').val(e), $('#popupform1 input[name="package_html"]').val(i), $("body").addClass("ovr-hide"), $(".popup1").fadeIn(), $(".overlay").fadeIn()
});
var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        loop: !0,
        autoplay: {
            delay: 6e3,
            disableOnInteraction: !1
        },
        on: {
            autoplayTimeLeft(a, e, t) {
                ! function e() {
                    let i = a.realIndex,
                        s = document.querySelector(".mySwiper .swiper-slide-active"),
                        l = s.querySelectorAll("svg circle");
                    l && l.forEach(a => {
                        a.style.strokeDashoffset = "125.6"
                    });
                    let o = s.querySelectorAll("svg circle");
                    o[i].style.strokeDashoffset = 2 * Math.PI * 20 * (1 - t)
                }()
            }
        }
    }),
    swiperltr = new Swiper(".swiperltr", {
        spaceBetween: 5,
        loop: !0,
        speed: 6500,
        slidesPerView: "auto",
        freeMode: !0,
        autoplay: {
            delay: 0
        }
    });
$(".acc_title").on("click", function() {
    var a = $(this).closest("li"),
        e = a.find(".acc_desc");
    e.is(":visible") ? (e.slideUp(), a.removeClass("active")) : ($(".acc_desc:visible").slideUp(), $(".accordion li").removeClass("active"), e.slideDown(), a.addClass("active"))
}), $("[data-targetit]").on("click", function(a) {
    $(this).addClass("current"), $(this).siblings().removeClass("current");
    var e = $(this).data("targetit");
    $("." + e).siblings('[class^="box-"]').hide(), $("." + e).fadeIn(), $(".tab-slider").slick("setPosition")
}), $(window).width();