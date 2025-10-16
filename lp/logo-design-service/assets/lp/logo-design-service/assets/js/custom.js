$(document).ready(function() {
    
    // Tabbing Function

    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this)
            .siblings()
            .removeClass("active");
        var target = $(this).data("targetit");
        var tablen = $("." + target).find('.tab-content .row > div'), tebstr;
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $('.tab-content .row > div').addClass('animate__zoomIn');
        $("." + target).show().find('.tab-content .row > div').addClass('animate__zoomIn');
        $(".tabViewList").slick("setPosition", 0);
        for (var i = 1; i < tablen.length; i++) {
            tebstr = (100 + 100 * (i - 1)) + "ms";
            tablen.eq(i).css('animation-delay', tebstr)
        }
    });
    
    
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });
    
    $("ul.menu li a").click(function() {
        $(".menu-Bar").removeClass("open");
        $("body").removeClass("ovr-hiddn");
        $(".menuWrap").removeClass("open");
    });

    $('.loginUp').click(function(){
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
        

        var orgtexts = '$35';
        // $(".centercont h3").text('Get Custom Logo Design');
      $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");
    });

    $(window).scroll(function(){
          scroll = $(window).scrollTop();
        if (scroll >= 650) {
            $(".fxdicon").addClass("active");
        } else {
            $(".fxdicon").removeClass("active");
        }
    });
    $('.popbtn2').click(function(){
       $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
        $('.price-margin .pkgHead h5 strong sub').hide();
        $('.LoginPopup').removeClass('price-margin');
        
    });


     $('.closeico,.overlay').click(function(){
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeOut();
       
    });


    $('.signUp').click(function(){
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
        $('.LoginPopup').removeClass('price-margin');
        
    });

    // On button click
    $('.popbtn').click(function() {
        $('.overlay').fadeIn();
        $('.LoginPopup').fadeIn();
        $('.LoginPopup').addClass('price-margin');

        const packprice = '$35';
        $(".centercont h4").html("In Just <span>" + packprice + "</span>");
    });

    $(document).ready(function() {
        setTimeout(function() {
            $('.overlay').fadeIn();
            $('.LoginPopup').fadeIn();
            $('.LoginPopup').addClass('price-margin');

            const packprice = '$35';
            $(".centercont h4").html("In Just <span>" + packprice + "</span>");
        }, 5000);
    });


     $('.closeico,.overlay').click(function(){
        
        $('.popupmain').fadeOut();
        $('.overlay').fadeOut();
       
        $('.LoginPopup').removeClass('price-margin');
        
    });


    
    $(".faqSec .faqBox").click(function(){
        $('.faqSec .faqBox').removeClass('faqHover');
        
        $(this).addClass('faqHover');
        
    })

   

    $('.index-slider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 824,
        settings: {
          dots: false
        }
      }
      ]
    });
    
    if (window.matchMedia('(min-width: 1000px)').matches) {
        $('.portfolio-slider').slick({
            rows:3,
            dots: false,
            arrows: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow:"<a class='arr-left slick-arrow'><i class='fa fa-arrow-left'></i></a>",
            nextArrow:"<a class='arr-right slick-arrow'><i class='fa fa-arrow-right'></i></a>",
           
        });
    }
  
 
    if (window.matchMedia('(max-width: 999px)').matches) {
        $('.portfolio').addClass('grid-3');
        $('.portfolio').removeClass('portfolio-slider');
    }
    
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

    
    $('.testi-sliderr').slick({
       dots: true,
      arrows: false,
      infinite: true,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 2000,
      draggable:true
    });
		
    
    
    


function loopNext(){$('.portfolioSlide').stop().animate({scrollLeft:'+=80'}, 'fast', 'linear', loopNext);}
function loopPrev(){$('.portfolioSlide').stop().animate({scrollLeft:'-=80'}, 'fast', 'linear', loopPrev);}
function stop(){$('.portfolioSlide').stop();}

$('.next').hover(function () {
   loopNext();
},function () {
   stop();
});

