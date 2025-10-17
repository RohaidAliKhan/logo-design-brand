<?php
include(__DIR__ . '/../../includes/config.php');
?>
<?php include '../../includes/packages-data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Affordable Logo Design Company | <?php echo WEBSITE_NAME ?> </title>
    <meta name="description" content="">


    <link rel="icon" href="assets/lp/logo-design/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style type="text/css">
        @font-face {
            font-family: Pathway Gothic One;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/pathway-gothic-one/5.0.11/latin/400/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Pathway Gothic One;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/pathway-gothic-one/5.0.11/latin-ext/400/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/300/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/300/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/300/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/300/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 300;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/300/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/400/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/400/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/400/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/400/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/400/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/500/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/500/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/500/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/500/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/500/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/600/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/600/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/600/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/600/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/600/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/700/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/700/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/700/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/700/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/700/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 900;
            src: url(/cf-fonts/s/montserrat/5.0.16/vietnamese/900/normal.woff2);
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 900;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic-ext/900/normal.woff2);
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 900;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin/900/normal.woff2);
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 900;
            src: url(/cf-fonts/s/montserrat/5.0.16/latin-ext/900/normal.woff2);
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            font-display: swap;
        }

        @font-face {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 900;
            src: url(/cf-fonts/s/montserrat/5.0.16/cyrillic/900/normal.woff2);
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            font-display: swap;
        }
    </style>
    <link href="assets/lp/logo-design/css/animate.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/font-awesome.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/owl.theme.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/style.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/style-2.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/dodecahedron.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/submarine.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/responsive.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/ionicons.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/lp/logo-design/css/travel-circle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16896663186"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16896663186');
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

