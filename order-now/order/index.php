<?php include '../includes/header.php' ?>
<meta name="description" content="Best Web Design Agency located in Dallas Taxes offers web, logo, digital marketing, stationery services. Hire professional web designers now!">
</head>

<body class="mainbody">
    <div class="commented-container">
        <?php include '../includes/menu.php' ?>
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
                    <li class="progressbar-2 hide" id="logo-brief">
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
                                        <div class="productSku" style="display: none;">LOGO_SPECIAL_PACKAGE</div>
                                        <h3 class="montfont packageName"></h3>
                                    </div>
                                    <div class="packdetails">
                                        <div class="packtitles">
                                            <div class="fleft">
                                                <h3 class="opensansfont packagePrice"></h3>
                                            </div>
                                        </div>
                                        <ul class="packageDescription">

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
                                <form id="orderForm" class="leadForm form_submission" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                                    <input type="hidden" name="package_name" value="" id="package_name">
                                    <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                                    <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                                    <input type="hidden" name="subject" value="Order Form Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
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
                                            <li>
                                                <div class="loader">
                                                    <img src="../../assets/images/loader.gif" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="error"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 form-sec ">
                                        <ul>
                                            <li class="submit-btn">
                                                <div id="formResult"></div>
                                                <button type="submit" class="tbtn btn-red a-btn" id="signupBtn" name="signupForm" fdprocessedid="3j7cqr">SUBMIT
                                                </button>
                                            </li>
                                        </ul>
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
        <?php include '../includes/footer.php' ?>
    </div>
</body>

</html>