$('.prev').hover(function () {
   loopPrev();
},function () {
   stop();
});


     $('.colasebar li span').click(function(){
        $(this).parent('li').find('span').addClass('open');
        $(this).parent('li').addClass('active');
        $(this).parent('li').siblings().find('span').removeClass('open');
        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').find('.expandable').slideDown();
        $(this).parent('li').siblings().find('.expandable').slideUp();
    });
  
});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});
     

$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    });

});


/* RESPONSIVE JS */
// if ($(window).width() > 824) {
//   AOS.init();

// }


function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $('.topAppendTxt').each(function() {
            var getdtd = $(this).find('.cloneDiv').clone(true);
            $(this).find('.cloneDiv').remove();
            $(this).append(getdtd);
        });
    };
}
$('ul.process-ul li').on('click', function() {
    $('ul.process-ul').addClass('process-animate');
    var tab_id = $(this).attr('id');
    $('ul.process-ul li').removeClass('active');
    $(this).addClass('active');
    $('.process-tabs').removeClass('active');
    $("." + tab_id).fadeIn('slow').addClass('active');
    $('ul.process-ul').removeClass('process1');
    $('ul.process-ul').removeClass('process2');
    $('ul.process-ul').removeClass('process3');
    $('ul.process-ul').removeClass('process4');
    $('ul.process-ul').removeClass('process5');
    $('ul.process-ul').removeClass('process6');
    $('ul.process-ul').addClass(tab_id);
    setTimeout(function() {
        $('ul.process-ul').removeClass('process-animate');
    }, 500);
});
$('.arrow-left').on('click', function() {
    if ($('#process1').hasClass("active")) {
        $('.arrow-left').addClass('disable');
    } else {
        $('.arrow-left').removeClass('disable');
        $('.arrow-right').removeClass('disable');
        $('ul.process-ul').addClass('process-animate');
        var abc = $('.prc-all.active').prev('.prc-all').addClass('active');
        var tab_id1 = abc.attr('id');
        abc.nextAll('.prc-all').removeClass('active');
        abc.prevAll('.prc-all').removeClass('active');
        $('.process-tabs').removeClass('active');
        $("." + tab_id1).fadeIn('slow').addClass('active');
        $('ul.process-ul').removeClass('process1');
        $('ul.process-ul').removeClass('process2');
        $('ul.process-ul').removeClass('process3');
        $('ul.process-ul').removeClass('process4');
        $('ul.process-ul').removeClass('process5');
        $('ul.process-ul').removeClass('process6');
        $('ul.process-ul').addClass(tab_id1);
        setTimeout(function() {
            $('ul.process-ul').removeClass('process-animate');
        }, 500);
    }
});
$('.arrow-right').on('click', function() {
    if ($('.prc-all.active').is(":last-child")) {
        $('.arrow-right').addClass('disable');
    } else {
        $('.arrow-left').removeClass('disable');
        $('.arrow-right').removeClass('disable');
        $('ul.process-ul').addClass('process-animate');
        var abc = $('.prc-all.active').next('.prc-all').addClass('active');
        var tab_id1 = abc.attr('id');
        abc.nextAll('.prc-all').removeClass('active');
        abc.prevAll('.prc-all').removeClass('active');
        $('.process-tabs').removeClass('active');
        $("." + tab_id1).fadeIn('slow').addClass('active');
        $('ul.process-ul').removeClass('process1');
        $('ul.process-ul').removeClass('process2');
        $('ul.process-ul').removeClass('process3');
        $('ul.process-ul').removeClass('process4');
        $('ul.process-ul').removeClass('process5');
        $('ul.process-ul').removeClass('process6');
        $('ul.process-ul').addClass(tab_id1);
        setTimeout(function() {
            $('ul.process-ul').removeClass('process-animate');
        }, 500);
    }
});
$(".combo-slider").not(".slick-initialized").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
});

$(".pkgMid ul").slimScroll({
    height: "250px",
    color: "#ffb900",
});