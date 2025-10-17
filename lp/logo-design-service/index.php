<?php
include(__DIR__ . '/../../includes/config.php');
?>
<?php include '../../includes/packages-data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="csrf-token" content="cTKqGvmvRoGzHUS8b7VrdSA2UrsIJd6ucjFc9kWK">
    <link href="assets/css/ledge/sweetalert.css" rel="stylesheet" type="text/css">

    <!--<title>Get Unique Logo Concepts from USA's no.1 Design Company</title>-->
    <title>Professional Logo Design in $35 | <?php echo WEBSITE_NAME ?></title>
    <link rel="stylesheet" href="assets/lp/logo-design-service/assets/css/layout.css">
    <link rel="stylesheet" href="assets/lp/logo-design-service/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">

    <style>
        img.logo-white {
            filter: brightness(200);
        }
    </style>
    <link rel="icon" href="assets/lp/logo-design-service/assets/images/favicon.png">
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16896663186"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16896663186');
    </script> -->
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17442967798"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17442967798');
    </script>
    <script>
        (function(w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function() {
                var o = {
                    ti: "97186938",
                    enableAutoSpaTracking: true
                };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
                var s = this.readyState;
                s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script> -->

</head>

<body>
    <style>
        :root {
            --white: #fff;
            --black: #000;
            --primary: #0057db;
            --secondary: #57d5ff;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        header {
            background-color: #000;
            padding: unset;
        }

        header .logo {
            display: block;
        }

        header .logo img {
            margin: 11px 0 9px;
            height: auto;
            width: 150px;
            aspect-ratio: auto 150 / 50;
        }

        header .cta-header {
            margin-top: 24px;
            border-radius: 5px;
            height: 28px;
            font-size: 19px;
            color: #fff;
            /* border: 1px solid #949494; */
            float: right;
        }

        .cta-header .phone {
            float: left;
            padding: 0 8px;
            font-size: 12px;
            font-weight: 400;
            line-height: 26px;
        }

        .cta-header .phone span {
            font-weight: 700;
            font-size: 14px;
            background: url(./assets/images/sprites.png) 0 0 no-repeat;
            width: 10px;
            height: 16px;
            margin: 5px 7px 0 2px;
            float: left;
        }

        .cta-header .phone strong {
            margin: 0;
            line-height: 18px;
            font-size: 14px;
        }

        .cta-header .phone strong a {
            color: #ffffff;
        }

        .cta-header .chat {
            padding: 0 17px 0 13px;
            position: relative;
            cursor: pointer;
            height: 20px;
            font-size: 13px;
            float: left;
            line-height: 25px;
            margin: 0 0 0 3px;
        }

        .cta-header .chat:after {
            content: "";
            border-left: 1px solid #bebdbd;
            position: absolute;
            left: 1px;
            top: 4px;
            bottom: 0;
            margin: auto;
            height: 82%;
            width: 1px;
        }

        .cta-header .chat-ico {
            background: url(../images/sprites.png) no-repeat -25px 2px;
            width: 17px;
            height: 24px;
            float: left;
            margin: 3px 5px 0 0;
        }

        header .hire-btn {
            font-size: 18px;
            color: #fff;
            background: var(--primary);
            text-transform: none;
            padding: 2px 16px;
            margin-left: 8px;
            border-radius: 2px;
            display: block;
            margin-top: 24px;
            float: right;
            line-height: 28px;
        }

        .ri-grid {
            width: 100%;
            position: relative;
            padding-top: 100px;
        }

        .fullbanner {
            width: 100%;
            height: auto;
        }

        .masthead-slider {
            /* position: absolute; */
            /* top: 0; */
            /* left: -1px; */
            width: 100%;
            z-index: 9;
        }

        .addon_counter {
            width: 280px !important;
            margin-top: 2px !important;
            margin-bottom: 12px !important;
        }

        .status-bar {
            text-align: center;
            margin-top: -25px;
            margin-bottom: -10px;
        }

        .status-bar img {
            max-width: 100%;
        }

        p.important_notice {
            font-size: 12px !important;
            color: #e20b0b !important;
            font-weight: 400 !important;
            line-height: 17px !important;
            margin-top: 22px;
        }

        a.btn-chat {
            display: inline-block;
            letter-spacing: 1px;
            background: #e20b0b;
            line-height: 17px;
            color: #fff;
            text-transform: uppercase;
            padding: 8px 36px;
            margin: 10px 10px;
            font-weight: 600;
            border-radius: 2px;
            font-size: 16px;
        }

        ul.ftr_links {
            display: block;
            text-align: right;
            margin-top: 22px;
        }

        ul.ftr_links li+li a {
            border-left: #fff 1px solid;
            padding-left: 17px;
        }

        ul.ftr_links li {
            display: inline-block;
            margin: 0 10px;
        }

        ul.ftr_links li a {
            color: #fff;
        }

        p.offer_expire_in {
            text-transform: uppercase;
            font-weight: bold;
            color: red;
            margin-bottom: 0;
            margin-top: 12px;
            text-align: center;
        }

        .addon_counter h4,
        .addon_counter span {
            color: #000 !important;
            text-shadow: none !important;
        }

        a.btn-chat span {
            display: block;
            font-size: 13px;
            font-weight: 400;
        }

        text-center {
            text-align: center;
        }

        .header-wrap {
            background: url(./assets/images/Banner-1.jpg) no-repeat left 70px #000;
            background-size: cover;
            padding: 0 0 30px 0;
            position: relative;
            overflow: hidden;
        }

        .time_circles {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .masthead-slider h1 {
            font-size: 45px;
            color: #fff;
            text-shadow: 1px 1px 3px #000000;
            margin-top: 10px;
        }

        .masthead-slider h1 strong {
            font-size: inherit;
            color: var(--secondary);
        }

        .masthead-slider h3 {
            font-size: 22px;
            color: #fff;
            margin-top: 34px;
        }

        .masthead-slider h4 img {
            vertical-align: middle;
            margin-right: 5px;
            margin-top: -2px;
        }

        .masthead-slider h4 span {
            padding-left: 15px;
            display: inline-block;
        }

        .masthead-slider h4 {
            font-size: 14px;
            color: #fff;
            margin-top: 20px;
            line-height: 19px;
            text-transform: uppercase;
        }

        .masthead-slider h1 span {
            color: #fff;
        }

        #typed-cursor {
            opacity: 1;
            -webkit-animation: blink 1.2s infinite;
            -moz-animation: blink 1.2s infinite;
            -ms-animation: blink 1.2s infinite;
            -o-animation: blink 1.2s infinite;
            animation: blink 1.2s infinite;
            color: #ff3015;
            width: 2px;
            height: 33px;
            margin-left: -1px;
            margin-bottom: -12px;
            background: #ff3015;
            letter-spacing: -1px;
            font-weight: 200;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .masthead-slider button,
        .masthead-slider a.activateNow {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5649d1+0,ce2525+49,b72121+100 */
            /* Old browsers */
            /* FF3.6-15 */
            /* Chrome10-25,Safari5.1-6 */
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            /* IE6-9 */
            text-transform: uppercase;
            font-weight: 600;
            border: 1px solid var(--primary);
            color: #fff;
            padding: 14px 55px 11px;
            font-size: 18px;
            margin-top: 20px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            -o-transition: all 0.1s linear;
            -ms-transition: all 0.1s linear;
            transition: all 0.1s linear;
            background: var(--primary);
        }

        .masthead-slider button,
        .masthead-slider a.activateNow {
            text-transform: uppercase;
            font-weight: 600;
            border: 1px solid var(--primary);
            color: #fff;
            padding: 14px 55px 11px;
            font-size: 18px;
            margin-top: 20px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            -o-transition: all 0.1s linear;
            -ms-transition: all 0.1s linear;
            transition: all 0.1s linear;
            background: var(--primary);
        }

        .top-testimonial-col:before {
            content: "";
            position: absolute;
            background: url(../images/testimonial-qoute.jpg);
            width: 68px;
            height: 48px;
            left: 0;
            top: 17px;
        }

        .time_circles>div {
            position: absolute;
            text-align: center;
        }

        .radio-group {
            display: none !important;
        }

        .pd-btm-0 {
            padding-bottom: 0px !important;
        }

        .time_circles>div>h4 {
            margin: 0px;
            padding: 0px;
            text-align: center;
            text-transform: uppercase;
            font-family: "Century Gothic", Arial;
        }

        .time_circles>div>span {
            display: block;
            width: 100%;
            text-align: center;
            font-family: "Century Gothic", Arial;
            font-size: 300%;
            margin-top: 0.4em;
            font-weight: bold;
        }

        div#CountDownTimer {
            width: 350px;
            margin: 0 auto;
            text-shadow: #000 1px 1px 2px;
            color: #fff;
            margin-top: 0;
        }
    </style>
    <div class="header-wrap" bis_skin_checked="1">
        <header>
            <div class="container clearfix" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-xs-6 col-sm-6" bis_skin_checked="1"> <a href="javascript:;" class="logo" title="" bis_skin_checked="1"> <img src="assets/lp/logo-design-service/assets/images/logo.png" alt="Logo" width="150" height="50"> </a> </div>
                    <div class="col-xs-6 col-sm-6" bis_skin_checked="1"> <a href="javascript:;" onclick="order_now_value(this)" class="various hire-btn redbtn popbtn"> Get Free Quote</a>
                        <div class="cta-header" bis_skin_checked="1">
                            <p class="phone"><span class="phone-ico"></span> Toll Free <strong><a href="tel: <?php echo PHONE_HREF ?>" bis_skin_checked="1"><?php echo PHONE ?></a></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="ri-grid" class="ri-grid ri-grid-size-2" bis_skin_checked="1">


            <div id="CountDownTimer" data-timer="5600" data-tc-id="a4d9be49-6968-d76a-0678-938bd7eee2cc" bis_skin_checked="1">
                <div class="time_circles" bis_skin_checked="1"><canvas width="350" height="116"></canvas>
                    <div class="textDiv_Hours" style="top: 41px; left: 0px; width: 116.667px;" bis_skin_checked="1">
                        <h4 style="font-size: 8px; line-height: 8px;">Hours</h4><span style="font-size: 25px; line-height: 8px;">1</span>
                    </div>
                    <div class="textDiv_Minutes" style="top: 41px; left: 117px; width: 116.667px;" bis_skin_checked="1">
                        <h4 style="font-size: 8px; line-height: 8px;">Minutes</h4><span style="font-size: 25px; line-height: 8px;">18</span>
                    </div>
                    <div class="textDiv_Seconds" style="top: 41px; left: 233px; width: 116.667px;" bis_skin_checked="1">
                        <h4 style="font-size: 8px; line-height: 8px;">Seconds</h4><span style="font-size: 25px; line-height: 8px;">31</span>
                    </div>
                </div>
            </div>

            <div class="container text-center masthead-slider" bis_skin_checked="1">
                <h1><span>Activate Your Coupon Now</span><br>& Get Your Logo for Only <strong>$35</strong></h1>

                <h3><span class="typed">Get a Perfectly Designed Logo, from World's # 1 Design Company</span><span id="typed-cursor">|</span></h3>
                <a href="javascript:;" class="btn-theme  mt-3 shadow border-0 popbtn">Activate Now!</a>
                <!-- <button onclick="order_now_value(this)" name="for $35" class="various" data-category="1" data-price="35" fdprocessedid="c4dk5">Activate Now!</button> -->
                <h4>
                    <span><img src="assets/images/check.png" width="25" height="25" alt="4 Logo Concepts">4 Logo Concepts</span>
                    <span><img src="assets/images/check.png" width="25" height="25" alt="Unlimited Revisions">FREE Revisions</span>
                    <span><img src="assets/images/check.png" width="25" height="25" alt="Unlimited Revisions">Dedicated Designer</span>
                    <span><img src="assets/images/check.png" width="25" height="25" alt="Money Back Guarantee">Money Back Guarantee</span>
                </h4>
                <img src="assets/images/rating.png" class="rating" alt="" style="max-width: 100%">
            </div>
        </div>
    </div>
    <!-- <header class="fixed">
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-2 text-left">
                        <a href="javascript:;" class="logo">
                            <img src="assets/lp/logo-design-service/assets/images/logo.png" class="logo-white" alt="">
                            <img src="assets/lp/logo-design-service/assets/images/logo.png" class="logo-dark" alt="">
                        </a>
                    </div>
                    <div class="col-md-10 text-right">
                        <div class="menuWrap">
                            <ul class="menu">
                                <li class="show"><a href="#portfolio" class="text-white">Portfolio</a></li>
                                <li class="show"><a href="#why-us" class="text-white">Why us</a></li>
                                <li class="show"><a href="#process" class="text-white">Process</a></li>
                                <li class="show"><a href="#testimonials" class="text-white">Testimonials</a></li>
                                <li class="show"><a href="#pricing" class="text-white">Pricing</a></li>
                                <li class="show"><a href="#faq" class="text-white">FAQs</a></li>
                                <li class="show"><a href="tel:<?php echo PHONE_HREF ?>" class="btn-theme btn-hover"><i><img src="assets/lp/logo-design-service/assets/images/icons/usa.svg"></i><?php echo PHONE ?>
                                        <span></span></a></li>
                                <li class="show"><a href="#" class="chat btn-theme btn-hover">Chat Now <span></span></a>
                                </li>
                                <li class="mobon">
                                    <div class="pkgHead" style="display:none">
                                        <h5><span>Pkg 1</span><strong>$35</strong></h5>
                                    </div><a class="btn-theme btn-hover popbtn" href="javascript:void(0);">Order Now
                                        <span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!-- <div class="mainBanner hding-1 para-sm relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">

                    <h1>Professional Logo Design <span class="mobile-small">starting from <span class="green">$35</span>
                            only </span></h1>
                    <p class="banner-text mt-3">Make a strong first impression with a custom, attention-grabbing,
                        customer-centric logo design.</p>



                    <ul class="bannerList">

                        <li class="last"><i class="fas fa-check-circle"></i>4 Unique Logo Design Concepts</li>
                        <li class="last"><i class="fas fa-check-circle"></i>5 Revisions</li>
                        <li class="last"><i class="fas fa-check-circle"></i>Free Color Options</li>
                        <li class="last"><i class="fas fa-check-circle"></i>24-48 Hours Turnaround Time</li>
                        <li class="last"><i class="fas fa-check-circle"></i>100% Money Back Guarantee</li>
                    </ul>
                    <ul>
                        <li style="display:none">
                            <div class="pkgHead">
                                <h5><span>For New Businesses</span> <strong>$35</strong></h5>
                                <div class="space"><br><br></div>
                            </div>
                        </li>
                    </ul>
                    <li style="list-style:none">
                        <div class="pkgHead" style="display:none">
                            <h5><span>Pkg 1</span><strong>$35</strong></h5>
                        </div>
                        <div class="btn-grp">
                            <a href="#portfolio" class="btn-theme mt-3 bordered">See Portfolio</a>
                            <a href="javascript:;" class="btn-theme  mt-3 shadow border-0 popbtn " rel="3988c7f88ebcb58c6ce932b957b6f332">Order My Logo Now</a>

                        </div>
                    </li>
                    <div class="trusted mt-3">
                        <img src="assets/lp/logo-design-service/assets/images/trusted-logo.svg" class="mt-3" alt="Trust-Pilot">
                    </div>

                </div>
                <div class="col-lg-4 hidden-web">
                    <div class="img-overlap">
                        <img src="assets/lp/logo-design-service/assets/images/header.png">
                    </div>

                </div>
            </div>

        </div>

    </div> -->
    <div class="horizotal-form" data-form-type="ordernow_form">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Get <span class="orange">70%</span> Off Your First Order</h2>
            </div>
            <form class="form_submission" id="" method="post">
                <input type="hidden" name="get-form" value="order_form">
                <input type="hidden" name="form-type" value="<?php echo $landing_packages[3]['logo-special']['form_id'] ?? ''; ?>">
                <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                <input type="hidden" name="package_name" value="logo-special">
                <input type="hidden" name="package_price" value="$59">
                <input type="hidden" name="landing_page" value="1">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="fld-input ht-auto">
                            <input type="text" id="name1" name="nm" placeholder="Name" required="required" class="form-input">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fld-input ht-auto">
                            <input type="email" id="email1" name="em" placeholder="Email Address" required="required" class="form-input">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fld-input ht-auto">
                            <input type="tel" id="phoneNum3" name="pn" placeholder="Phone Number" required="required" class="form-input">

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fld-btn">

                            <button type="submit">Get My Discount</button>
                            <div class="loader">
                                <img src="images/loader.gif" class="img-fluid" alt="loader">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <div class="form-rating">
                <p class="form-small">98% of customers recommend <span class="orange"><?php echo WEBSITE_NAME ?></span></p>
                <img src="assets/lp/logo-design-service/assets/images/stars.svg" alt="stars">
            </div>
        </div>
    </div>
    <span id="portfolio"></span>
    <section class="portfolioSec para-sm hding-2 pad-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Portfolio</h2>

                    <p class="mt-2">Browse through our impressive unique logo designs by category.</p>
                </div>


            </div>
        </div>
        <div class="space"><br><br></div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters filter-button-group">
                        <ul>
                            <li class="active"><a href="javascript:void(0);" data-filter="*">All</a></li>
                            <li><a href="javascript:void(0);" data-filter="wordmark">Wordmark/Logotype</a></li>
                            <li><a href="javascript:void(0);" data-filter="signature">Signature/Script</a></li>
                            <li><a href="javascript:void(0);" data-filter="brandmark">Brandmark/Symbolic</a></li>
                            <li><a href="javascript:void(0);" data-filter="lettermark">Lettermark/Monograms</a></li>
                            <li><a href="javascript:void(0);" data-filter="emblem">Emblem</a></li>
                            <li><a href="javascript:void(0);" data-filter="mascot">Mascot/Illustrative</a></li>
                            <li><a href="javascript:void(0);" data-filter="3d">3D Type</a></li>
                            <li><a href="javascript:void(0);" data-filter="combination">Combination Marks</a></li>
                        </ul>
                    </div>
                    <div id="container" class="isotope">

                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/1.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/1.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/1.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/1.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/1.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/1.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/1.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/1.webp">
                        </div>



                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/2.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/2.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/2.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/2.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/2.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/2.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/2.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/2.webp">
                        </div>



                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/3.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/3.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/3.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/3.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/3.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/3.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/3.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/3.webp">
                        </div>



                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/4.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/4.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/4.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/4.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/4.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/4.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/4.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/4.webp">
                        </div>



                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/6.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/6.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/6.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/6.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/6.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/6.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/6.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/6.webp">
                        </div>


                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/7.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/7.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/7.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/7.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/7.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/7.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/7.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/7.webp">
                        </div>


                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/8.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/8.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/8.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/8.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/8.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/8.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/8.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/8.webp">
                        </div>


                        <div class="grid-item" data-filter="wordmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/wordmark/9.webp">
                        </div>

                        <div class="grid-item" data-filter="signature">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/signature/9.webp">
                        </div>

                        <div class="grid-item" data-filter="brandmark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/brandmark/9.webp">
                        </div>

                        <div class="grid-item" data-filter="lettermark">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/lettermark/9.webp">
                        </div>

                        <div class="grid-item" data-filter="emblem">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/emblem/9.webp">
                        </div>

                        <div class="grid-item" data-filter="mascot">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/mascot/9.webp">
                        </div>

                        <div class="grid-item" data-filter="3d">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/3d/9.webp">
                        </div>

                        <div class="grid-item" data-filter="combination">
                            <img src="assets/lp/logo-design-service/assets/images/portfolio/combination/9.webp">
                        </div>


                    </div>

                    <div class="isotope-pager" style="padding-top: 15px; text-align:center;"></div>
                </div>


            </div>
        </div>





        <div class="space"><br><br></div>

        <div class="portfolioFooter text-center">
            <ul class="rate">
                <li><a href="#"><i class="fas fa-star"></i></a></li>
                <li><a href="#"><i class="fas fa-star"></i></a></li>
                <li><a href="#"><i class="fas fa-star"></i></a></li>
                <li><a href="#"><i class="fas fa-star"></i></a></li>
                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
            </ul>
            <div class="space"><br><br></div>
            <p>Folks think we're pretty amazing. We're rated 4.8/5 from 1338+ <a href="#">customer reviews</a>.</p>
            <div class="space"><br><br></div>
            <div class="d-md-flex justify-content-center gap-2 ">
                <a href="#pricing" class="btn-theme btn-bordered orange btn-hover">See Pricing <span></span></a>
                <a href="#" class="btn-theme btn-hover loginUp">Let's Work Together <span></span></a>

            </div>
        </div>
    </section>
    <span id="why-us"></span>
    <section class="whychoosesec">
        <div class="container hding-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Why Choose Us?</h2>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-1.png" alt="">
                        <h3>Innovative User-Centric Design</h3>
                        <p>We create unique, customer-centric logo designs using proven design strategies to attract
                            your target audience, and make your brand memorable.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-2.png" alt="">
                        <h3>Industry Expertise</h3>
                        <p>With years of industry experience, our experts know exactly what your customers want. Hence,
                            they design logos that are sure to attract your audience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-3.png" alt="">
                        <h3>Fixed Prices</h3>
                        <p>We offer fixed pricing, no matter how many revisions you have or concepts we test out. We
                            will never ask you to pay any hidden charges.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-4.png" alt="">
                        <h3>Fastest Turnaround Time</h3>
                        <p>We are extremely punctual and understand that no tardiness should be tolerated so rest
                            assured, we always deliver your project on or ahead of schedule.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-5.png" alt="">
                        <h3>Unlimited Revisions</h3>
                        <p>If you’re not satisfied with the final design, we work together till you get the design you
                            love. We ensure 100% client satisfaction and won’t have it any other way.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit">
                        <img src="assets/lp/logo-design-service/assets/images/whyus-6.png" alt="">
                        <h3>100% Money Back Guarantee</h3>
                        <p>We try our best to exceed your expectations with our work. However, if after multiple rounds
                            of revision, you still don’t like the design, you can get your money back. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <span id="process"></span>
    <section class="process-sec sec-pad hding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Our Creative Process</h2>

                    <p class="mt-2">We use a 6-step proven design process to create custom, memorable logos for your
                        brand.</p>



                    <ul class="processcontainer">
                        <li>
                            <div class="processbox">
                                <span>1</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-01.png" alt=""></i>
                                <h4>Research</h4>
                                <p>Our team of experts carries out a thorough study of the target audience and
                                    industrial norms. This helps us create ideas that help in the fulfillment of the
                                    objectives communicated by the client. To ensure best results, we follow an
                                    extensive research regime carried out by experienced professionals.</p>
                            </div>
                        </li>

                        <li>
                            <div class="processbox">
                                <span>2</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-02.png" alt=""></i>
                                <h4>Ideate</h4>
                                <p>Based on the client’s brief and market research, our experts present multiple
                                    concepts for the project. These concepts are further communicated and discussed with
                                    the client to narrow down to one concept. The finalized concept prevails throughout
                                    the process.</p>
                            </div>
                        </li>

                        <li>
                            <div class="processbox">
                                <span>3</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-03.png" alt=""></i>
                                <h4>Create</h4>
                                <p>A draft of the project will be created by our team to provide the insight of the
                                    final project to the client. It can be assessed on the basis of the purpose it has
                                    to fulfill. This will allow our team and the client to make any required changes
                                    which will be implemented in the next stage.</p>
                            </div>
                        </li>

                        <li>
                            <div class="processbox">
                                <span>4</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-04.png" alt=""></i>
                                <h4>Revision</h4>
                                <p>Once you review the product, you can share with our design consultants the tweaks you
                                    want in your design element. We make all the required changes as per your
                                    preference, including font style, color, or design among others. The quantity of
                                    revisions depends on your choice of package.</p>
                            </div>
                        </li>

                        <li>
                            <div class="processbox">
                                <span>5</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-05.png" alt=""></i>
                                <h4>Finalize</h4>
                                <p>After the client’s approval of the draft, we work towards completion of the project
                                    along with the adjustments (if there are any) and will be tested and delivered to
                                    the client in the decided manner. Our process ensures complete customization and
                                    result orientation of the projects.</p>
                            </div>
                        </li>

                        <li>
                            <div class="processbox">
                                <span>6</span>
                                <i><img src="assets/lp/logo-design-service/assets/images/process-06.png" alt=""></i>
                                <h4>Launch</h4>
                                <p>We launch your finalized product according to your preference. Whether making a
                                    website live or delivering the files in all formats requested. Our team would be
                                    more than happy to assist you throughout the project process. We hope you have a
                                    fantastic work experience with us!</p>
                            </div>
                        </li>
                    </ul>

                </div>


            </div>

        </div>
    </section>
    <section class="ctaSec">
        <div class="container">


            <div class="ctaBox">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <h2>Ready to finalize your logo design?</h2>
                        <p class="cta-p">Discuss with our experts today & choose the best package for your business.</p>
                    </div>

                    <div class="col-md-12 text-right ">
                        <div class="d-md-flex gap-2 justify-content-center btn-grp mt-3">
                            <a href="#pricing" class="btn-theme btn-small btn-hover btn-bordered white">See
                                Pricing<span></span></a>
                            <a href="#" class="btn-theme btn-small btn-hover loginUp">Let's Work Together
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padSec hding-2 para-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>The Only Logo Design Agency that is Loved By Thousands of Small & Mid-Level Businesses. </h2>
                    <div class="space"><br><br></div>
                    <p>With over 1000+ clients in more than 40 industries, we’ve created some of the most memorable logo
                        designs. </p>
                </div>
                <div class="col-md-6">
                    <div class="padMdl">
                        <img src="assets/lp/logo-design-service/assets/images/home/1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-none pad-sec hding-2 para-sm">
        <div class="container">
            <div class="row">
                <div class="abtContent">
                    <h2>Get a Unique, Custom Logo that Your Customers will Never Forget! <br> Never let your brand go
                        unnoticed with our custom logo design services.</h2>
                    <br>
                    <p>We have a diverse team of web designers, branding & marketing experts, all working towards the
                        goal of attracting audience to your site and converting them into loyal customers.</p>
                    <div class="space"><br><br></div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="chseWrp">
                        <img src="assets/lp/logo-design-service/assets/images/s2.svg" alt="">
                        <h5>Completely Custom <br>Web Design</h5>
                        <p>With us, you’ll get a bespoke, conversion-focused, user-centric and engaging web design that
                            sets you and your business apart from the competition.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">

                </div>
            </div>
        </div>
    </section>
    <span id="testimonials"></span>
    <section class="testiSec pad-sec hding-3 para-sm">
        <div class="container">
            <div class="align-items-center">
                <ul class="testi-sliderr">

                    <li>
                        <div class="row slider-boxx">
                            <div class="col-lg-7">
                                <div class="">
                                    <img src="assets/lp/logo-design-service/assets/images/home/2.png">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h3><?php echo WEBSITE_NAME ?> is a platform with a<br> good name and a
                                    very good<br>service…</h3>
                                <div class="space"><br><br></div>
                                <p>The designers and the services offered here far exceeded my expectations in every
                                    way. I felt that the service was personalized to me, that the designs really
                                    represented my business and best interests. I chose a design that I could not have
                                    imagined and am completely satisfied with the outcome. I will and have recommended
                                    this service already and continually will! Thank you all!– </p>
                                <div class="space"><br><br></div>
                                <div class="testiProfile">
                                    <span><img src="assets/lp/logo-design-service/assets/images/home/5.png"></span>
                                    <h6>Ashley Nealon, <br>CMO, Celestino Pvt. Ltd </h6>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row slider-boxx">
                            <div class="col-md-7">
                                <div class="">
                                    <img src="assets/lp/logo-design-service/assets/images/home/6.png">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h3>I am very pleased with the way my logo turned out.</h3>
                                <div class="space"><br><br></div>
                                <p>I was a bit confused if they would actually be able to come up to my expectations,
                                    but I was pleasantly surprise at their exceptional work they created for me. I
                                    couldn’t have asked for a better logo design! Keep it up guys… and thanks again!
                                </p>
                                <div class="space"><br><br></div>
                                <div class="testiProfile">
                                    <span><img src="assets/lp/logo-design-service/assets/images/home/8.png"></span>
                                    <h6>Steven D. Henry, <br>Marketing Head</h6>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row slider-boxx">
                            <div class="col-md-7">
                                <div class="">
                                    <img src="assets/lp/logo-design-service/assets/images/home/7.png">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h3>I have had nothing but GREAT client service.</h3>
                                <div class="space"><br><br></div>
                                <p>I have no reservations about recommending <?php echo WEBSITE_NAME ?> to
                                    other nonprofits in my community. Their pricing is reasonable and their associates
                                    are always professional. You can expect great service.
                                </p>
                                <div class="space"><br><br></div>
                                <div class="testiProfile">
                                    <span><img src="assets/lp/logo-design-service/assets/images/home/9.png"></span>
                                    <h6>Barbara, <br>CEO</h6>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <span id="pricing"></span>
    <section class="pricingSec hding-2 para-sm">
        <div class="container">
            <div class="pricingHead">
                <h2>A Price for Every Budget. <br>Choose the Right Plan for You! </h2>
                <div class="space"><br><br></div>
                <!--<p>Receive lots of creative concepts from multiple designers worldwide. You can read more about how it works. We have<Br> 4 fixed packages to suit your budget.</p>-->
                <p>Receive lots of creative concepts from our in-house team of creative designers with a diversified
                    portfolio in every <br>industry. We have several packages that suit every client’s budget and needs
                    to select from.</p>
            </div>
            <div class="space"><br><br></div>
            <div class="row pkgList">
                <?php
                    $packages_to_show = $landing_packages[3] ?? []; 
                ?>
                <?php foreach ($packages_to_show as $slug => $package): ?>  
                    <div class="col-md-4">
                        <div class="pkgBox yellow" id="package1" data-package-box>
                            <div class="pkgHead">
                                <h5><span data-package-name><?php echo $package['title']; ?></span>
                                    <strong><span data-package-price>$<?php echo $package['price']; ?></span>
                                        <sub data-package-old-price>$<?php echo $package['old_price']; ?></sub></strong>
                                </h5>
                            </div>
                            <div class="space"><br><br></div>

                            <div class="pkgMid" data-package-scroll="">
                                <ul class="pkgDtl" data-package-description>
                                    <?php foreach ($package['features'] as $feature): ?>
                                        <?php if (is_array($feature)): ?>
                                            <li class="<?php echo $feature['class']; ?>">
                                                <?php echo $feature['text']; ?>
                                            </li>
                                        <?php else: ?>
                                            <li>
                                                <?php echo $feature; ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                            <div class="space"><br><br></div>

                            <div class="pkgFooter">
                                <a class="pkg-btn order-package" href="/order/index.php?slug=<?php echo $slug; ?>">Order
                                    Now</a>
                                <a href="#" class="pkg-btn btn-bordered orange chat">Talk To An Expert</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-md-4">
                    <div class="pkgBox yellow" data-package-box="">
                        <div class="productSku" style="display: none;">LOGO_PLATINUM_PACKAGE</div>

                        <div class="pkgHead">
                            <h5><span>Logo Aficionado</span>
                                <strong><span>$299</span>
                                    <sub>$997</sub></strong>
                            </h5>
                        </div>
                        <div class="space"><br><br></div>

                        <div class="pkgMid" data-package-scroll="">
                            <ul class="pkgDtl">
                                <li>Unlimited Original Logo Concepts</li>
                                <li>8 Dedicated Logo Designer (Industry Specific)</li>
                                <li>Unlimited Revisions</li>
                                <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                <li>500 Business Cards </li>
                                <li>Email Signature Design</li>
                                <li>With Grey Scale Format</li>
                                <li>Free Icon Design</li>
                                <li>Formats: JPEG, EPS, PSD, PNG, AI, TIFF, SVG</li>
                                <li>24 - 48 Business Hours Turn Around Time</li>
                                <li class="features">MORE FEATURES</li>
                                <li>100% Satisfaction</li>
                                <li>100% Ownership Rights</li>
                                <li>Money Back Guarantee</li>
                                <li>Dedicated Account Manager</li>
                            </ul>

                        </div>
                        <div class="space"><br><br></div>

                        <div class="pkgFooter">
                            <a class="pkg-btn order-package" href="/order-now/order" data-price="299" data-category="1">Order
                                Now</a>
                            <a href="#" class="pkg-btn btn-bordered orange chat">Talk To An Expert</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row pkgList faeturePkg ">
                <div class="col-md-8 featureDetail">


                    <div class="pkgBox yellow" data-package-box="">
                        <div class="productSku" style="display: none;">LOGO_MASCOT_PACKAGE</div>

                        <div class="pkgHead">
                            <h5><span>BUSINESS STARTUP</span>
                                <strong><span>$899</span>
                                    <sub>$1899</sub></strong>
                            </h5>
                        </div>
                        <div class="space"><br><br></div>

                        <div class="pkgMid" data-package-scroll="">
                            <ul class="pkgDtl">
                                <li> Upto 5 Page Customized Website </li>
                                <li> Complete Designing &amp; Deployment </li>
                                <li> Unlimited Logo Design Concepts </li>
                                <li> Unlimited Revisions </li>
                                <li> Complete Stationery Design </li>
                                <li> Social Media Banner Design </li>
                                <li> All File Formats including (AI &amp; EPS) </li>
                                <li> Free Favicon Design </li>
                                <li> Value Added Services </li>
                                <li> Dedicated Account Manager </li>
                                <li> Fastest Turnaround Time </li>
                                <li> 100% Ownership </li>
                                <li> 100% Unique Design Guarantee </li>
                                <li> 100% Satisfaction Guarantee </li>
                                <li> 100% Money Back Guarantee* </li>
                            </ul>

                        </div>
                        <div class="space"><br><br></div>

                        <div class="pkgFooter">
                            <a class="pkg-btn orderNowBtnCombo" data-category="2" data-price="899" href="/order-now/order/">Order
                                Now</a>
                            <a href="#" class="pkg-btn btn-bordered orange chat">Talk To An Expert</a>
                        </div>
                    </div>



                </div>
                <div class="col-md-4">
                    <figure>
                        <img class="m-auto img-fluid" src="assets/lp/logo-design/images/awards.webp" alt="">
                    </figure>
                </div>
            </div>


            <!-- <ul class="tab_links">
            <li data-targetit="box-logo" class="active"><a href="javascript:;">Logo Design</a></li>
            <li data-targetit="box-logoweb"><a href="javascript:;">Logo + Website</a></li>
         </ul>
         <div class="box-logo showfirst">
            <div class="tab-content">
               <ul class="pkgList">

               </ul>
            </div>
         </div> -->



            <div class="box-logoweb" style="display:none;">
                <div class="tab-content">
                    <div class="top-packages ">
                        <div class="combo-slider">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="ctaSec">
        <div class="container">


            <div class="ctaBox">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <h2>Can’t Decide What to Do?</h2>
                        <p class="cta-p">Get Consulted With An Award-Winning Design Agency?</p>
                    </div>

                    <div class="col-md-12 text-right ">
                        <div class="d-md-flex gap-1 justify-content-center btn-grp mt-3">

                            <a href="tel:<?php echo PHONE_HREF ?>" class="btn-theme btn-small btn-hover btn-bordered white">Call Now <span></span></a>
                            <a href="#" class="btn-theme btn-small btn-hover btn-bordered white chat">Talk To An Expert
                                <span></span></a>
                            <a href="#" class="btn-theme btn-small btn-hover loginUp">Let's Work Together
                                <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quoteSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="quoteBox text-center">
                        <i><img src="assets/lp/logo-design-service/assets/images/brand.jpg"></i>
                        <div class="space"><br><br></div>
                        <h5>I love the logo these guys delivered. <mark>It was exactly what I needed for my
                                brand.</mark> The colors & style were not too loud and not too dull. <mark>I showed the
                                logo to some of my colleagues (and also to one of my investors), and they loved
                                it!</mark> They are fantastic. <mark>If you need a memorable logo design,</mark> these
                            guys are <mark>legit.</mark></h5>
                        <div class="space"><br><br><br><br></div>
                        <h6>Barry Ford – Founder, Cocktails'n Canvas </h6>
                    </div>
                </div>
            </div>
            <div class="sapce"><br><br><br><br></div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Trusted by People Globally </h3>
                    <ul class="companies">
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/1.jpg"></a>
                        </li>
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/2.jpg"></a>
                        </li>
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/3.jpg"></a>
                        </li>
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/4.jpg"></a>
                        </li>
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/5.jpg"></a>
                        </li>
                        <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/companies/6.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="featuredSec hding-2">
        <div class="container">
            <div class="featuredHead">
                <h2>We have been featured in...</h2>
            </div>

            <ul class="featuredList">
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/1.jpg"></a>
                </li>
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/2.jpg"></a>
                </li>
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/3.jpg"></a>
                </li>
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/4.jpg"></a>
                </li>
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/5.jpg"></a>
                </li>
                <li><a href="#"><img src="assets/lp/logo-design-service/assets/images/brand/6.jpg"></a>
                </li>
            </ul>

            <div class="featuredCta para">
                <div class="row align-items-center">
                    <div class="col-md-8 text-right">
                        <p>It’s easy to get started. And it’s guaranteed. Two things everyone loves.</p>
                    </div>

                    <div class="col-md-3 text-left">
                        <a href="#" class="btn-theme orange btn-hover chat">Talk To An Expert <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <span id="faq"></span>
    <section class="contactSec hding-2 para-sm " id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Have any Questions?</h2>
                    <div class="sapce"><br><br></div>

                    <div class="faqSec">
                        <div class="faqBox">
                            <div>
                                <h4>Why is logo design important for my brand?</h4>
                                <p><br>Logo design is important for your brand because it grabs attention, makes a
                                    strong first impression, is the foundation of your brand identity, is memorable,
                                    separates you from competition, fosters brand loyalty, and is expected by your
                                    audience.</p>
                            </div>
                        </div>

                        <div class="faqBox">
                            <div>
                                <h4>What if I do not like the logo design I get?</h4>
                                <p><br>
                                    We would try our best to work on your logo design till you end up falling in love
                                    with it, which is the reason we do unlimited revisions. Chances are you would find a
                                    logo design that is just right for your company.
                                    <br>
                                    Normally it never happens with any of our customers, but in case you really do not
                                    like your logo design for some reason, we offer a 100% money back guarantee.

                                </p>
                            </div>
                        </div>

                        <div class="faqBox">
                            <div>
                                <h4>What if I come up with my own ideas for a logo design?</h4>
                                <p><br>
                                    We welcome your inputs on your logo design at all times, and would create design
                                    concepts based on your ideas. We would come up with various alternative suggestions
                                    as well and you can choose the one that is the best for the image of your product or
                                    company.
                                    <br>
                                    Our logo designers are experienced in gauging exactly what you want, and are able to
                                    translate it into an attractive and professional logo design.

                                </p>
                            </div>
                        </div>

                        <div class="faqBox">
                            <div>
                                <h4>Will I be updated on the Logo Design process? </h4>
                                <p><br>
                                    Of course! The moment you sign up with us, you would be able to interact with your
                                    assigned Project Manager who would be your single point of communication with our
                                    organization. They would promptly and effectively intimate you of the status of your
                                    project.
                                    <br>
                                    Our Project Managers are trained to communicate your inputs without any loss to the
                                    team of designers working on your project, and would get in touch with you with any
                                    queries the team may have. You would thus be kept updated on your logo design
                                    project at all times.
                                </p>
                            </div>
                        </div>

                        <div class="faqBox">
                            <div>
                                <h4>Do I have to pay up any other hidden charges for my logo design?</h4>
                                <p><br>With our logo design package, you would get yourself a logo design you will love,
                                    with no hidden charges whatsoever. The total you pay is just the mentioned price for
                                    the corresponding package and nothing more than that. Moreover, we offer 100%
                                    risk-free money back guarantee, so you have nothing to lose when you place an order
                                    with us.</p>
                            </div>
                        </div>

                        <div class="faqBox">
                            <div>
                                <h4>What are the formats in which I can receive my logo design? </h4>
                                <p><br>We deliver all the standard file formats like eps, jpg, tif, png etc. in the
                                    final logo design package. We would be happy to answer any further questions on this
                                    as well. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-form-type="signup_form ">
                    <h2>Get <b class="orange">$70</b> Off On Your First Order</h2>
                    <div class="space"><br><br><br></div>
                    <form class="form_submission" method="post">
                        <input type="hidden" name="get-form" value="order_form">
                        <input type="hidden" name="form-type" value="<?php echo $landing_packages[3]['logo-special']['form_id'] ?? ''; ?>">
                        <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                        <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                        <input type="hidden" name="package_name" value="logo-special">
                        <input type="hidden" name="package_price" value="$59">
                        <input type="hidden" name="landing_page" value="1">
                        <div class="fld-contact">
                            <label>Full Name</label>
                            <input type="text" name="nm" required="" class="form-input">
                        </div>

                        <div class="fld-contact">
                            <label>Business Email</label>
                            <input type="email" name="em" required="" class="form-input">
                        </div>

                        <div class="fld-contact">
                            <label>Phone Number</label>
                            <input type="tel" name="pn" required="" class="form-input">

                        </div>
                        <div class="fld-contact fld-contact-textarea">
                            <label>Message</label>
                            <textarea type="text" name="msg"></textarea>
                        </div>

                        <div class="fld-contact-btn btn-hover">
                            <input type="submit" name="" value="Avail My Discount">
                        </div>
                    </form>
                    <div class="space"><br></div>

                    <div class="formfoter">
                        <h6>
                            Or Contact Our Specialist
                            <!-- <a href="javascript:;"> Kate </a> on -->
                            <a href="tel:<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">

                    </div>
                </div>
            </div>

        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>Copyright © 2025 <?php echo WEBSITE_NAME ?> | All rights reserved.</p>
                </div>
                <div class="col-md-6 text-right darken">
                    <div class="foot-link">
                        <ul>
                            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="/terms-of-service.php"> Terms of Service</a></li>
                        </ul>
                        <img src="assets/lp/logo-design-service/assets/images/pay.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a class="fxdicon callfxd" href="tel:<?php echo PHONE_HREF ?>" title=""><i class="fal fa-phone"></i></a>
    <a class="fxdicon emfxd" href="#" title="" onclick="setButtonURL()"><i class="fal fa-comments-alt"></i></a>

    <div class="overlay"></div>
    <div class="popupmain LoginPopup" id="popuprequest">
        <a id="close1" class="closeico" href="javascript:;" title=""><i></i></a>
        <div class="mmpopup">
            <div class="centercont">

                <h3><span>Professional </span> Logo Design</h3>
                <h4>starting at <span>$35</span> only</h4>
                <p>Get Started with Customized Logo Designs & Deliver Your Brand Message Effectively </p>

            </div>
            <div class="formpop">
                <form class="form_submission" method="post">
                    <input type="hidden" name="get-form" value="order_form">
                    <input type="hidden" name="form-type" value="<?php echo $landing_packages[3]['logo-special']['form_id'] ?? ''; ?>">
                    <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                    <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                    <input type="hidden" name="package_name" value="logo-special">
                    <input type="hidden" name="package_price" value="$59">
                    <input type="hidden" name="landing_page" value="1">
                    <div class="fld-input">
                        <input type="text" id="name" name="nm" placeholder="Name" required="required" class="form-input">
                    </div>
                    <div class="fld-input">
                        <input type="email" id="email" name="em" placeholder="Email Address" required="required" class="form-input">
                    </div>
                    <div class="fld-input">
                        <input type="tel" id="phoneNum2" name="pn" placeholder="Phone Number" required="required" class="form-input">
                    </div>
                    <div class="fld-input">
                        <input type="text" id="" name="msg" placeholder="Name On Logo" required="required" class="form-input">
                    </div>
                    <div class="fld-btn">
                        <button type="submit LoginUp">Get Started Now</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="assets/lp/logo-design-service/assets/js/jquery.js"></script>
    <script src="assets/lp/logo-design-service/assets/js/custom.js"></script>

    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/lazyload-background.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script type="text/javascript" src="../../assets/js/form_submission.js"></script>
    <script type="text/javascript" src="../../assets/js/email.js"></script>
    <script type="text/javascript" src="./assets/js/TimeCircles.js"></script>



    <script>
        $(".order-package").click(function(e) {
            e.preventDefault();

            const box = $(this).closest(".pkgBox");
            const package_name = box.find(".pkgHead h5 > span").text().trim();
            const package_price = $(this).data("price");
            const package_price_html = box.find(".pkgHead h5 > strong span").text().trim();
            const package_old_price = box.find(".pkgHead h5 > strong sub").text().trim();
            const package_description = box.find(".pkgDtl").html().trim();

            // Get package category from data attribute
            localStorage.setItem("package_category", $(this).data("category"));
            localStorage.setItem("package_name", package_name);
            localStorage.setItem("package_price", package_price);
            localStorage.setItem("package_price_html", package_price_html);
            localStorage.setItem("package_old_price", package_old_price);
            localStorage.setItem("package_description", package_description);

            // Redirect to the order page
            window.location.href = $(this).attr("href");
        });
        $(".orderNowBtnCombo").click(function(e) {
            e.preventDefault();

            const box = $(this).closest(".pkgBox");
            const package_name = box.find(".pkgHead h5 > span").text().trim();
            const package_price = $(this).data("price");
            const package_price_html = box.find(".pkgHead h5 > strong span").text().trim();
            const package_old_price = box.find(".pkgHead h5 > strong sub").text().trim();
            const package_description = box.find(".pkgDtl").html().trim();



            localStorage.setItem("package_category", $(this).data("category"));
            localStorage.setItem("package_name", package_name);
            localStorage.setItem("package_price", package_price);
            localStorage.setItem("package_price_html", package_price_html);
            localStorage.setItem("package_old_price", package_old_price);
            localStorage.setItem("package_description", package_description);


            window.location.href = $(this).attr("href");
        });
    </script>
    <script>
        $(document).ready(function() {

            var itemSelector = '.grid-item';

            var $container = $('#container').isotope({
                itemSelector: itemSelector,
                masonry: {
                    columnWidth: itemSelector,
                    isFitWidth: true
                }
            });

            //Ascending order
            var responsiveIsotope = [
                [480, 8],
                [720, 9]
            ];

            var itemsPerPageDefault = 12;
            var itemsPerPage = defineItemsPerPage();
            var currentNumberPages = 1;
            var currentPage = 1;
            var currentFilter = '*';
            var filterAtribute = 'data-filter';
            var pageAtribute = 'data-page';
            var pagerClass = 'isotope-pager';

            function changeFilter(selector) {
                $container.isotope({
                    filter: selector
                });
            }


            function goToPage(n) {
                currentPage = n;

                var selector = itemSelector;
                selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
                selector += '[' + pageAtribute + '="' + currentPage + '"]';

                changeFilter(selector);
            }

            function defineItemsPerPage() {
                var pages = itemsPerPageDefault;

                for (var i = 0; i < responsiveIsotope.length; i++) {
                    if ($(window).width() <= responsiveIsotope[i][0]) {
                        pages = responsiveIsotope[i][1];
                        break;
                    }



                }

                return pages;
            }

            function setPagination() {

                var SettingsPagesOnItems = function() {

                    var itemsLength = $container.children(itemSelector).length;

                    var pages = Math.ceil(itemsLength / itemsPerPage);
                    var item = 1;
                    var page = 1;
                    var selector = itemSelector;
                    selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter +
                        '"]' : '';

                    $container.children(selector).each(function() {
                        if (item > itemsPerPage) {
                            page++;
                            item = 1;
                        }
                        $(this).attr(pageAtribute, page);
                        item++;
                    });

                    currentNumberPages = page;

                }();

                var CreatePagers = function() {

                    var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass +
                        '"></div>') : $('.' + pagerClass);

                    $isotopePager.html('');

                    for (var i = 0; i < currentNumberPages; i++) {
                        var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute +
                            '="' + (i + 1) + '"></a>');
                        $pager.html(i + 1);

                        $pager.click(function() {
                            var page = $(this).eq(0).attr(pageAtribute);
                            goToPage(page);
                        });

                        $pager.appendTo($isotopePager);
                    }

                    $container.after($isotopePager);

                }();

            }

            setPagination();
            goToPage(1);

            //Adicionando Event de Click para as categorias
            $('.filters a').click(function() {
                var filter = $(this).attr(filterAtribute);
                currentFilter = filter;

                setPagination();
                goToPage(1);


            });

            //Evento Responsivo
            $(window).resize(function() {
                itemsPerPage = defineItemsPerPage();
                setPagination();
            });



        });



        $(document).ready(function() {

            // filter items on button click
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('.grid').isotope({
                    filter: filterValue
                });
                $('.filter-button-group li').removeClass('active');
                $(this).addClass('active');
            });
        })


        $(document).ready(function() {

            // filter items on button click
            $('.isotope-pager').on('click', 'a', function() {
                var filterValue = $(this).attr('data-page');

                $('.isotope-pager a').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <!-- <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 19142670;
        window.__lc.integration_name = "manual_onboarding";
        window.__lc.product_name = "livechat";;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))

        function setButtonURL() {
            LiveChatWidget.call("maximize");
        }
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/19142670/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> -->
    <!-- End of LiveChat code -->
</body>

</html>