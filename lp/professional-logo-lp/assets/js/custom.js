var newsletter_p = setInterval(function () {
  $("#ouibounce-modal").css("display", "block");
  clearInterval(newsletter_p);
}, 3000);

jQuery(function ($) {
  $(".cus-overlay").click(function () {
    $("#ouibounce-modal2").attr("id", "ouibounce-modal");
    setTimeout(function () {
      $("#ouibounce-modal").css("display", "block");
    }, 10000);
  });
  $(".popupform .close").click(function () {
    $("#ouibounce-modal2").attr("id", "ouibounce-modal");
    setTimeout(function () {
      $("#ouibounce-modal").css("display", "block");
    }, 10000);
  });

  $("#ouibounce-modal form").validate();
  $("li:first-child").addClass("first");
  $("li:last-child").addClass("last");
  $("tr:nth-child(odd)").addClass("alter");
  $('[href="#"]').attr("href", "javascript:;");

  $(".typed").typed({
    strings: ["Get a Perfectly Designed Logo, from World's # 1 Design Company"],
    typeSpeed: 30,
    onStringTyped: function (e) {
      console.log(e + "done");
      $("#typed-cursor").hide();
    },
    backspace: function (curString, curStrPos) {
      setTimeout(function () {
        if (self.arrayPos == 1) {
          self.stopNum = 3;
        } else {
          self.stopNum = 0;
        }
      });
    },
  });

  if (jQuery().lazyload) {
    $("img.lazy").lazyload({ effect: "fadeIn", skip_invisible: false });
  }

  $("#cyear").text(new Date().getFullYear());

  function sendReq() {
    $.ajax({
      url: "http://j.maxmind.com/app/geoip.js",
      type: "GET",
      success: function (data) {
        var ctrycode1 = geoip_country_code(),
          tgtctry = $('.jform select.countrylist option[data-abbr="' + ctrycode1 + '"]');
        tgtctry.attr("selected", "selected");
        $('.jform input[name="code"]').val("+" + tgtctry.attr("value"));
        $('.jform input[name="ctry"]').val($(".jform select.countrylist option:selected").html());
        $('.jform select.countrylist[name="ctry"]').each(function () {
          var cval = $(this).children("option:selected").attr("value");
          $("form .pc span").attr("class", "fg" + cval);
        });
      },
      error: function (e) {
        console.log("Error:", e);
      },
      contentType: "application/javascript; charset=ISO-8859-1",
      dataType: "script",
    });
  }

  $("input").on("focus", function () {
    if (window.blurred == false) {
      window.blurred = true;
      sendReq();
    }
  });

  $(".s-bar").hover(
    function () {
      $(this).stop(true, true).animate({ right: "184px" }, 500, "easeOutExpo");
      $(".side-bars").css("z-index", "1004");
    },
    function () {
      $(this).animate({ right: "0px" }, 500, "easeOutBounce");
      $(".side-bars").css("z-index", "999");
    }
  );

  $(".cus-overlay").click(function () {
    $(".popup-form, .callback-form, .bxch").css({ overflow: "hidden" });
    $(".popup-form, .callback-form, .bxch").hide(300);
    $(this).fadeOut(300);
    $(".floating-form-wrap").animate({ "margin-right": "-584px" });
  });

  $(".floating-form-wrap .form-handle, #slideform").click(function () {
    if ($(".floating-form-wrap").css("margin-right") == "-584px") {
      $(".floating-form-wrap").animate({ "margin-right": "0px" });
      $(".cus-overlay").fadeIn(300);
    } else {
      $(".floating-form-wrap").animate({ "margin-right": "-584px" });
      $(".cus-overlay").fadeOut(300);
    }
  });

  $(".floating-banner").hover(
    function () {
      $(".floating-banner").stop(1, 1).animate({ "margin-left": "0px" }, 200);
      $(".cus-overlay").stop(1, 1).fadeIn(200);
    },
    function () {
      $(".floating-banner").animate({ "margin-left": "-610px" }, 200);
      $(".cus-overlay").fadeOut(200);
    }
  );

  $(".masthead-slider button, .btm-sticky a, .custom-pkg, .hire-btn, .portfoliopage .masthead .contact, .cta-red-pf button.hire, .custom-quote, .packages-addons a.various, .addon-btn").click(
    function () {
      $(".popup-form").show(300).addClass("visibleit");
      $(".cus-overlay").fadeIn(300);
    }
  );

  $("a.various").click(function () {
    $("#ouibounce-modal").attr("id", "ouibounce-modal2");
  });

  $(".req-callback").on("click", function () {
    $(".callback-form").show(300).addClass("visibleit");
    $(".cus-overlay").fadeIn(300);
  });

  $(".cus-overlay").click(function () {
    $(this).fadeOut(300);
    $(".callback-form, .popup-form").removeClass("visibleit");
    $(".floating-form-wrap").animate({ "margin-right": "-584px" });
  });

  $("a.close").click(function () {
    $(".cus-overlay").trigger("click");
  });

  $(".floating-form-wrap .form-handle, #slideform").click(function () {
    if ($(".floating-form-wrap").css("margin-right") == "-584px") {
      $(".floating-form-wrap").animate({ "margin-right": "0px" });
      $(".cus-overlay").fadeIn(300);
    } else {
      $(".floating-form-wrap").animate({ "margin-right": "-584px" });
      $(".cus-overlay").fadeOut(300);
    }
  });

  $(window).scroll(function () {
    var topPlusWindowSize = $(window).scrollTop() + $(window).height();

    if ($(".floating-form-wrap")[0] && $(".side-bars")[0]) {
      var headerHeight = $(".header-wrap").height() - 140;
      if ($(window).scrollTop() >= headerHeight) {
        $(".floating-form-wrap, .side-bars").fadeIn(300);
        $(".floating-banner").fadeIn(300);
        $(".btm-sticky").fadeIn(300);
      } else {
        $(".floating-form-wrap, .side-bars").fadeOut(300);
        $(".floating-banner").fadeOut(300);
        $(".btm-sticky").fadeOut(300);
      }
    }
  }); //window scroll end

  function sendReq() {}

  $("input").on("focus", function () {
    if (window.blurred == false) {
      window.blurred = true;
      sendReq();
    }
  });

  $(".nav-tabs li a").click(function () {
    var gethref = $(this).attr("href");
    $(gethref + " .cycle-slideshow").hide();
    setTimeout(function () {
      $(gethref + " .cycle-slideshow").cycle("reinit");
      $("html,body").animate({ scrollTop: $(gethref).offset().top - 20 }, "slow");
      $(gethref + " .cycle-slideshow").fadeIn("slow");
    }, 500);
  });

  $(window).load(function () {
    // Banform Select Flag
    $('.jform select.countrylist[name="pc"]').each(function () {
      var ctcd = $(this).val();
      $(this)
        .prev("span")
        .addClass("fg" + ctcd);
    });
  });

  // Banform Select Flag
  $('.jform select.countrylist[name="pc"]').bind("change", function () {
    var cval = $(this).children("option:selected").attr("value");
    $(this)
      .parent()
      .children("span")
      .attr("class", "fg" + cval);
  });

  resizer();
});

$(window).resize(function (e) {
  resizer();
});

function resizer() {
  var ht = $(".webSec .ri-grid img").height();
  $(".webSec .ri-grid, .webSec .ri-grid .row, .webSec .ri-grid .leftSec, .webSec .ri-grid .rightSec").height(ht);
  $(".webSec .tempSlide").height(ht - $(".hd1").height() - 60);
}

var getid;
function gotoscroll(getid) {
  jQuery("html,body").animate({ scrollTop: jQuery(getid).offset().top }, "slow");
}

$(".combo-slider").owlCarousel({
  itemsCustom: [
    [0, 1],
    [700, 1],
  ],
  navigation: !1,
});
