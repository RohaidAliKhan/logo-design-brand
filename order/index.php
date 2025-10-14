<?php include '../order-includes/header.php' ?>
<?php
    $slug = $_GET['slug'] ?? null;
    if (empty($slug)) {
        header("Location: /");
        exit;
    }
    $packageDetails = null;
    foreach ($packages as $categoryName => $categoryPackages) {
        if (isset($categoryPackages[$slug])) {
            $packageDetails = $categoryPackages[$slug];
            $packageDetails['category'] = $categoryName; // optional
            break;
        }
    }
    if (!$packageDetails) {
        header("Location: /");
        exit;
    }
?>
    <title>Order Now | <?php echo $packageDetails['title']; ?></title>
    <meta name="description" content="Best Web Design Agency located  Taxes offers web, logo, digital marketing, stationery services. Hire professional web designers now!">
</head>

<body class="mainbody">
    <div class="commented-container">
        <?php include '../order-includes/menu.php' ?>
        <section class="page-title">
            <div class="container">
                <h1>Let's Get Started with Your Project</h1>
                <p>Please Provide the information requested below.</p>
            </div>
        </section>
        <section class="steps-seq">
            <div class="container">
                <ul id="progressbar">
                    <li class="active">
                        <h4>Order Now</h4>
                    </li>
                    <li class="progressbar-2 hide" id="logo-brief" style="width: 33%; <?php echo $packageDetails['form_id'] == 0 ? 'display:block;' : 'display:none;'; ?>">
                        <h4 id="dynamicValue">Logo Brief</h4>
                    </li>
                    <li class="color">
                        <h4>Payment</h4>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content-seq">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
                        <div class="row" style="display: flex;flex-wrap: wrap;">
                            <div class="col-md-6 col-lg-5">
                                <div class="boxpackages">
                                    <div class="packheads">
                                        <h3 class="montfont packageName"><?php echo $packageDetails['title']; ?></h3>
                                    </div>
                                    <div class="packdetails">
                                        <div class="packtitles">
                                            <div class="fleft">
                                                <h3 class="opensansfont packagePrice">$<?php echo $packageDetails['price']; ?></h3>
                                            </div>
                                        </div>
                                        <ul class="packageDescription">
                                            <?php foreach ($packageDetails['features'] as $feature): ?>
                                            <li><?php echo $feature; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <div class="listpacks">

                                        </div>
                                        <div class="botarea-pack">
                                            <div class="liovechats-bx">
                                                <a href="javascript:void(0);" title="" class="chat">
                                                    <span>Click here to</span>
                                                    <h5 class="montfont">Live Chat</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7" data-form-type="ordernow_form">
                                <form id="orderForm" class="leadForm form_submission" method="post" enctype="multipart/form-data" action="javascript:void(0)" data-recaptcha="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>">
                                    <input type="hidden" name="get-form" value="order_form">
                                    <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                                    <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                                    <input type="hidden" name="subject" value="Order Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                                    <input type="hidden" name="form-type" value="<?php echo $packageDetails['form_id']; ?>">
                                    <input type="hidden" name="package_name" value="<?php echo $slug; ?>">
                                    <input type="hidden" name="package_price" value="$<?php echo $packageDetails['price']; ?>">
                                    <div class="col-md-12 form-sec step-1-form">
                                        <h4>Please Fill the Form</h4>
                                        <ul>
                                            <li>
                                                <label>Name <span class="req-field-star">*</span></label>
                                                <input type="text" name="cn" placeholder="Name" data-validation="required" fdprocessedid="4y9vj9">
                                            </li>
                                            <li>
                                                <label>Email Address <span class="req-field-star">*</span></label>
                                                <input type="email" name="em" placeholder="Address" data-validation="email" fdprocessedid="0r058h">
                                            </li>
                                            <li>
                                                <label>Phone Number <span class="req-field-star">*</span></label>
                                                <input type="tel" name="pn" placeholder="Phone Number" data-validation="number" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" fdprocessedid="gmdlij">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 form-sec ">
                                        <ul>
                                            <li class="submit-btn">
                                                <div id="formResult"></div>
                                                <button type="submit" class="tbtn btn-red a-btn" id="signupBtn" name="signupForm">SUBMIT</button>
                                            </li>
                                        </ul>
                                        <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                        <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                        <div class="loader" style="display: none">
                                            <img alt="loader" src="/loader.gif">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3 sidebar">
                        <h2><span>Need</span> Assistance?</h2>
                        <ul>
                            <li>
                                <a href="tel:<?php echo PHONE ?>">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Toll Free:</span>
                                    <?php echo PHONE ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="chat">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <span>Live Chat:</span>with our design expert
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../order-includes/footer.php' ?>
    </div>
</body>

</html>