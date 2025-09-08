<?php include '../order-includes/header.php' ?>
<?php
    session_start();

    $slug    = $_GET['slug']    ?? null;
    $landing = $_GET['landing'] ?? null;

    if (empty($slug)) {
        header("Location: /");
        exit;
    }

    $source = $packages;

    if (!empty($landing) && isset($landing_packages[$landing])) {
        $source = $landing_packages[$landing];
    }

    $packageDetails = null;

    if (isset($source[$slug])) {
        $packageDetails = $source[$slug];
    } else {
        foreach ($source as $categoryName => $categoryPackages) {
            if (isset($categoryPackages[$slug])) {
                $packageDetails = $categoryPackages[$slug];
                $packageDetails['category'] = $categoryName;
                break;
            }
        }
    }

    if (!$packageDetails) {
        header("Location: /");
        exit;
    }

    if (empty($_SESSION['name'])) {
        header("Location: /");
        exit;
    }

?>
    <title>Logo Form | <?php echo $packageDetails['title']; ?></title>
    <meta name="description" content="Best Web Design Agency located in Dallas Taxes offers web, logo, digital marketing, stationery services. Hire professional web designers now!">
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
                    <li style="width: 33%">
                        <h4>Order Now</h4>
                    </li>
                    <li class="active" style="width: 33%;<?php echo $packageDetails['form_id'] == 0 ? 'display:block;' : 'display:none;'; ?>">
                        <h4>Logo Brief</h4>
                    </li>
                    <li style="width: 33%">
                        <h4>Payment</h4>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content-seq">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row" style="display: flex;flex-wrap: wrap;">
                            <div class="col-md-12">
                                <form class="form_submission" method="post" enctype="multipart/form-data" action="javascript:void(0)" data-recaptcha="<?php echo GOOGLE_RECAPTCHA_SITE_KEY; ?>">
                                    <input type="hidden" name="landing_page" value="<?php echo htmlspecialchars($_SESSION['landing'] ?? ''); ?>">
                                    <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                                    <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                                    <input type="hidden" name="subject" value="Logo Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                                    <input type="hidden" name="get-form" value="logo_form">
                                    <input type="hidden" name="form-type" value="<?php echo $packageDetails['form_id']; ?>">
                                    <input type="hidden" name="package_name" value="<?php echo $slug; ?>">
                                    <input type="hidden" name="package_price" value="$<?php echo $packageDetails['price']; ?>">
                                    <input type="hidden" name="cn" value="<?php echo $_SESSION['name'] ?>">
                                    <input type="hidden" name="em" value="<?php echo $_SESSION['email'] ?>">
                                    <input type="hidden" name="pn" value="<?php echo $_SESSION['phone'] ?>">
                                    <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                        <h4 style="margin-bottom: 30px">Logo Brief</h4>
                                        <ul>
                                            <li>
                                                <label>IS THIS A RE-DESIGN OR A NEW LOGO? <span class="req-field-star">*</span></label>
                                                <input type="text" name="logo_info" placeholder="" class="required" required data-name="Logo Info">
                                            </li>
                                            <li>
                                                <label>SELECT WHAT TYPE(S) OF YOUR LOGO SHOULD BE LOOK LIKE?</label>
                                                <div class="select-logo">
                                                    <input type="hidden" name="selected_logo" id="logoSelect" value="" data-name="Selected Logo">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/sony-e-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>high-tech</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/anderoid-pic.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>minimalist</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/cola-pic.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>typography</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/mico-pic.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>corporate</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/kfc-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>illustrative</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/gn-lo.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>initials</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/fanta-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>fun</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/egale-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>sporty</p>
                                                        </li>
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="../order-assets/img/porch-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>shield</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <label>WORD/NAME THAT YOU WANT IN LOGO TO APPEAR (TYPE IN EXACTLY AS YOU WANTED).<span class="req-field-star">*</span></label>
                                                <input type="text" placeholder="" class="required" required="" name="brief_text" data-name="Brief Text">
                                            </li>
                                            <li>
                                                <label>TAGLINE THAT YOU WANT IN LOGO TO APPEAR.</label>
                                                <input type="text" name="brief_tagline" placeholder="" data-name="Brief Tagline">
                                            </li>
                                            <li>
                                                <label>PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO LIST WEBSITE ADDRESSES OF YOUR COMPETITORS, IF ANY.</label>
                                                <input type="text" name="brief_description" placeholder="" data-name="Brief Description">
                                            </li>

                                            <li>
                                                <label>ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                                <input type="text" name="design_concept" placeholder="" data-name="Design Concept">
                                            </li>
                                            <li>
                                                <label>EXISTING WEBSITE ADDRESS, IF ANY</label>
                                                <input type="text" name="existing_website" placeholder="" data-name="Existing Website">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 form-sec ">
                                        <ul>
                                            <li class="submit-btn">
                                                <div id="formResult"></div>
                                                <button type="submit" class="btn btn-red a-btn" id="briefFormBtn" fdprocessedid="dul9c">Continue</button>
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
                    <div class="col-md-3 sidebar">
                        <h2><span>Need</span> Assistance?</h2>
                        <ul>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Toll Free:</span> <?php echo PHONE ?>
                            </li>
                            <li>
                                <a href="javascript:;" class="chat">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <span>Live Chat:</span>with our design expert
                                </a>
                            </li>
                        </ul>
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
                </div>
            </div>
        </section>
        <?php include '../order-includes/footer.php' ?>
        <script>
            $(document).on("click", ".bordr", function () {
                let hiddenInput = $("#logoSelect");
                let currentValues = hiddenInput.val() ? hiddenInput.val().split(",") : [];

                // get <p> text from the same <li>
                let value = $(this).closest("li").find("p").text().trim();

                if ($(this).hasClass("active")) {
                    // already selected → remove
                    $(this).removeClass("active");
                    currentValues = currentValues.filter(v => v !== value);
                } else {
                    // not selected → add
                    $(this).addClass("active");
                    currentValues.push(value);
                }

                // update hidden input (comma separated values)
                hiddenInput.val(currentValues.join(","));
            });
        </script>
    </div>
</body>

</html>