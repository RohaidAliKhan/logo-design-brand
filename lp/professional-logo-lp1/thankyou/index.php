<?php
if (file_exists(dirname(__FILE__) . '/../../../includes/config.php')) {
    include(dirname(__FILE__) . '/../../../includes/config.php');
} elseif (file_exists(dirname(__FILE__) . '/includes/config.php')) {
    include(dirname(__FILE__) . '/includes/config.php');
} else {
    include('../../includes/config.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="google-site-verification" content="NQb7w79jmsY1GCkp82ITasr02TwIwBC9-_PP8bRmCSk" />
    <meta name="msvalidate.01" content="94214743D0BCADB331B56213E26FA507" />

    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico?v=2"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../order-now/order-page.css">
    <link rel="icon" type="image/x-icon" href="../../../assets/images/favicon.png" />


</head>

<body class="home-page">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="/" class="header-logo">
                        <img src="../../../assets/images/visual-logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="phoneInfo">
                        <ul>
                            <li>
                                <a href="#" class="chat"><i class="fas fa-comment"></i>Start Live Chat</a>
                            </li>
                            <li>
                                <a href="tel:<?php echo PHONE_HREF ?>"><i class="fas fa-phone"></i>CALL 24/7: <?php echo PHONE ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main-privacy">
        <div class="container">
            <div class="row">
                <div class="col-md-9 text-center">
                    <h1>Payment Successfull</h1>
                    <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
                    <p>Thankyou for your payment. We will be in contact with more details shortly!</p>
                    <div class="actions wow fadeInDown" data-wow-delay="0.8s"><a href="/" style="cursor: pointer" class="btn-fill"> Go To Home </a></div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>