<?php
include(__DIR__ . '/../../includes/config.php');
?>
<?php include '../../includes/packages-data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo WEBSITE_NAME ?> is offering custom logos for as low as $35
    </title>
    <meta name="description" content="Get your custom logos designed today starting from $35 only at <?php echo WEBSITE_NAME ?>. We are offering straight 70% off on our logo design service so that your business logo can stand out.">
    <meta name="description" content="">
    <link rel="icon" href="../../favicon.svg" type="image/webp/fav-icon.webp">
    <link rel="stylesheet preload" as="style" type="text/css" href="assets/logo-design/css/plugins.css">
    <link rel="stylesheet preload" as="style" type="text/css" href="assets/logo-design/css/style.css">
    <link rel="stylesheet preload" as="style" type="text/css" href="assets/logo-design/css/responsive.css">
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
    </script> -->
</head>

<body>

    <!-- header -- -->
    <header>
        <div class="container">
            <nav class="hdr-nav">
                <a href="/" class="banner-main">
                    <img src="assets/logo-design/images/Logo.png" alt="Visual Designs Lab Logo">
                </a>
                <div class="hdr-btns">
                    <a href="tel:<?php echo PHONE_HREF ?>" class="">
                        <i class="fas fa-phone-volume"></i> <?php echo PHONE ?>
                    </a>
                    <a href="javascript:;" class="get-us open-popup">Get Quote</a>
                    <a href="javascript:;" class="cred-btn chat" id="chat_button">Live Chat</a>
                </div>
            </nav>
        </div>
    </header>
    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8">
                    <div class="banner-text-wrapper">
                        <p class="main-head">Get Your <strong>custom</strong></p>
                        <h1>
                            <hr>
                            Logo Designs <span class="injust-text"> In </span>
                        </h1>
                        <p>Design custom logos for your brand to give it a <br>
                            premium look!</p>
                        <img src="assets/logo-design/images/banner-price.png" class="pric-img">
                    </div>
                    <div class="banner-form">
                        <p>Fill The Form To <span>Avail 70% Off</span></p>
                    </div>
                    <div class="footer-form" data-form-type="ordernow_form">
                        <form class="form_submission" id="regForm" method="post">
                            <input type="hidden" name="get-form" value="order_form">
                            <input type="hidden" name="form-type" value="<?php echo $landing_packages[2]['logo-special']['form_id'] ?? ''; ?>">
                            <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                            <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                            <input type="hidden" name="package_name" value="logo-special">
                            <input type="hidden" name="package_price" value="$35">
                            <input type="hidden" name="landing_page" value="1">
                            <div class="d-flex mt-3 mb-3">
                                <div class="form-sec">
                                    <div class="side-form-group tab" style="display: block;">
                                        <input type="text" class="form-control form-input" name="cn" placeholder="Enter Your Name" required="">
                                    </div>
                                    <div class="side-form-group tab" style="display: none;">
                                        <input type="email" class="form-control form-input" placeholder="Enter Your E-mail" name="em" required="">
                                    </div>
                                    <div class="side-form-group tab" style="display: none;">
                                        <input type="tel" class="form-control form-input" placeholder="Phone no" name="pn" maxlength="11" required="">
                                    </div>
                                </div>
                                <div class="btn-sec">
                                    <div class="banner_form_btn">
                                        <button class="green-btn buton" type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: none;">Previous
                                        </button>
                                        <button class="green-btn buton" type="button" id="nextBtn" onclick="nextPrev(1)" style="display: inline;">Start Project
                                        </button>
                                        <button class="green-btn buton" class="learn-more-tab" type="submit" id="signupBtn2" style="display: none;">Submit
                                        </button>
                                    </div>
                                </div>
                                <div id="formResult" class="popFormResult"></div>
                            </div>
                        </form>
                    </div>
                    <div class="trust-img">
                        <img src="assets/logo-design/images/trust.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-right-images-wrapper">
            <div class="containered">
                <div class="product-card">
                    <img src="assets/logo-design/images/sloge01.webp" alt="">
                </div>
                <div class="product-card">
                    <img src="assets/logo-design/images/sloge02.webp" alt="">
                </div>
                <div class="product-card">
                    <img src="assets/logo-design/images/sloge03.webp" alt="">
                </div>
                <div class="product-card">
                    <img src="assets/logo-design/images/sloge04.webp" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- logoes -->
    <section class="companies-logoes-sec">
        <div class="container-xl">
            <h5 class="text-center mb-4">We're rated 4.8/5 from 18,467 customer reviews.</h5>
            <ul class="companies-list">
                <li>
                    <img data-src="assets/logo-design/images/brand01.jpg" class="lazyload" alt="">
                </li>
                <li>
                    <img data-src="assets/logo-design/images/brand02.jpg" class="lazyload" alt="">
                </li>
                <li>
                    <img data-src="assets/logo-design/images/brand03.jpg" class="lazyload" alt="">
                </li>
                <li>
                    <img data-src="assets/logo-design/images/brand04.jpg" class="lazyload" alt="">
                </li>
                <li>
                    <img data-src="assets/logo-design/images/brand005.jpg" class="lazyload" alt="">
                </li>
            </ul>
        </div>
    </section>

    <!-- portfolio -->
    <section class="portfolio">
        <div class="container-xl">
            <div class="portfolio-title lp-sec-title-wrapper">
                <h2 class="lp-sec-title mb-4">Logo Portfolio</h2>
            </div>
        </div>
        <div class="portfolio-wrapper-grid-outer">
            <ul class="nav nav-tabs" id="myTab" aria-owns="home profile contact iconic illust mascot typo " role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">3D Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Animated </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Flat</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="iconic-tab" data-toggle="tab" href="#iconic" role="tab" aria-controls="iconic" aria-selected="false">Iconic</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="illust-tab" data-toggle="tab" href="#illust" role="tab" aria-controls="illust" aria-selected="false">Illustrator</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="abstract-tab" data-toggle="tab" href="#abstract" role="tab" aria-controls="abstract" aria-selected="false">Abstract</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="mascot-tab" data-toggle="tab" href="#mascot" role="tab" aria-controls="mascot" aria-selected="false">Mascot</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="typo-tab" data-toggle="tab" href="#typo" role="tab" aria-controls="typo" aria-selected="false">Typography</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- 3d Design -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/1.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/2.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/3.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/4.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/5.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/6.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/7.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/8.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/9.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/10.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/11.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/3d-logoes/12.webp" class="portfolio-box" data-fancybox="3d-design">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/3d-logoes/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Animated -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/1.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/2.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/3.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/4.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/5.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/6.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/images/portfolio/animated/7.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/8.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/9.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/10.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/11.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/animated/12.webp" class="portfolio-box" data-fancybox="animated">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/animated/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- flat -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/1.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/2.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/3.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/4.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/5.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/6.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/7.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/8.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/9.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/10.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/11.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/flat/12.webp" class="portfolio-box" data-fancybox="flat">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/flat/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="iconic" role="tabpanel" aria-labelledby="iconic-tab">
                    <!-- iconic -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/1.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/2.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/3.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/4.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/5.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/6.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/7.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/8.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/9.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/10.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/11.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/iconic/12.webp" class="portfolio-box" data-fancybox="iconic">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/iconic/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="illust" role="tabpanel" aria-labelledby="illust-tab">
                    <!-- illustrator -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="a/assets/logo-design/images/portfolio/illustrator/1.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/2.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/3.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/4.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/5.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/6.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/7.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/8.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/9.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/10.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/11.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/illustrator/12.webp" class="portfolio-box" data-fancybox="illustrator">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/illustrator/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="abstract" role="tabpanel" aria-labelledby="abstract-tab">
                    <!-- Abstract -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/1.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/2.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/3.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/4.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/5.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/6.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/7.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/8.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/9.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/10.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/11.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/abstract/12.webp" class="portfolio-box" data-fancybox="abstract">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/abstract/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mascot" role="tabpanel" aria-labelledby="mascot-tab">
                    <!-- mascot -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/1.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/2.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/3.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/4.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/5.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/6.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/7.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/8.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/9.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/10.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/11.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/mascot/12.webp" class="portfolio-box" data-fancybox="mascot">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/mascot/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="typo" role="tabpanel" aria-labelledby="typo-tab">
                    <!-- typography -->
                    <div class="portfolio-tab-pane-inner-wrapper">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 no-gutters ">
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/1.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/1.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/2.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/2.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/3.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/3.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/4.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/4.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/5.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/5.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/6.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/6.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/7.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/7.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/8.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/8.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/9.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/9.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/10.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/10.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/11.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/11.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="assets/logo-design/images/portfolio/typography/12.webp" class="portfolio-box" data-fancybox="typo">
                                    <img class="lazyload" data-src="assets/logo-design/images/portfolio/typography/12.webp" alt="port">
                                    <img data-src="assets/logo-design/images/portfolio/port-icon.webp" class="lazyload" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center portfolio-btn">
            <a class="cred-btn open-popup" href="javascript:;">Request A Free Quote</a>
        </div>
    </section>

    <!-- cta -->
    <section class="cta">
        <div class="container-xl">
            <div class="cta-wrapper">
                <p>Get a Premium Logo Design,</p>
                <h3>Hire Our Expert Designers</h3>
                <div class="cta-btns">
                    <a class="cred-btn" href="tel:<?php echo PHONE_HREF ?>">Call Us :
                        <?php echo PHONE ?>
                    </a>
                    <a class="cyellow-btn chat" id="chat_button" href="javascript:;">Live Chat</a>
                </div>
            </div>
            <img data-src="assets/logo-design/images/cta-img3.webp" class="lazyload" alt="cta image">
        </div>
    </section>
    <section class="logo-catogories lp-sec-py lazy-background">
        <div class="container-fluid">
            <div class="heading text-center">
                <h2>Logo's We Make</h2>
            </div>
            <div class="swiper-container main-slider loading">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="media">
                            <img class="img-fluid lazyload" data-src="assets/logo-design/images/review-01.webp" alt="logo">
                            <div class="media-body">
                                <div class="logo-catogories-text-wrapper">
                                    <h3>Iconic logo</h3>
                                    <p>iconic logo design service will create a solid identity for your business that makes
                                        and enduring impact on your target audience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="media">
                            <img class="img-fluid lazyload" data-src="assets/logo-design/images/review-02.webp" alt="logo">
                            <div class="media-body">
                                <div class="logo-catogories-text-wrapper">
                                    <h3>3D Logo</h3>
                                    <p>At <?php echo WEBSITE_NAME ?>, we implement projects of any complexity
                                        and make sure that your logo will be designed by the 3D graphic specialists holding
                                        extensive experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="animated-logo">
                            <div class="media">
                                <img class="img-fluid lazyload gif-img" data-src="assets/logo-design/images/animated.webp" alt="logo">
                                <div class="media-body">
                                    <div class="logo-catogories-text-wrapper">
                                        <h3>Animated Logo</h3>
                                        <p>An animated logo is often applied as an effective promotional tool. It helps to
                                            increase memorability, brand awareness, improve storytelling, and create an
                                            original image for a brand.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="media">
                            <img class="img-fluid lazyload" data-src="assets/logo-design/images/review-04.webp" alt="logo">
                            <div class="media-body">
                                <div class="logo-catogories-text-wrapper">
                                    <h3>Typography Logo</h3>
                                    <p>
                                        Typographic logos is the art and technique of arranging type to make
                                        written language legible and readable. These logos help to stay ahead
                                        of the competitors and reach maximum potential in the least possible time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="media">
                            <img class="img-fluid lazyload" data-src="assets/logo-design/images/review-05.webp" alt="logo">
                            <div class="media-body">
                                <div class="logo-catogories-text-wrapper">
                                    <h3>Abstract Logo</h3>
                                    <p>
                                        To achieve your business goals in this digital world, you need to have a good
                                        abstract logo to stay in users'
                                        mind for a long time. We design each logo with the essence of business instilled in
                                        every element.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="media">
                            <img class="img-fluid lazyload" data-src="assets/logo-design/images/review-06.webp" alt="logo">
                            <div class="media-body">
                                <div class="logo-catogories-text-wrapper">
                                    <h3>Illustrative </h3>
                                    <p>
                                        We help communicate your corporate messages with our illustrative logo service.
                                        Hire our illustrative logo designers and get one for yourself in no time!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- packages -->
    <section class="packages-section lp-sec-py">
        <div class="container-xl">
            <div class="packages-title-cont lp-sec-title-wrapper">
                <h2 class="lp-sec-title">Our Packages</h2>
                <p class="lp-sec-para">We provide every client with our pocket-friendly design packages.</p>
            </div>
            <div class="packages-inner-container">
                <div class="packages-slider">
                    <?php
                        $packages_to_show = $landing_packages[2] ?? []; 
                    ?>
                    <?php foreach ($packages_to_show as $slug => $package): ?>  
                        <div class="package-box" data-package-box>
                            <div class="package-hdr">
                                <h3 data-package-name><?php echo $package['title']; ?></h3>
                                <i class="packages-icon-sprite <?php echo $package['icon']; ?>"></i>

                                <div class="package-price-wrapper">
                                    <span>$</span>
                                    <span><?php echo $package['price']; ?></span>
                                    <span><?php echo $package['old_price']; ?></span>
                                </div>
                            </div>
                            <div class="package-body" data-package-scroll="">
                                <ul data-package-description>
                                     <?php foreach ($package['features'] as $feature): ?>
                                            <?php if (is_array($feature)): ?>
                                                <li class="<?php echo $feature['class']; ?>">
                                                    <?php echo $feature['text']; ?>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                    <?php echo $feature; ?></li>
                                            <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="package-ftr">
                                <a class="cred-btn order-package" href="/order/index.php?slug=<?php echo $slug; ?>" data-category="1" data-price="35">Order
                                    Now
                                </a>

                            </div>
                        </div> 
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="top-packages">
                <div class="combo-slider">
                    <div class="item" data-package-box>
                        <div class="bg-secondary">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        Logo Infinite
                                    </h2>
                                    <div class="combo-list-style" data-package-scroll="">
                                        <ul>
                                            <li> Unlimited Original Logo Concepts</li>
                                            <li> 8 Dedicated Logo Designer (Industry Specific)</li>
                                            <li> Unlimited Revisions</li>
                                            <li> 5 Page Informative Website</li>
                                            <li> Stationery Design (Business Card, Letterhead, Envelope)</li>
                                            <li> Brand Book</li>
                                            <li> 500 Business Cards </li>
                                            <li> 500 Letterheads</li>
                                            <li> Email Signature Design</li>
                                            <li> Social Media Designs (Facebook, Twitter, Instagram)</li>
                                            <li> 2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                            <li> With Grey Scale Format</li>
                                            <li> Free Icon Design</li>
                                            <li> Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                            <li> 24 - 48 Business Hours Turn Around Time</li>
                                            <li class="features">MORE FEATURES</li>
                                            <li> 100% Satisfaction</li>
                                            <li> 100% Ownership Rights</li>
                                            <li> Money Back Guarantee</li>
                                            <li> Dedicated Account Manager</li>
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
                                            1249
                                        </h1>
                                        <a class="dft-btn seller_order cred-btn orderNowBtnCombo" data-category="2" data-price="1249" href="/order-now/order/">Order Now <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <figure>
                                        <img class="m-auto img-fluid" src="assets/logo-offer/images/awards.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-package-box>
                        <div class="bg-secondary">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>
                                        Logo Combo
                                    </h2>
                                    <div class="combo-list-style" data-package-scroll="">
                                        <ul>
                                            <li>Unlimited Original Logo Concepts </li>
                                            <li>12 Dedicated Logo Designer (Industry Specific) </li>
                                            <li>Unlimited Revisions </li>
                                            <li>E-commerce Website </li>
                                            <li>Stationery Design (Business Card, Letterhead, Envelope) </li>
                                            <li>Brand Book</li>
                                            <li>500 Business Cards</li>
                                            <li>500 Letterheads</li>
                                            <li>Email Signature Design</li>
                                            <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                                            <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                            <li>With Grey Scale Format </li>
                                            <li>Free Icon Design </li>
                                            <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                            <li>24 - 48 Business Hours Turn Around Time</li>
                                            <li><span>MORE FEATURES</span></li>
                                            <li>100% Satisfaction </li>
                                            <li>100% Ownership Rights </li>
                                            <li>Money Back Guarantee </li>
                                            <li>Dedicated Account Manager </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 has-pad">
                                    <div class="final">
                                        <h3 class="ult-cut-prc"><span class="inner">
                                                $
                                                3999
                                            </span></h3>
                                        <h1>
                                            $
                                            1499
                                        </h1>
                                        <a class="dft-btn seller_order cred-btn orderNowBtnCombo" data-category="2" data-price="1499" href="/order-now/order/">Order Now <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <figure>
                                        <img class="m-auto img-fluid" src="assets/logo-offer/images/awards.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="container-xl">
            <div class="cta-wrapper">
                <p>Get a Premium Logo Design,</p>
                <h3>Hire Our Expert Designers</h3>
                <div class="cta-btns">
                    <a class="cred-btn" href="tel:<?php echo PHONE_HREF ?>">Call Us :
                        <?php echo PHONE ?>
                    </a>
                    <a class="cyellow-btn chat" id="chat_button" href="javascript:;">Live Chat</a>
                </div>
            </div>
            <img data-src="assets/logo-design/images/cta-img3.webp" class="lazyload" alt="cta image">
        </div>
    </section>
    <section class="about-main lp-sec-py">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-12">
                    <img src="assets/logo-design/images/img01.webp" class="lazyload img-fluid" alt="cta image">
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <article>
                        <h2>About Us</h2>
                        <p>At <?php echo WEBSITE_NAME ?>, we know how important it is to ensure that your logo
                            is eye-catching and persuasive.
                            We believe in providing our customers with excellent logo designs.
                            We work closely with our clients to understand their requirements and deliver timely
                            results.</p>
                    </article>
                    <img src="assets/logo-design/images/img02.webp" class="lazyload img-fluid d-xs-none" alt="cta image">
                </div>
            </div>
        </div>
    </section>
    <section class="editingServicesSec" style="margin-bottom:70px;">
        <div class="container"><br>
            <h1 style="font-family:Montserrat;text-align:center;"> <span style="color:#4169e1">MODERN LOGO DESIGN
                    -</span> DIGITALISM AND VECTORIZATION </h1><br>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/3d_log_design.png" class="img-fluid" alt="3d log design by <?php echo WEBSITE_NAME ?>">
                            <h6>3D Animated Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/abstract_logo_design_by_logo_house.png" class="img-fluid" alt="abstract logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Abstract Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/accounting_and_finance_logo_design.png" class="img-fluid" alt="accounting and finance logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Accounting and Finance Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/agriculture_logo_design.png" class="img-fluid" alt="agriculture logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Agriculture and Farm Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv3.png" class="img-fluid" alt="Animals and Pets Logo Design by <?php echo WEBSITE_NAME ?> ">
                            <h6>Animals and Pets Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv4.png" class="img-fluid" alt="Architectural Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Architectural Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv5.png" class="img-fluid" alt="Art and Craft by <?php echo WEBSITE_NAME ?>">
                            <h6>Art and Craft Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv6.png" class="img-fluid" alt="Attorney & Law Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Attorney & Law Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv7.png" class="img-fluid" alt="Automotive & Vehicle Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Automotive & Vehicle Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/band_logo_design.png" class="img-fluid" alt="Band Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Band Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv8.png" class="img-fluid" alt="Bar & Nightclub Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Bar & Nightclub Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv16.png" class="img-fluid" alt="Beauty Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Beauty Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">

                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/book_logo_design.png" class="img-fluid" alt="Book Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Book Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv9.png" class="img-fluid" alt=" Business & Consulting Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Business & Consulting Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/cannabis_logo_design.png" class="img-fluid" alt="Cannabis Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Cannabis Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv10.png" class="img-fluid" alt="Children & Childcare Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Children & Childcare Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/christmas_logo_design.png" class="img-fluid" alt="Christmas Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Christmas Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv11.png" class="img-fluid" alt="Cleaning & Maintenance Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Cleaning & Maintenance Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv12.png" class="img-fluid" alt="Communications Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Communications Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv13.png" class="img-fluid" alt="Community & Non-Profit Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Community & Non-Profit Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv14.png" class="img-fluid" alt="Computer & IT Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Computer & IT Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv15.png" class="img-fluid" alt="Construction Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Construction Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/cosmetic.png" class="img-fluid" alt="Cosmetics  Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Cosmetics Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/cryptocurrency_logo_design.png" class="img-fluid" alt="Cryptocurrency Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Cryptocurrency Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv17.png" class="img-fluid" alt="Dating Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Dating Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/dental_logo_design.png" class="img-fluid" alt="Dental Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Dental Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv18.png" class="img-fluid" alt="Ecommerce Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Ecommerce Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv19.png" class="img-fluid" alt="Education Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Education Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv20.png" class="img-fluid" alt="Entertainment Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Entertainment Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Environmental_and_Green_Logo_Design.png" class="img-fluid" alt="Environmental & Green Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Environmental & Green Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/fashion_logo_design.png" class="img-fluid" alt="Fashion Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Fashion Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/flate_logo_design.png" class="img-fluid" alt="Flat Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Flat Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Floral_logo_design.png" class="img-fluid" alt="Floral logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Floral Logo Design</h6>

                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/food_and_medical_logo_design.png" class="img-fluid" alt="Food and Medical Supplements Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Food and Medical Supplements Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/food_and_drink_logo_design.png" class="img-fluid" alt="Food & Drink Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Food & Drink Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/gaming_logo_design.png" class="img-fluid" alt="Gaming Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Gaming Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Home_Furnishings_Logo_Design.png" class="img-fluid" alt="Home Renovation Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Home Renovation Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/food_and_drink_logo_design.png" class="img-fluid" alt="iconic Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>iconic Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Industrial_Logo_Design.png" class="img-fluid" alt="Industrial Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Industrial Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/insurance_logo_design.png" class="img-fluid" alt="Insurance Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Insurance Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/jewlery_logo_design.png" class="img-fluid" alt="Jewelry Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Jewelry Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Landscaping_Logo_Design.png" class="img-fluid" alt="Landscaping Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Landscaping Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Lawn_care_logo_design.png" class="img-fluid" alt="Lawn Care Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Lawn Care Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/marketing_logo_design.png" class="img-fluid" alt="Marketing Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Marketing Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/modern_logo_design.png" class="img-fluid" alt="Modern Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Modern Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/packages-and-labels-animi.png" class="img-fluid" alt="Packages and Label Design Logo design by <?php echo WEBSITE_NAME ?>" style="width: 65px; height: 65px">
                            <h6>Packages and Label Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/srv29.png" class="img-fluid" alt="Photography Logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Photography Logo design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/physical_fitness_logo_design.png" class="img-fluid" alt="Physical Fitness and Gym Logo design by <?php echo WEBSITE_NAME ?>">
                            <h6>Physical Fitness and Gym Logo design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid black;">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/real_estate_logo_design.png" class="img-fluid" alt="Real Estate & Mortgage Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Real Estate & Mortgage Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/resturant_logo_design.png" class="img-fluid" alt="Restaurant Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Restaurant Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/retail_and_shoping_logo_design.png" class="img-fluid" alt="Retail & Shopping Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Retail & Shopping Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/security_logo_design.png" class="img-fluid" alt="Security Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Security Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/Landscaping_Logo_Design.png" class="img-fluid" alt="Simplified Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Simplified Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/spa_logo_design.png" class="img-fluid" alt="Spa & Esthetics Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Spa & Esthetics Logo Design</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/sports_logo_design.png" class="img-fluid" alt="Sports Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Sports Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/technology_logo_design.png" class="img-fluid" alt="Technology Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Technology Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/travel_and_hotel_logo_design.png" class="img-fluid" alt="Travel and Hotel Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Travel and Hotel Logo Design</h6>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 logodesign" style="border-right: 1px solid black;">
                    <a href="javascript:;">
                        <div class="editingServices">
                            <img src="assets/logo-design/images/wedding_logo_design.png" class="img-fluid" alt="Wedding Logo Design by <?php echo WEBSITE_NAME ?>">
                            <h6>Wedding Logo Design</h6>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="about-us-testimonials">
        <div class="container">
            <div class="testimonials-inner-wrapper">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <img src="assets/logo-design/images/img05.webp" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <article>
                                <h3>Hear What Our <br>
                                    Clients Say About Us</h3>
                                <p>Having decided that I wanted a new logo I had it designed
                                    by <?php echo WEBSITE_NAME ?>, and they did a great job. It took us just
                                    42 hours to order and receive the new logo.</p>
                                <h5>Mike. K</h5>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <img src="assets/logo-design/images/img04.webp" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <article>
                                <h3>Hear What Our <br>
                                    Clients Say About Us</h3>
                                <p>Choosing <?php echo WEBSITE_NAME ?> for my e-commerce logo and branding was
                                    a wise choice,
                                    as the colors, symbol, and sharp edges set my brand apart from the competition.</p>
                                <h5>John Matthew</h5>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <img src="assets/logo-design/images/img06.webp" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <article>
                                <h3>Hear What Our <br>
                                    Clients Say About Us</h3>
                                <p>My experience working with them was effortless and easy. They got the best designers and
                                    I got my work done the way I wanted it.
                                    I highly recommend them as the best and most reliable people to work with.</p>
                                <h5>Barbara Andrew</h5>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copy-secure">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3">
                    <div class="copy-right-wrap position-relative text-center text-lg-left mb-3 mb-lg-0">
                        <!-- <a href="/order/terms" class="position-relative vert-line pl-0">Term of use</a>
                    <a href="/order/privacy" class="position-relative vert-line">Privacy Policy</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>Copyright © 2025 <?php echo WEBSITE_NAME ?>. All Rights Reserved</p>
                </div>
                <div class="col-lg-3">
                    <div class="secure-payment text-center text-lg-right aos-init aos-animate">
                        <img data-src="assets/logo-design/images/vista-img.png" alt="bank Cards" class="lazyload img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 text-center">
                    <hr>
                    <strong>Disclaimer:</strong>
                    <p>
                        The logo, name and graphics of <?php echo WEBSITE_NAME ?> and its products & services
                        are the trademarks
                        of <?php echo WEBSITE_NAME ?>. All other company names, brand names, trademarks and
                        logos mentioned on this website
                        are the property of their respective owners and do not constitute or imply endorsement, sponsorship
                        or
                        recommendation thereof by <?php echo WEBSITE_NAME ?> and do not constitute or imply
                        endorsement, sponsorship or recommendation of <?php echo WEBSITE_NAME ?> by the
                        respective trademark owner.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- popup -->
    <div class="popup-wrapper">
        <div class="popup-inner-wrapper">
            <div class="popup-content">
                <div class="cross">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewbox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </div>
                <div class="popuptitle">
                    <h2>70% off ON ALL SERVICES</h2>
                    <h3>Fill out this brief form to get your </h3>
                    <p><strong>Discount reserved.</strong></p>
                </div>
                <div class="popup-body" data-form-type="ordernow_form">
                    <form class="popup-form form_submission" method="post">
                        <input type="hidden" name="get-form" value="order_form">
                        <input type="hidden" name="form-type" value="<?php echo $landing_packages[2]['logo-special']['form_id'] ?? ''; ?>">
                        <input type="hidden" name="url" value="<?php echo htmlspecialchars(CURRENT_URL, ENT_QUOTES, 'UTF-8'); ?>">
                        <input type="hidden" name="domain" value="www.<?php echo WEBSITE_LINK ?>">
                        <input type="hidden" name="subject" value="Landing Page Form (www.<?php echo WEBSITE_LINK ?>)">
                        <input type="hidden" name="package_name" value="logo-special">
                        <input type="hidden" name="package_price" value="$59">
                        <input type="hidden" name="landing_page" value="1">
                        <div class="form-group">
                            <input type="text" name="cn" class="form-control form-input" placeholder="Full Name" data-validation="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="em" class="form-control form-input" placeholder="Your Email" data-validation="required">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="pn" class="form-control form-input" placeholder="Your Phone Number" data-validation="required">
                        </div>
                        <button type="submit" class="cred-btn">Submit</button>
                        <div id="formResult"></div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- right sticky contact buttons -->
    <div class="floating_wrap">
        <div class="btns_wrap">
            <a href="javascript:;" class="chat_wrap" id="chat_button">
                <span class="icoo"><i class="fa fa-comments"></i></span>
                <span>Chat With Us</span>
            </a>
            <a href="tel:<?php echo PHONE_HREF ?>" class="call_wrap">
                <span class="icoo"><i class="fa fa-phone"></i></span>
                <span>
                    <?php echo PHONE ?>
                </span>
            </a>
        </div>
    </div>


    <!-- sticky form button -->
    <div class="floatbutton">
        <div class="clickbutton">
            <div class="crossplus">
                <p>Get <strong>70%</strong> Discount </p>
            </div>
        </div>
        <div class="banner-form-right-fixed">
            <h3>Chat With Us to <br>Avail 70% Discount</h3>
            <section class="banform">
                <div class="ban-form" data-form-type="ordernow_form">
                    <form class="cmxform orderBriefForm has-validation-callback" method="post">
                        <input type="hidden" name="logo-brief" value="1" class="form-input">
                        <input type="hidden" name="subject" value="Landing page side bar form" class="form-input">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="fldset">
                                    <input id="username" class="form-input" name="name" minlength="2" type="text" placeholder="Your name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fldset">
                                    <input id="cemail" class="form-input" type="email" name="email" placeholder="Email here" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fldset">
                                    <input name="phone" class="form-input" id="phone-coun" required="" type="text" maxlength="12" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="fldset">
                                    <textarea placeholder="Message" class="form-input" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fldset green-btn-1 ban-btn1">
                                    <input name="submit" type="submit" placeholder="Connect With Us" required="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- scripts -->
    <!-- popup -->
    <!-- <div class="popup-wrapper2">
        <div class="popup-inner-wrapper2">
            <div class="popup-content">
                <div class="cross2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewbox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </div>
                <div class="popuptitle">
                    <h3>TOO SEE THE FULL IMAGE
                        ENTER YOUR DETAILS HERE
                    </h3>
                </div>
                <div class="popup-body" data-form-type="portfolio_form">
                    <form class="popup-form orderBriefForm has-validation-callback" method="post">
                        <input type="hidden" name="logo-brief" value="0" class="form-input">
                        <input type="hidden" name="subject" value="Landing page portfolio form" class="form-input">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form-input" placeholder="Full Name" data-validation="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-input" placeholder="Your Email" data-validation="required">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control form-input" placeholder="Your Phone Number" data-validation="required">
                        </div>
                        <button type="submit" class="cred-btn">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div> -->


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

    <script src="assets/logo-design/js/plugins.js"></script>
    <script src="assets/logo-design/js/minify-js.js"></script>
    <script src="assets/logo-design/js/custom.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/lazyload-background.js"></script>
    <script type="text/javascript" src="../../assets/js/form_submission.js"></script>
    <script type="text/javascript" src="../../assets/js/email.js"></script>
    <!-- <script>
        $('.chat, .live_chatt, .chatt').click(function() {
            LiveChatWidget.call("maximize");
        });
        $(".order-package").click(function(e) {
            e.preventDefault();

            const box = $(this).closest(".package-box");
            const package_name = box.find(".package-hdr h3").text().trim();
            const package_price = $(this).data("price");
            const package_price_html = box.find(".package-price-wrapper span:nth-child(1)").text().trim();
            const package_old_price = box.find(".package-price-wrapper span:nth-child(2)").text().trim();
            const package_description = box.find("ul .mCSB_container").html().trim();

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



            localStorage.setItem("package_category", $(this).data("category"));
            localStorage.setItem("package_name", package_name);
            localStorage.setItem("package_price", package_price);
            localStorage.setItem("package_price_html", package_price_html);
            localStorage.setItem("package_old_price", package_old_price);
            localStorage.setItem("package_description", package_description);


            window.location.href = $(this).attr("href");
        });
    </script> -->
    <script>
        var bodyForVideo = document.getElementsByTagName("BODY");

        $(bodyForVideo).on('mouseover keydown touchstart wheel', function() {

            $(this).off('mouseover keydown touchstart wheel');

            $('.category-videos').attr({
                preload: "auto",
                autoplay: "autoplay"
            });

        });
    </script>

</body>

</html>