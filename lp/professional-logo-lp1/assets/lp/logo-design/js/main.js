function vidplay() {
    var a = document.getElementById("videoPlayer"),
        e = document.getElementById("playbtn");
    a.paused ? (a.play(), (e.className = "pause")) : (a.pause(), (e.className = "play"));
}
function order_now_value(a) {
    $(".modal").show();
}
$(window).load(function () {
    var a = !0,
        e = -1;
    $(".logo-card .back").show(),
        $(".logo-card").data("reverseLogoCard", a).flip({ trigger: "manual", reverse: a }),
        setTimeout(function () {
            !(function o() {
                var n = $(".logo-card").length;
                551 > $("body").width() && (n = 6);
                var i = Math.floor(Math.random() * n);
                i == e && (i = Math.floor(Math.random() * n)), (e = i);
                var r = 1e3 * Math.random() * Math.floor(4 * Math.random()) + 750,
                    t = $(".logo-card").eq(i);
                (a = !t.data("reverseLogoCard")),
                    t.data("reverseLogoCard", a),
                    t.flip("toggle", function () {
                        t.flip({ reverse: a }),
                            setTimeout(function () {
                                o();
                            }, r);
                    });
            })();
        }, 1e3);
}),
    setTimeout(function () {
        $(".new_popup_main").fadeIn();
    }, 1e4),
    $(".close-btn-new").click(function () {
        $(".new_popup_main").fadeOut();
    }),
    (window.__CF$cv$params = {
        r: "6fad99b0ab53977f",
        m: ".GetkFtG_m2HAGeWQgxKUkzM3dLgnLgDLQRcvCTNDIM-1649783688-0-AaaaipXM45xGvQ0E3pU3nrHvpvNuvnQxekEtGjsDdPmiixgeba/HnZa6nRSQxBC/VbgbMcp3I8atqVcqGPSdKndwBFQYoUjcW+YPAiUTTKNVIkWkhy/zqnbLrN0eYwmhHg==",
        s: [11862671061, 380371301049],
        u: "/cdn-cgi/challenge-platform/h/g",
    }),
    $(".popup-btn-new").on("click", function () {
        $(".popupform-main").addClass("active"),
            $("body").addClass("o-hidden"),
            $(".overlay-bg").fadeIn(500),
            $(".close-btn").on("click", function () {
                $(".popupform-main").removeClass("active"), $("body").removeClass("o-hidden"), $(".overlay-bg").fadeOut(500);
            }),
            $(".overlay-bg").click(function () {
                $("popupform-main").removeClass("active"), $("body").removeClass("o-hidden"), $(".overlay-bg").fadeOut(500);
            });
    }),
    $(document).ready(function () {
        $(".waves-carousel").owlCarousel({
            itemsCustom: [
                [0, 1],
                [700, 3],
            ],
            navigation: !1,
        });

        $(".combo-slider").owlCarousel({
            itemsCustom: [
                [0, 1],
                [700, 1],
            ],
            navigation: !1,
        });
    })