<body id="page-top" class="">
    <section class="banner">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 logo">
                        <a href="javascript:;"><img loading="lazy" src="assets/lp/logo-design/images/logo.png" width="38%" alt=""></a>
                    </div>
                    <div class="col-md-7">
                        <ul class="head-cta">
                            <li> <a href="javascript:;" onclick="setButtonURL();" class="chat"><i class="fa fa-commenting-o" aria-hidden="true"></i> LIVE
                                    CHAT</a> </li>
                            <li><a href="tel:<?php echo PHONE_HREF ?>"><i class="fa fa-phone" aria-hidden="true"></i>
                                    <?php echo PHONE ?></a>
                            </li>
                            <li class="cta-order-btn "> <a href="javascript:;" data-toggle="modal" data-target="#exampleModalCenter">Order
                                    Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo-cards clearfix">
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-1.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-1-1.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-2.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-2-2.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-3.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-3-3.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-4.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-4-4.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-5.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-5-5.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-6.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-6-6.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-7.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-7-7.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-8.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-8-8.webp" alt=""></div>
                            </div>
                        </div>
                        <div>
                            <div class="logo-card">
                                <div class="front"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-9.webp" alt=""></div>
                                <div class="back"><img loading="lazy" src="assets/lp/logo-design/images/bn-flip-logo-9-9.webp" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 header-content">
                    <h2><span>AWARD WINNING LOGO SERVICES</span> BY WORLD'S # 1 DESIGN AGENCY</h2>
                    <p>Want to say more with less? Brand recognition is just a custom logo design away</p>
                    <div class="slideform" id="slideforma" data-form-type="ordernow_form">
                        <h2 class="h-title">PRICE STARTING FROM <span>$35</span></h2>
                        <h3><span><span style="color:#ffc500">70% OFF </span> LIMITED TIME OFFER</span>
                        </h3>

                        <form class="form_submission" method="post">
                            <input type="hidden" name="get-form" value="order_form">
                            <input type="hidden" name="form-type" value="<?php echo $landing_packages[5]['logo-special']['form_id'] ?? ''; ?>">
                            <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                            <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                            <input type="hidden" name="package_name" value="logo-special">
                            <input type="hidden" name="package_price" value="$59">
                            <input type="hidden" name="landing_page" value="1">
                            <div class="name">
                                <input type="text" name="cn" placeholder="Name" class="iecn alphanumeric form-input" required>
                            </div>
                            <div class="email">
                                <input type="email" name="em" placeholder="Email" class="email email_slider_form form-input" required>
                            </div>
                            <div class="selectservice">
                                <select class="countrylist form-input" name="country">
                                    <option value="Country" disabled="" selected="" class="select-country">Select Your
                                        Country
                                    </option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's
                                        Republic of
                                    </option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="phone">
                                <input type="tel" name="pn" placeholder="Phone Number" class="number form-input" minlength="7" required>
                            </div>

                            <input type="submit" name="cta" class="btn-orangedark" value="Get Started">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="who-we-are">
        <div class="container">
            <div class="row top-heading_row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="section_title">
                        <h2> LOGO TYPES </h2>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row tabs_row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#tab1">Iconic <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab2">Illustrative <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab3">Wordmark <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab4">3D <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab5">Abstract <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab6">Flat <span>Design</span></a></li>
                        <li><a data-toggle="tab" href="#tab7">Realistic <span>Design</span></a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img8.webp" class="img-responsive center-block lazy" alt="image" style="margin-top:10px;">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Iconic Design </h3>
                                        <p> Our experts create iconic logo designs that are versatile and memorable. Our
                                            iconic logos will help you boost your brand affinity. It will reflect your
                                            brand culture and goals. Iconic logos are self-explanatory
                                            and team <span class="text-grad"><b><?php echo WEBSITE_NAME ?> </b> </span> love to
                                            experiment with new techniques and color coding so that your logo becomes a
                                            talking symbol of your brand.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal" onclick="order_now_value(this)" name="for $19" data-target="#exampleModalCenter"
                                            class="btn grad-color read-more-info ">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/computer.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Illustrative Design </h3>
                                        <p> If you want to create a work of art illustrative logos are the best fit as
                                            it contains intricate artwork. It will act as your brand's trendy and
                                            contemporary image and keep the viewers' attention longer than the
                                            traditional logo design. We at <span class="text-grad"><b><?php echo WEBSITE_NAME ?></b></span> use the latest tools and technology to create a
                                            remarkable illustrative logo for your brand.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img9.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Wordmark Design </h3>
                                        <p> Create your professional wordmark logo with <span class="text-grad"><b><?php echo WEBSITE_NAME ?></b></span>. It is a pure form of logo and a text-only
                                            representation of your brand, making it a good choice for start-ups and
                                            accelerating businesses seeking a static and no-hassle solution. We allow
                                            full customization to create your own wordmark logo design to enhance your
                                            brand visibility.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img10.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> 3D Design </h3>
                                        <p> If you re looking for a modern style logo our 3-Dimensional logo designs
                                            will serve you best. We specialize in making 3D logos that attractively
                                            reflect your brand. With our abundant 3D logo designs, enjoy the rewards of
                                            attracting many clients as your audience will be able to experience the look
                                            and feel of your business. Ping us now, and let s add some dimensions to
                                            your boring logo designs.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img17.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Abstract Design </h3>
                                        <p> Abstract logo designs, also known as smart logos, is a mix of pictures,
                                            typography, and shapes. A lot of organizations today use abstract logos for
                                            their businesses. They are usually used as a conceptual strategy to
                                            represent your business idea. It also allows you to exhibit different
                                            functions of your company. Join hands with <span class="text-grad"><b><?php echo WEBSITE_NAME ?></b> </span> to create your abstract logo that reflects an
                                            unclear vision of your business so that you can play safely in your
                                            business operations.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img11.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Flat Design </h3>
                                        <p> A flat or minimalistic logo design is a clean and crisp image-bearing bright
                                            colors and two-dimensional illustrations. <span class="text-grad"><b><?php echo WEBSITE_NAME ?></b> </span> helps you create simple yet innovative flat
                                            logo designs that are classic and cluster free. We ensure that your flat
                                            designs combine solid, vivid colors, concise text and to-the-point.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab7" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-6"> <img loading="lazy" src="assets/lp/logo-design/images/logo-design/site-img12.webp" alt="image" class="img-responsive center-block lazy"> </div>
                                <div class="col-md-6">
                                    <div class="tab-contents">
                                        <h3> Realistic Design </h3>
                                        <p> Realistic designs are the enchanted graphical representations of your
                                            business. We help you create a logo design that incorporates your brand
                                            roots. Whether you are a start up, medium enterprise or a large-scale
                                            business - Realistic logos are for everyone who wishes to build a strong
                                            brand image.
                                        </p>
                                        <a href="javascript:;" data-toggle="modal">Let's Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-sec">
        <img loading="lazy" src="assets/lp/logo-design/images/client-bg.webp" class="shape">
        <div class="container">
            <h1 class="wow fadeInUp">We are serving <span>2000+</span> Clients</h1>
            <p class="wow fadeInUp">We create experiences that transform brands & grow businesses. We have enriched some
                of the biggest brands and our partnerships with them have caused the creation of some outstanding
                outcomes.
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="mission-tab">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="logo">
                                <div class="tabs logo logo-portfolio">
                                    <ul class="nav nav-tabs top-tabs web-tabs" id="interest_tabs">
                                        <li class="active"><a href="#illus-logo" data-toggle="tab" aria-expanded="false">
                                                Illustrative <span>Design</span></a></li>
                                        <li class=""><a href="#mascot-logo" data-toggle="tab" aria-expanded="false">
                                                Mascot <span>Design</span></a>
                                        </li>
                                        <li class=""><a href="#abs-logo" data-toggle="tab" aria-expanded="false">Abstract
                                                <span>Design</span></a></li>
                                        <li class=""><a href="#icon-logo" data-toggle="tab" aria-expanded="true">Iconic
                                                <span>Design</span></a>
                                        </li>
                                        <li class=""><a href="#flat-logo" data-toggle="tab" aria-expanded="false">Flat
                                                <span>Design</span> </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="illus-logo" class="tab-pane active">
                                            <div class="row mr">
                                                <div class="col-md-4 col-sm-6 col-xs-12 ">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/1.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/1.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/2.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/2.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/3.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/3.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/4.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/4.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/5.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/5.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/6.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/6.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/illustrative/7.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/illustrative/7.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="mascot-logo" class="tab-pane">
                                            <div class="row mr">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/1.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/1.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/2.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/2.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/3.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/3.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/4.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/4.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/5.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/5.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/6.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/6.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/7.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/7.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/mascots/8.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/mascots/8.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="abs-logo" class="tab-pane">
                                            <div class="row mr">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/1.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/1.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/2.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/2.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/3.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/3.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/4.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/4.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/5.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/5.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/6.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/6.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/7.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/7.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/abstract/8.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/abstract/8.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div id="icon-logo" class="tab-pane">
                                            <div class="row mr">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/1.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/1.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/2.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/2.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/3.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/3.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/4.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/4.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/5.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/5.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/6.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/6.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/iconic/7.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/iconic/7.webp" class="fancybox-pop">
                                                                            <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div id="flat-logo" class="tab-pane">
                                            <div class="row mr">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/1.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/1.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/2.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/2.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/3.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/3.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/4.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/4.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/5.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/5.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/6.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/6.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/7.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/7.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <div class="wow fadeInLeft ">
                                                        <div class="hovereffect-portfolio">
                                                            <img loading="lazy" src="assets/lp/logo-design/images/logo-design/flat/8.webp" alt="image" class="img-responsive center-block">
                                                            <div class="overlayPort">
                                                                <ul class="info text-center list-inline">
                                                                    <li class="last">
                                                                        <a href="assets/lp/logo-design/images/logo-design/flat/8.webp" class="fancybox-pop"> <i class="fa fa-search"></i> </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-logo wow fadeInRight animated">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInLeft animated">
                    <h2>LET S START DISCUSSION!</h2>
                    <p>Just fill out the signup form and one of our team members will get back to you.</p>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="chat column wow fadeInUp animated">
                        <img loading="lazy" src="assets/lp/logo-design/images/chat-icon.webp">
                        <p><a href="#" onclick="setButtonURL();">Live Chat<br>
                                With Us</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="chat column wow fadeInUp animated">
                        <img loading="lazy" src="assets/lp/logo-design/images/call-icon.webp">
                        <p>Call Us:<br>
                            <a href="tel:<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="chat column wow fadeInUp animated">
                        <p class="btn-req "><a href="javascript:;" onclick="order_now_value(this)" name="for $19" data-toggle="modal" data-target="#SignupModal">Request Info</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="packages portfolio-sec">
        <img loading="lazy" src="assets/lp/logo-design/images/packages-offer.webp" class="shape">
        <div class="container">
            <div class="row text-center">
                <div class="col-m-12">
                    <h1 class="wow fadeInUp">Logo Packages We Offer</h1>
                    <p class="wow fadeInUp"><?php echo WEBSITE_NAME ?>. believes in delivering distinctive services in competitive
                        price models. We have some attractive packages specially crafted for every service offered to
                        offer the finest quality within the budget.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mission-tab ">
                        <div class="tabs logo-pricing">
                            <ul class="nav nav-tabs top-tabs web-tabs" id="interest_tabs">
                            </ul>
                            <div class="tab-content">

                                <div id="illus-pkg" class="tab-pane active">
                                    <div class="row mr">
                                        <?php
                                        $packages_to_show = $landing_packages[5] ?? []; 
                                        ?>
                                        <?php foreach ($packages_to_show as $slug => $package): ?>  
                                            <div class="col-md-4 mt-5">
                                                <div class="pricing-box one" data-package-box>
                                                    <div class="collapse-top collapsed" data-target="#one" aria-expanded="true">
                                                        <div class="price-box">
                                                            <p><strong class="text-uppercase" data-package-name><?php echo $package['title']; ?></strong><br>

                                                            <h6><span data-package-price>$<?php echo $package['price']; ?></span> <strike data-package-old-price> $<?php echo $package['old_price']; ?></strike></h6>

                                                        </div>
                                                    </div>
                                                    <div class="collapse-div" id="one">
                                                        <div class="package-list" data-package-scroll="">
                                                            <ul data-package-description>
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
                                                    </div>

                                                    <div class="call-to">
                                                        <div>
                                                            <p>Start Your Work</p>
                                                            <p><a href="tel:<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a></p>
                                                        </div>
                                                        <div>
                                                            <p>For More Detail</p>
                                                            <p><a href="javascript:;" class="chat">Chat With us</a></p>
                                                        </div>
                                                    </div>
                                                    <a class="order_now order-package" href="/order/index.php?slug=<?php echo $slug; ?>" data-category="1" data-price="35">Order Now</a>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>


                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-packages ">
                <div class="combo-slider owl-theme">
                    <div class="item">
                        <div class="bg-secondary">
                            <div class="productSku" style="display: none;">
                                LOGO_MASCOT_PACKAGE
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        BUSINESS STARTUP
                                    </h2>
                                    <div class="combo-list-style" data-package-scroll="">
                                        <ul>
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
                                </div>
                                <div class="col-md-4 has-pad">
                                    <div class="final">
                                        <h3 class="ult-cut-prc"><span class="inner">
                                                $
                                                1899
                                            </span></h3>
                                        <h1>
                                            $
                                            799
                                        </h1>
                                        <a class="dft-btn seller_order cred-btn orderNowBtnCombo" data-category="2" data-price="799" href="/order-now/order/">Order Now <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <figure>
                                        <img class="m-auto img-fluid" src="assets/lp/logo-design/images/awards.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-secondary">
                            <div class="productSku" style="display: none;">
                                LOGO_3D_PACKAGE
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        ECOMMERCE STARTUP
                                    </h2>
                                    <div class="combo-list-style" data-package-scroll="">
                                        <ul>
                                            <li>5 Pages Website (Wordpress)</li>
                                            <li>UNLIMITED Logo Design Concepts</li>
                                            <li>Creative Design Team (8)</li>
                                            <li>Dedicated Development Team (2)</li>
                                            <li>UNLIMITED Revisions</li>
                                            <li><span>FREE</span> Business Card Design</li>
                                            <li><span>FREE</span> Letterhead Design</li>
                                            <li><span>FREE</span> Envelope Design</li>
                                            <li><span>FREE</span> MS Word Letterhead</li>
                                            <li><span>FREE</span> Icon Design</li>
                                            <li><span>FREE</span> Banner Design</li>
                                            <li><span>FREE</span> Email Signature</li>
                                            <li>Vector Formats (AI, PSD, EPS, PNG, GIF, JPG, PDF)</li>
                                            <li>Ownership Rights</li>
                                            <li>Satisfaction Guaranteed</li>
                                            <li>Unique Design Guaranteed</li>
                                            <li>Money Back Guarantee*</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 has-pad">
                                    <div class="final">
                                        <h3 class="ult-cut-prc"><span class="inner">
                                                $
                                                3330
                                            </span></h3>
                                        <h1>
                                            $
                                            1499
                                        </h1>
                                        <a class="dft-btn seller_order cred-btn orderNowBtnCombo" data-category="2" data-price="1499" href="/order-now/order">Order Now <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <figure>
                                        <img class="m-auto img-fluid" src="assets/lp/logo-design/images/awards.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <div class="clearfix"></div>
    <div id="clients" class="row-container light bg-scroll" style="">
        <div class="waves-container container">
            <div class="row">
                <div class="row">
                    <div class="tw-element waves-heading center col-md-12" style="">
                        <h3 class="heading-title">Satisfied Clients</h3>
                        <span class="title-seperator"></span>
                        <p> Take a look at what our clients have to say about us. There always a reason that so many
                            clients trust us to grow their business.
                        </p>
                    </div>
                </div>
                <div class="waves-carousel owl-theme">
                    <div class=" item">
                        <div class="testimonial-item clearfix">
                            <div class="testimonial-thumb"> <img loading="lazy" alt="" src="assets/lp/logo-design/images/man-avatar1.webp">
                            </div>
                            <div class="testimonial-content">
                                <div class="testimonial-content-inner"> There is nothing better than a design agency
                                    that listens to your needs and pays attention to details. Thank you <?php echo WEBSITE_NAME ?>.
                                    for a great website.
                                </div>
                                <a href="#" class="testimonial-author"><span> - Anthony Vaughan</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=" item">
                        <div class="testimonial-item clearfix">
                            <div class="testimonial-thumb"> <img loading="lazy" alt="" src="assets/lp/logo-design/images/man-avatar2.webp">
                            </div>
                            <div class="testimonial-content">
                                <div class="testimonial-content-inner"> Top-notch service, and marvelous designs are
                                    what they stand for. I have become a fan of <?php echo WEBSITE_NAME ?>. Cheers!
                                </div>
                                <a href="#" class="testimonial-author"><span> - Rachel Miller</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=" item">
                        <div class="testimonial-item clearfix">
                            <div class="testimonial-thumb"> <img loading="lazy" alt="" src="assets/lp/logo-design/images/man-avatar3.webp">
                            </div>
                            <div class="testimonial-content">
                                <div class="testimonial-content-inner"> Creativity is truly personified. We hired Logo
                                    Verse Inctwo years back for the first time and they have got us coming back since
                                    then.
                                </div>
                                <a href="#" class="testimonial-author"> <span> - Graham Clayton</span></a>
                            </div>
                        </div>
                    </div>
                    <div class=" item">
                        <div class="testimonial-item clearfix">
                            <div class="testimonial-thumb"> <img loading="lazy" alt="" src="assets/lp/logo-design/images/man-avatar4.webp">
                            </div>
                            <div class="testimonial-content">
                                <div class="testimonial-content-inner"> If there is one thing that keeps me working with
                                    <?php echo WEBSITE_NAME ?>. their team of qualified designers never stops raising the bar.
                                </div>
                                <a href="#" class="testimonial-author"><span> - Ethan Bridges</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section id="contact-sec">
        <div class="container">
            <h2 class="text-center wow fadeInUp" style="visibility: hidden; animation-name: none;">Extraordinary
                Projects With Exemplary Partners
            </h2>
            <h1 class="text-center text-grad wow fadeInUp" style="visibility: hidden; animation-name: none;">Together
            </h1>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="contact_home wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="conform" id="cform" data-form-type="ordernow_form">
                            <form class="form_submission" method="post">
                                <input type="hidden" name="get-form" value="order_form">
                                <input type="hidden" name="form-type" value="<?php echo $landing_packages[5]['logo-special']['form_id'] ?? ''; ?>">
                                <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                                <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                                <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                                <input type="hidden" name="package_name" value="logo-special">
                                <input type="hidden" name="package_price" value="$59">
                                <input type="hidden" name="landing_page" value="1">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="field">
                                            <input type="text" name="cn" placeholder="Name*" maxlength="70" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="field">
                                            <input type="email" name="em" class="email" placeholder="Email*" maxlength="100" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="field number">
                                            <input name="pn" class="required number" type="tel" value="" placeholder="Phone Number*" required="" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="field">
                                            <select name="customers_meta[service]" class="intrested">
                                                <option value="-1">I am Interested in</option>
                                                <option value="Logo Design">Logo Design</option>
                                                <option value="Brand Development">Brand Development</option>
                                                <option value="Web Design &amp; Development">Web Design &amp;
                                                    Development
                                                </option>
                                                <option value="App Design &amp; Development">App Design &amp;
                                                    Development
                                                </option>
                                                <option value="Back-End Development">Back-End Development</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Marketing Collaterals">Marketing Collaterals</option>
                                                <option value="Motion Graphics">Motion Graphics</option>
                                                <option value="Website Management">Website Management</option>
                                                <option value="Domain Registration">Domain Registration</option>
                                                <option value="Creative Copywriting">Creative Copywriting</option>
                                                <option value="2D &amp; 3D Illustration">2D &amp; 3D Illustration
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="field">
                                            <textarea class="required" name="msg" placeholder="Any Other Description" maxlength="254" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center col-xs-12 agre-buton">
                                        <input type="submit" name="cta" value="Submit" class="grad-color">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="container">
            <h2>Have a project for us? <a href="javascript:;" onclick="setButtonURL();" class="order_button"><span>Get
                        in touch</span></a>
            </h2>
            <ul>
                <li class="cta-tollfree first"><a href="tel: <?php echo PHONE_HREF ?>"> <?php echo PHONE ?></a></li>
                <li class="cta-email"><a href="mailto:<?php echo EMAIL ?>"><span><?php echo EMAIL ?></span></a></li>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container">
            <ul>
                <li class="first"><a href="/privacy-policy.php">Privacy Policy</a></li>
                <li class="last"><a href="/terms-of-service.php">Terms &amp; Conditions</a></li>
            </ul>
            <p class="diclaimer">Disclaimer: <br> <?php echo WEBSITE_NAME ?> does not have any affiliation with any domain company
                mentioned on this page to offer such promotion. All other company names, brand names, trademarks and
                logos mentioned on this page are the property of their
                respective owners and do not constitute or imply endorsement, sponsorship or recommendation thereof or
                by <?php echo WEBSITE_NAME ?>. of the respective trademark owners.
            </p>
        </div>
    </footer>


    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="assets/lp/logo-design/js/jquery-2.1.3.min.js"></script>
    <script src="assets/lp/logo-design/js/bootstrap.min.js"></script>
    <script src="assets/lp/logo-design/js/main.js"></script>
    <script src="assets/lp/logo-design/js/jquery.easing.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.sticky.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.stellar.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.inview.min.js"></script>
    <script src="assets/lp/logo-design/js/wow.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.countTo.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.shuffle.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.BlackAndWhite.min.js"></script>
    <script src="assets/lp/logo-design/js/owl.carousel.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/lp/logo-design/js/scripts.js"></script>
    <script src="assets/lp/logo-design/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/lp/logo-design/js/jquery.fancybox.js"></script>
    <style>
        .balti_popup {
            width: 450px;
            border-radius: 23px;
            padding: 30px;
            overflow: visible;
            border-bottom: #0467ff 5px solid;
            background: white;
            font-family: 'Poppins', sans-serif !important;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal {
            background: rgba(0, 0, 0, 0.6);
        }

        .balti_popup h2 {
            font-size: 28px;
            color: #000000;
            font-weight: 900;
            padding-left: 15px;
            border-left: #0467ff 6px solid;
            margin-bottom: 12px;
            line-height: 35px;
        }

        .balti_popup h2+p {
            line-height: 19px;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .balti_popup ul {
            margin: 0;
            padding: 0;
        }

        .balti_popup ul li {
            text-align: left;
            position: relative;
            width: 100%;
            margin: 8px 0px;
            display: inline-block;
        }

        .balti_popup ul li i {
            position: absolute;
            top: 15px;
            left: 14px;
            color: #0467ff;
        }

        .balti_popup ul li input[type="text"],
        .balti_popup ul li input[type="email"],
        .balti_popup ul li input[type="number"],
        .balti_popup ul li input[type="tel"],
        .balti_popup ul li textarea {
            background: #ffffff;
            border: #dedede 2px solid;
            padding: 10px 10px 10px 34px;
            width: 100%;
            border-radius: 6px;
            font-size: 14px;
            color: #000;
            box-shadow: none !important;
            outline: none 0px !important;
        }

        .balti_popup ul li textarea {
            height: 161px;
        }

        .balti_popup ul li input[type="text"]:focus,
        .balti_popup ul li input[type="email"]:focus,
        .balti_popup ul li textarea:focus {
            border: 2px solid #0467ff;
        }

        .balti_popup .pd-right-0 {
            padding-right: 0px !important;
        }

        .balti_popup ul li input[type="submit"] {
            background: #0467ff;
            color: #fff;
            font-size: 18px;
            border: 2px solid #0467ff;
            text-transform: uppercase;
            font-weight: 600;
            padding: 9px 10px;
            letter-spacing: 1px;
            outline: 0px none;
            border-radius: 50px;
            width: 195px;
            margin: 0 auto;
            text-align: center;
            cursor: pointer;
            display: block;
            width: 100%;
            transition: .1s linear;
        }

        .balti_popup ul li input[type="submit"]:hover {
            background: white;
            border: 2px solid #0467ff;
            color: #0467ff;
        }

        .balti_popup .fancybox-close-small {
            position: absolute;
            top: 0;
            right: 0;
            width: 44px;
            height: 44px;
            padding: 0;
            margin: 0;
            border: 0;
            border-radius: 0;
            outline: none;
            background: transparent;
            z-index: 10;
            outline: none;
            cursor: pointer;
        }

        .balti_popup .fancybox-close-small {
            border: #0467ff 3px solid;
            background: #fff;
            border-radius: 72px;
            text-align: center;
            box-shadow: #000 0 0 10px;
            right: -14px;
            top: -13px;
            overflow: visible;
            outline: none !important;
        }

        .balti_popup .fancybox-close-small:hover {
            background-color: #0467ff;
            z-index: 11;
        }

        .balti_popup .fancybox-close-small:after {
            position: absolute;
            top: 2px;
            right: 5px;
            width: 30px;
            height: 30px;
            font: 20px/30px Arial, Helvetica Neue, Helvetica, sans-serif;
            color: #888;
            font-weight: 300;
            text-align: center;
            border-radius: 50%;
            border-width: 0;
            transition: background .2s;
            box-sizing: border-box;
            z-index: 2;
            content: "x";
            color: #0467ff;
            font-size: 25px;
            right: 4px;
            transition: .1s linear;
        }

        .balti_popup .fancybox-close-small:hover:after {
            color: white !important;
        }

        .balti_popup button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        @media screen and (max-width: 786px) {
            .balti_popup {
                width: 85%;
                padding: 20px;
            }

            .balti_popup .pd-right-0 {
                padding-right: 15px !important;
            }

            .balti_popup ul li textarea {
                height: 85px;
            }
        }

        .modal-backdrop {
            display: none !important;
        }
    </style>
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div style="display: inline-block;" class="balti_popup" id="balti_popup">
            <h2>We are here to help!</h2>
            <p>Sign up Now To Avail 70% Discount on Your Logo Design</p>
            <div data-form-type="ordernow_form">
                <form class="validate-balti_popup form_submission">
                    <input type="hidden" name="get-form" value="order_form">
                    <input type="hidden" name="form-type" value="<?php echo $landing_packages[5]['logo-special']['form_id'] ?? ''; ?>">
                    <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                    <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                    <input type="hidden" name="package_name" value="logo-special">
                    <input type="hidden" name="package_price" value="$59">
                    <input type="hidden" name="landing_page" value="1">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" class="required form-input" placeholder="Full Name *" name="cn" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 pd-right-0">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" class="required email form-input" placeholder="Email Address *" name="em" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="tel" class="required number form-input" minlength="10" placeholder="Phone No. *" name="pn" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    <textarea name="msg" class="required form-input" required="required" placeholder="To help us understand better enter a brief description of your project."></textarea>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <input type="submit" name="cta" value="Submit">

                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <button data-fancybox-close="" data-dismiss="modal" class="fancybox-close-small close"></button>
        </div>
    </div>


    <div class="modal" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div style="display: inline-block;" class="balti_popup" id="balti_popup">
            <h2>Hold on a sec! Want an extra discount on top?</h2>
            <p>Sign up now and score an exclusive deal just for you!</p>
            <div data-form-type="ordernow_form">
                <form id="professionallogolp1form" method="post" class="validate-balti_popup leadFormWithOrder">
                    <input type="hidden" value="1" name="logo-brief">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" class="required" placeholder="Full Name *" name="name" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 pd-right-0">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" class="required email" placeholder="Email Address *" name="email" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="tel" class="required number" minlength="10" placeholder="Phone No. *" name="phone" required="required">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    <textarea name="customers_meta[message]" class="required" required="required" placeholder="To help us understand better enter a brief description of your project."></textarea>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    <input type="submit" name="cta" value="Submit">
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <button data-fancybox-close="" data-dismiss="modal" class="fancybox-close-small close"></button>
        </div>
    </div>


    <style>
        #exampleModalCenter1 .balti_popup h2 {
            animation: blinker infinite 1s;
        }

        #exampleModalCenter1 .balti_popup h2+p {
            text-align: center
        }

        @keyframes blinker {
            0% {
                color: #000;
            }

            100% {
                color: #f69f00;
            }
        }
    </style>

    <script type="90205e8bc614740202efc6bf-text/javascript">
        $(".close").click(function() {
            $(".modal").hide()
        })
        $(".popup-btn").click(function() {
            $(".modal").show()
        })
        $(".logoCreateBtn").click(function() {
            $(".modal").show()
        })
        $(".dispopup").click(function() {
            $(".modal").show()
        })
        $(".viewMain").click(function() {
            $(".modal").show()
        })
        $(".viewMain").click(function() {
            $(".modal").show()
        })
        $(".btn-yellow.mobileCall").click(function() {
            $(".modal").show()
        })
        setTimeout(function() {
            $(".modal").show()
        }, 2000);
    </script>
    <!-- <script type="90205e8bc614740202efc6bf-text/javascript">
        $(document).ready(function() {
            //var currentIP;
            var key = '5XpThOAEkfgOvEJ';
            var currentIP = $("meta[name=ip2loc]").attr('content');
            var pgurl = $("meta[name=page_url]").attr('content');
            $.ajax({
                method: 'get',
                url: '//pro.ip-api.com/json/' + currentIP,
                data: {
                    key: key
                },
                success: function(data) {
                    if (data) {
                        $('input[name=ip2loc_ip]').val(data.query);
                        $('input[name=ip2loc_isp]').val(data.isp);
                        $('input[name=ip2loc_org]').val(data.org);
                        $('input[name=ip2loc_country]').val(data.country);
                        $('input[name=ip2loc_region]').val(data.regionName);
                        $('input[name=ip2loc_city]').val(data.city);
                        //$('input[name=pageurl]').val(pageurl);
                    }
                }
            });
        });
    </script> -->

    <!-- <script type="text/javascript">
        var ip = "MzkuNTMuMjUzLjEzMA==";
        var url = "aHR0cHM6Ly9hZmZpbml0eWRlc2lnbmh1Yi5jb20vbHAvbG9nby1kZXNpZ24=";
        var authCode = "MzA3";
        var isDebug = "1";
        var socketUrl = "https://chat.ledgecrm.com";
        var token = "pCr4JRzFeEAqiJnXn3oJyU0QucMsqxeRGxJtJqMG";
        var base_url = window.location.protocol + "//" + window.location.hostname;
        var url = window.location.href;
    </script> -->


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
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/19142670/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> -->
    <!-- End of LiveChat code -->

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script type="text/javascript" src="../../assets/js/form_submission.js"></script>
    <script type="text/javascript" src="../../assets/js/email.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <!-- <script src="assets/js/web-workers/backend/web-worker-backend.js" type="text/javascript"></script> -->
    <script src="assets/js/lazyload-background.js" type="text/javascript"></script>
    <!-- <script src="assets/js/socketPackage/socket.io.js" type="text/javascript"></script>
    <script src="assets/js/socketPackage/socket.js" type="text/javascript"></script>
    <script src="assets/js/socketPackage/online-offline.js" type="text/javascript"></script> -->
    <script>
        // Order now Code

        $(".order-package").click(function(e) {
            e.preventDefault();

            var $box = $(this).closest(".pricing-box");

            // Extract package name from <strong>
            var package_name = $box.find(".price-box strong").text().trim();

            // Get current price from <h6>
            var package_price = $(this).data("price");

            // Get full HTML price text from <h6>
            var package_price_html = $box.find(".price-box h6").clone().find("strike").remove().end().text().trim();

            // Get old price from <strike> inside <h6>
            var package_old_price = $box.find(".price-box h6 strike").text().trim();

            // Get the package description list
            var package_description = $box.find("ul").html().trim();

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

            const packageBox = $(this).closest("[data-package-box]");

            const package_name = packageBox.find("h2").text().trim();

            const package_price = $(this).data("price");

            const package_price_html = packageBox.find("h1").text().trim();
            const package_old_price = packageBox.find("h3").text().trim();

            const package_description = packageBox.find("ul").html().trim();

            const package_sku = packageBox.find(".productSku").text().trim();

            localStorage.setItem("package_category", $(this).data("category"));
            localStorage.setItem("package_name", package_name);
            localStorage.setItem("package_price", package_price);
            localStorage.setItem("package_price_html", package_price_html);
            localStorage.setItem("package_old_price", package_old_price);
            localStorage.setItem("package_description", package_description);
            localStorage.setItem("package_sku", package_sku);

            window.location.href = $(this).attr("href");
        });
    </script>

</body>

</html>