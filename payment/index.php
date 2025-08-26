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
    session_start();
    if (empty($_SESSION['name'])) {
        header("Location: /");
        exit;
    }
?>
    <title>Payment Form | <?php echo $packageDetails['title']; ?></title>
    <meta name="description" content="Best Web Design Agency located in Dallas Taxes offers web, logo, digital marketing, stationery services. Hire professional web designers now!">
    <style>
        section.steps-seq ul li:last-child:after{
            display: none;
        }
    </style>
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
                    <li style="width: 33%; <?php echo $packageDetails['form_id'] == 0 ? 'display:block;' : 'display:none;'; ?>">
                        <h4>Logo Brief</h4>
                    </li>
                    <li class="active" id="logo-brief" style="width: 33%">
                        <h4>Payment</h4>
                    </li>
                </ul>
            </div>
        </section>
        <section class="content-seq">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <form id="order-place" action="javascript:void(0)" method="post">
                            <!-- One "tab" for each step in the form: -->
                            <div class="form-sec step-1-form logo-brief-form">
                                <h4 style="margin-bottom: 30px">Payment</h4>
                                <ul>
                                    <li>
                                        <label>DESCRIPTION </label>
                                        <input type="text" placeholder="" readonly="" id="pname" value="<?php echo $packageDetails['title']; ?>">
                                    </li>
                                    <li>
                                        <label>Amount: USD </label>
                                        <input type="text" placeholder="" id="pprice" readonly="" value="$<?php echo $packageDetails['price']; ?>">
                                    </li>
                                    <hr>
                                    <li>
                                        <label>NAME <span class="req-field-star">*</span></label>
                                        <input type="text" id="txtName" name="cn" placeholder="" value="<?php echo $_SESSION['name'] ?>" required>
                                    </li>
                                    <li>
                                        <label>COUNTRY <span class="req-field-star">*</span></label>
                                        <select id="countryId" name="country" class="valid" required>
                                            
                                        </select>
                                    </li>
                                    <li>
                                        <label>ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                        <input type="text" name="zip" placeholder="" id="txtShipPostalCode" aria-required="true" maxlength="5" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                    </li>
                                    <li>
                                        <label>CITY <span class="req-field-star">*</span></label>
                                        <input type="text" name="city" placeholder="" id="txtShipCity" required>
                                    </li>
                                    <li>
                                        <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                                        <select id="stateName" name="state" required>
                                            <option value="Select State">Select State</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>ADDRESS <span class="req-field-star">*</span></label>
                                        <input type="text" name="address" placeholder="" id="txtShipAddress1" required>
                                    </li>
                                    <li>
                                        <label>Telephone <span class="req-field-star">*</span></label>
                                        <input type="text" value="<?php echo $_SESSION['phone'] ?>" readonly="" name="phone" placeholder="" id="txtPhoneNumber" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                    </li>
                                    <li>
                                        <label>EMAIL <span class="req-field-star">*</span></label>
                                        <input type="text" value="<?php echo $_SESSION['email'] ?>" readonly="" name="email" placeholder="" id="txtEmailAddress" required>
                                    </li>
                                    <hr>
                                    <img class="img-responsive in-block" src="../order-assets/img/visa.png" style="text-align: center;margin: 0 auto;">
                                    <li>
                                        <div class="stripe-form-wrapper require-validation mt-4"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                            data-cc-on-file="false">
                                            <div id="card-element" class="StripeElement StripeElement--empty">
                                                <div class="__PrivateStripeElement"
                                                    style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important; --stripeElementWidth: 521px;">
                                                    <iframe name="__privateStripeFrame2336" frameborder="0"
                                                        allowtransparency="true" scrolling="no"
                                                        role="presentation" allow="payment *"
                                                        src="https://js.stripe.com/v3/elements-inner-card-40ed1ee1f911278671e9982f316269db.html#wait=false&amp;mids[guid]=NA&amp;mids[muid]=NA&amp;mids[sid]=NA&amp;style[base][color]=%2332325d&amp;style[base][lineHeight]=18px&amp;style[base][fontFamily]=%22Helvetica+Neue%22%2C+Helvetica%2C+sans-serif&amp;style[base][fontSmoothing]=antialiased&amp;style[base][fontSize]=16px&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[invalid][color]=%23fa755a&amp;style[invalid][iconColor]=%23fa755a&amp;rtl=false&amp;componentName=card&amp;keyMode=test&amp;apiKey=pk_test_lkMq1Om8KnexFcuPpAlxrbxe00pfcOxxvr&amp;referrer=https%3A%2F%2Fnewdemowebsites.com%2Fcustom-backend%2Fzapgo%2Fpublic%2FupdateCart&amp;controllerId=__privateStripeController2331"
                                                        title="Secure card payment input frame"
                                                        style="border: none !important; margin-top: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: light only !important; height: 18px;"></iframe><input
                                                        class="__PrivateStripeElement-input"
                                                        aria-hidden="true" aria-label=" "
                                                        autocomplete="false" maxlength="1"
                                                        style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                                                </div>
                                            </div>
                                            <div id="card-errors" role="alert"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row paddingBottom">
                                <div class="col-lg-6 col-md-6 ">
                                    <label class="field-txt">Statement Descriptor:</label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="field-txt"></label>
                                </div>
                            </div>
                            <div class="privacy-terms paddingBottom">
                                <input type="checkbox" name="checkbox" id="tos" checked="" disabled="">
                                <label>I accept <a href="/terms-of-service.php" target="blank">Terms &amp; condition</a> and <a href="/privacy-policy.php" target="blank">Privacy Policy</a>.</label>
                            </div>
                            <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                            <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                            <div class="loader" style="display: none">
                                <img alt="loader" src="/loader.gif">
                            </div>
                            <div class="col-md-12">
                                <div id="finalFormResult" style="margin: 15px 0"></div>
                            </div>
                            <div class="form-sec">
                                <ul>
                                    <li class="submit-btn">
                                        <button type="submit" class="btn btn-red a-btn" id="stripe-submit" name="orderForm" value="1" fdprocessedid="7lan7o">Submit</button>
                                        <img class="img-responsive in-block" src="../order-assets/img/verfication.png" style="margin-top: 16px;">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 sidebar">
                        <h2><span>Need</span> Assistance?</h2>
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Toll Free:</span> <?php echo PHONE ?>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="chat"><i class="fa fa-comments" aria-hidden="true"></i>
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
        <script src="../order-assets/js/country-states.js"></script>
        <script>
            let user_country_code = "US";

            (function () {

                // Get the country name and state name from the imported script.
                let country_list = country_and_states['country'];
                let states_list = country_and_states['states'];

                // creating country name drop-down
                let option =  '';
                option += '<option>select country</option>';
                for(let country_code in country_list){
                    // set selected option user country
                    let selected = (country_code == user_country_code) ? ' selected' : '';
                    option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
                }
                document.getElementById('countryId').innerHTML = option;

                // creating states name drop-down
                let text_box = '<input type="text" class="input-text" id="state">';
                let state_code_id = document.getElementById("stateName");

                function create_states_dropdown() {
                    // get selected country code
                    let country_code = document.getElementById("countryId").value;
                    let states = states_list[country_code];
                    // invalid country code or no states add textbox
                    if(!states){
                        state_code_id.innerHTML = text_box;
                        return;
                    }
                    let option = '';
                    if (states.length > 0) {
                        option = '<select id="state" name="set_state">\n';
                        for (let i = 0; i < states.length; i++) {
                            option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
                        }
                        option += '</select>';
                    } else {
                        // create input textbox if no states 
                        option = text_box
                    }
                    state_code_id.innerHTML = option;
                }

                // country select change event
                const country_select = document.getElementById("countryId");
                country_select.addEventListener('change', create_states_dropdown);

                create_states_dropdown();
            })();
        </script>
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            var stripe = Stripe('<?php echo STRIPE_KEY; ?>');

            // Create an instance of Elements.
            var elements = stripe.elements();
            var style = {
                base: {
                    color: '#000',
                    lineHeight: '18px',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };



            var card = elements.create('card', {
                style: style
            });
            card.mount('#card-element');

            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    $(displayError).show();
                    displayError.textContent = event.error.message;
                } else {
                    $(displayError).hide();
                    displayError.textContent = '';
                }
            });



            var form = document.getElementById('order-place');

            $('#stripe-submit').click(function() {
                var stripe_btn = $(this);
                $(stripe_btn).prop('disabled', true);
                $('#order-place').find('.loader').show();
                stripe.createToken(card, {
                    name: $('#txtName').val(),
                    email: $('#txtEmailAddress').val(),
                    phone: $('#txtPhoneNumber').val(),
                    address_line1: $('#txtShipAddress1').val(),
                    address_city: $('#txtShipCity').val(),
                    address_zip: $('#txtShipPostalCode').val(),
                    address_state: $('#stateName').val(),
                    address_country: $('#countryId').val()
                }).then(function(result) {
                    var errorCount = checkEmptyFileds();
                    if ((result.error) || (errorCount == 1)) {
                        // Inform the user if there was an error.
                        if (result.error) {
                            var errorElement = document.getElementById('card-errors');
                            $(errorElement).show();
                            errorElement.textContent = result.error.message;
                            $(stripe_btn).prop('disabled', false);
                            $('#order-place').find('.loader').hide();
                        } else {
                            toastr.error('Alert!', 'Please fill the required fields before proceeding to pay');
                            $(stripe_btn).prop('disabled', false);
                            $('#order-place').find('.loader').hide();
                        }
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });



            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var name = $('#txtName').val();
                var country = $('#countryId').val();
                var zip = $('#txtShipPostalCode').val();
                var city = $('#txtShipCity').val();
                var state = $('#stateName').val();
                var address = $('#txtShipAddress1').val();
                var phone = $('#txtPhoneNumber').val();
                var email = $('#txtEmailAddress').val();
                var crm_id = localStorage.getItem("crm_id");
                var total_price = localStorage.getItem("package_price");
                var package_name = localStorage.getItem("package_name").replace(/\s+/g, ' ').trim();
                $.ajax({
                    type: "POST",
                    url: '../../includes/send_data.php?action=payment_form',
                    dataType: "json",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        country: country,
                        zip: zip,
                        city: city,
                        state: state,
                        address: address,
                        crm_id: crm_id,
                        total_price: total_price,
                        package_name: package_name,
                        stripeToken: token.id
                    },
                    success: function(data) {
                        if (data.status) {
                            localStorage.clear();
                            window.location.href = "../thankyou";
                        } else {
                            $('#stripe-submit').prop('disabled', false);
                            $('#order-place').find('.error').addClass('alert alert-danger');
                            $('#order-place').find('.error').html(data.message);
                        }
                        $('#order-place').find('.loader').hide();
                    },
                    error: function(xhr, status, error) {
                        $('#stripe-submit').prop('disabled', false);
                        $('#order-place').find('.error').addClass('alert alert-danger');
                        $('#order-place').find('.error').html('Error Occurred ' + error);
                        $('#order-place').find('.loader').hide();
                    }
                });

                var form = document.getElementById('order-place');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }



            function checkEmptyFileds() {
                var errorCount = 0;
                $('form#order-place').find('input').each(function() {
                    if ($(this).prop('required')) {
                        if (!$(this).val()) {
                            $(this).addClass('required');
                            $(this).parent().find('strong').removeClass('hidden');
                            $(this).parent().find('strong').addClass('block');
                            $(this).parent().find('strong').html('Field is Required');
                            errorCount = 1;
                        }
                    }
                });
                return errorCount;
            }
        </script>
    </div>
</body>

</html>