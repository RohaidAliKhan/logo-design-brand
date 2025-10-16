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
                    <li style="width: 33%">
                        <h4>Order Now</h4>
                    </li>
                    <li style="width: 33%">
                        <h4>Logo Brief</h4>
                    </li>
                    <li class="active hide" id="logo-brief" style="width: 33%">
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
                                        <input type="text" placeholder="" readonly="" id="pname" value="">
                                    </li>
                                    <li>
                                        <label>Amount: USD </label>
                                        <input type="text" placeholder="" id="pprice" readonly="" value="">
                                    </li>
                                    <hr>
                                    <li>
                                        <label>NAME <span class="req-field-star">*</span></label>
                                        <input type="text" data-validation="required" id="txtName" name="cn" placeholder="" required>
                                    </li>
                                    <li>
                                        <label>COUNTRY <span class="req-field-star">*</span></label>
                                        <select id="countryId" data-validation="required" name="country" class="valid" required>
                                            <option value="">Select</option>
                                            <option value="USA">United States</option>
                                            <option value="GBR">United Kingdom</option>
                                            <option value="ESP">Spain</option>
                                            <option value="CAN">Canada</option>
                                            <option value="AUS">Australia</option>
                                            <option value="AFG">Afghanistan</option>
                                            <option value="ALB">Albania</option>
                                            <option value="DZA">Algeria</option>
                                            <option value="ASM">American Samoa</option>
                                            <option value="AND">Andorra</option>
                                            <option value="AGO">Angola</option>
                                            <option value="AIA">Anguilla</option>
                                            <option value="ATA">Antarctica</option>
                                            <option value="ATG">Antigua and Barbuda</option>
                                            <option value="ARG">Argentina</option>
                                            <option value="ARM">Armenia</option>
                                            <option value="ABW">Aruba</option>
                                            <option value="AUT">Austria</option>
                                            <option value="AZE">Azerbaijan</option>
                                            <option value="BHS">Bahamas (the)</option>
                                            <option value="BHR">Bahrain</option>
                                            <option value="BGD">Bangladesh</option>
                                            <option value="BRB">Barbados</option>
                                            <option value="BLR">Belarus</option>
                                            <option value="BEL">Belgium</option>
                                            <option value="BLZ">Belize</option>
                                            <option value="BEN">Benin</option>
                                            <option value="BMU">Bermuda</option>
                                            <option value="BTN">Bhutan</option>
                                            <option value="BOL">Bolivia (Plurinational State of)</option>
                                            <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BIH">Bosnia and Herzegovina</option>
                                            <option value="BWA">Botswana</option>
                                            <option value="BVT">Bouvet Island</option>
                                            <option value="BRA">Brazil</option>
                                            <option value="IOT">British Indian Ocean Territory (the)</option>
                                            <option value="BRN">Brunei Darussalam</option>
                                            <option value="BGR">Bulgaria</option>
                                            <option value="BFA">Burkina Faso</option>
                                            <option value="BDI">Burundi</option>
                                            <option value="CPV">Cabo Verde</option>
                                            <option value="KHM">Cambodia</option>
                                            <option value="CMR">Cameroon</option>
                                            <option value="CYM">Cayman Islands (the)</option>
                                            <option value="CAF">Central African Republic (the)</option>
                                            <option value="TCD">Chad</option>
                                            <option value="CHL">Chile</option>
                                            <option value="CHN">China</option>
                                            <option value="CXR">Christmas Island</option>
                                            <option value="CCK">Cocos (Keeling) Islands (the)</option>
                                            <option value="COL">Colombia</option>
                                            <option value="COM">Comoros (the)</option>
                                            <option value="COD">Congo (the Democratic Republic of the)</option>
                                            <option value="COG">Congo (the)</option>
                                            <option value="COK">Cook Islands (the)</option>
                                            <option value="CRI">Costa Rica</option>
                                            <option value="HRV">Croatia</option>
                                            <option value="CUB">Cuba</option>
                                            <option value="CUW">Curaçao</option>
                                            <option value="CYP">Cyprus</option>
                                            <option value="CZE">Czechia</option>
                                            <option value="CIV">Côte d'Ivoire</option>
                                            <option value="DNK">Denmark</option>
                                            <option value="DJI">Djibouti</option>
                                            <option value="DMA">Dominica</option>
                                            <option value="DOM">Dominican Republic (the)</option>
                                            <option value="ECU">Ecuador</option>
                                            <option value="EGY">Egypt</option>
                                            <option value="SLV">El Salvador</option>
                                            <option value="GNQ">Equatorial Guinea</option>
                                            <option value="ERI">Eritrea</option>
                                            <option value="EST">Estonia</option>
                                            <option value="SWZ">Eswatini</option>
                                            <option value="ETH">Ethiopia</option>
                                            <option value="FLK">Falkland Islands (the) [Malvinas]</option>
                                            <option value="FRO">Faroe Islands (the)</option>
                                            <option value="FJI">Fiji</option>
                                            <option value="FIN">Finland</option>
                                            <option value="FRA">France</option>
                                            <option value="GUF">French Guiana</option>
                                            <option value="PYF">French Polynesia</option>
                                            <option value="ATF">French Southern Territories (the)</option>
                                            <option value="GAB">Gabon</option>
                                            <option value="GMB">Gambia (the)</option>
                                            <option value="GEO">Georgia</option>
                                            <option value="DEU">Germany</option>
                                            <option value="GHA">Ghana</option>
                                            <option value="GIB">Gibraltar</option>
                                            <option value="GRC">Greece</option>
                                            <option value="GRL">Greenland</option>
                                            <option value="GRD">Grenada</option>
                                            <option value="GLP">Guadeloupe</option>
                                            <option value="GUM">Guam</option>
                                            <option value="GTM">Guatemala</option>
                                            <option value="GGY">Guernsey</option>
                                            <option value="GIN">Guinea</option>
                                            <option value="GNB">Guinea-Bissau</option>
                                            <option value="GUY">Guyana</option>
                                            <option value="HTI">Haiti</option>
                                            <option value="HMD">Heard Island and McDonald Islands</option>
                                            <option value="VAT">Holy See (the)</option>
                                            <option value="HND">Honduras</option>
                                            <option value="HKG">Hong Kong</option>
                                            <option value="HUN">Hungary</option>
                                            <option value="ISL">Iceland</option>
                                            <option value="IND">India</option>
                                            <option value="IDN">Indonesia</option>
                                            <option value="IRN">Iran (Islamic Republic of)</option>
                                            <option value="IRQ">Iraq</option>
                                            <option value="IRL">Ireland</option>
                                            <option value="IMN">Isle of Man</option>
                                            <option value="ISR">Israel</option>
                                            <option value="ITA">Italy</option>
                                            <option value="JAM">Jamaica</option>
                                            <option value="JPN">Japan</option>
                                            <option value="JEY">Jersey</option>
                                            <option value="JOR">Jordan</option>
                                            <option value="KAZ">Kazakhstan</option>
                                            <option value="KEN">Kenya</option>
                                            <option value="KIR">Kiribati</option>
                                            <option value="PRK">Korea (the Democratic People's Republic of)</option>
                                            <option value="KOR">Korea (the Republic of)</option>
                                            <option value="KWT">Kuwait</option>
                                            <option value="KGZ">Kyrgyzstan</option>
                                            <option value="LAO">Lao People's Democratic Republic (the)</option>
                                            <option value="LVA">Latvia</option>
                                            <option value="LBN">Lebanon</option>
                                            <option value="LSO">Lesotho</option>
                                            <option value="LBR">Liberia</option>
                                            <option value="LBY">Libya</option>
                                            <option value="LIE">Liechtenstein</option>
                                            <option value="LTU">Lithuania</option>
                                            <option value="LUX">Luxembourg</option>
                                            <option value="MAC">Macao</option>
                                            <option value="MDG">Madagascar</option>
                                            <option value="MWI">Malawi</option>
                                            <option value="MYS">Malaysia</option>
                                            <option value="MDV">Maldives</option>
                                            <option value="MLI">Mali</option>
                                            <option value="MLT">Malta</option>
                                            <option value="MHL">Marshall Islands (the)</option>
                                            <option value="MTQ">Martinique</option>
                                            <option value="MRT">Mauritania</option>
                                            <option value="MUS">Mauritius</option>
                                            <option value="MYT">Mayotte</option>
                                            <option value="MEX">Mexico</option>
                                            <option value="FSM">Micronesia (Federated States of)</option>
                                            <option value="MDA">Moldova (the Republic of)</option>
                                            <option value="MCO">Monaco</option>
                                            <option value="MNG">Mongolia</option>
                                            <option value="MNE">Montenegro</option>
                                            <option value="MSR">Montserrat</option>
                                            <option value="MAR">Morocco</option>
                                            <option value="MOZ">Mozambique</option>
                                            <option value="MMR">Myanmar</option>
                                            <option value="NAM">Namibia</option>
                                            <option value="NRU">Nauru</option>
                                            <option value="NPL">Nepal</option>
                                            <option value="NLD">Netherlands (the)</option>
                                            <option value="NCL">New Caledonia</option>
                                            <option value="NZL">New Zealand</option>
                                            <option value="NIC">Nicaragua</option>
                                            <option value="NER">Niger (the)</option>
                                            <option value="NGA">Nigeria</option>
                                            <option value="NIU">Niue</option>
                                            <option value="NFK">Norfolk Island</option>
                                            <option value="MNP">Northern Mariana Islands (the)</option>
                                            <option value="NOR">Norway</option>
                                            <option value="OMN">Oman</option>
                                            <option value="PAK">Pakistan</option>
                                            <option value="PLW">Palau</option>
                                            <option value="PSE">Palestine, State of</option>
                                            <option value="PAN">Panama</option>
                                            <option value="PNG">Papua New Guinea</option>
                                            <option value="PRY">Paraguay</option>
                                            <option value="PER">Peru</option>
                                            <option value="PHL">Philippines (the)</option>
                                            <option value="PCN">Pitcairn</option>
                                            <option value="POL">Poland</option>
                                            <option value="PRT">Portugal</option>
                                            <option value="PRI">Puerto Rico</option>
                                            <option value="QAT">Qatar</option>
                                            <option value="MKD">Republic of North Macedonia</option>
                                            <option value="ROU">Romania</option>
                                            <option value="RUS">Russian Federation (the)</option>
                                            <option value="RWA">Rwanda</option>
                                            <option value="REU">Réunion</option>
                                            <option value="BLM">Saint Barthélemy</option>
                                            <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KNA">Saint Kitts and Nevis</option>
                                            <option value="LCA">Saint Lucia</option>
                                            <option value="MAF">Saint Martin (French part)</option>
                                            <option value="SPM">Saint Pierre and Miquelon</option>
                                            <option value="VCT">Saint Vincent and the Grenadines</option>
                                            <option value="WSM">Samoa</option>
                                            <option value="SMR">San Marino</option>
                                            <option value="STP">Sao Tome and Principe</option>
                                            <option value="SAU">Saudi Arabia</option>
                                            <option value="SEN">Senegal</option>
                                            <option value="SRB">Serbia</option>
                                            <option value="SYC">Seychelles</option>
                                            <option value="SLE">Sierra Leone</option>
                                            <option value="SGP">Singapore</option>
                                            <option value="SXM">Sint Maarten (Dutch part)</option>
                                            <option value="SVK">Slovakia</option>
                                            <option value="SVN">Slovenia</option>
                                            <option value="SLB">Solomon Islands</option>
                                            <option value="SOM">Somalia</option>
                                            <option value="ZAF">South Africa</option>
                                            <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SSD">South Sudan</option>
                                            <option value="LKA">Sri Lanka</option>
                                            <option value="SDN">Sudan (the)</option>
                                            <option value="SUR">Suriname</option>
                                            <option value="SJM">Svalbard and Jan Mayen</option>
                                            <option value="SWE">Sweden</option>
                                            <option value="CHE">Switzerland</option>
                                            <option value="SYR">Syrian Arab Republic</option>
                                            <option value="TWN">Taiwan (Province of China)</option>
                                            <option value="TJK">Tajikistan</option>
                                            <option value="TZA">Tanzania, United Republic of</option>
                                            <option value="THA">Thailand</option>
                                            <option value="TLS">Timor-Leste</option>
                                            <option value="TGO">Togo</option>
                                            <option value="TKL">Tokelau</option>
                                            <option value="TON">Tonga</option>
                                            <option value="TTO">Trinidad and Tobago</option>
                                            <option value="TUN">Tunisia</option>
                                            <option value="TUR">Turkey</option>
                                            <option value="TKM">Turkmenistan</option>
                                            <option value="TCA">Turks and Caicos Islands (the)</option>
                                            <option value="TUV">Tuvalu</option>
                                            <option value="UGA">Uganda</option>
                                            <option value="UKR">Ukraine</option>
                                            <option value="ARE">United Arab Emirates (the)</option>
                                            <option value="UMI">United States Minor Outlying Islands (the)</option>
                                            <option value="URY">Uruguay</option>
                                            <option value="UZB">Uzbekistan</option>
                                            <option value="VUT">Vanuatu</option>
                                            <option value="VEN">Venezuela (Bolivarian Republic of)</option>
                                            <option value="VNM">Viet Nam</option>
                                            <option value="VGB">Virgin Islands (British)</option>
                                            <option value="VIR">Virgin Islands (U.S.)</option>
                                            <option value="WLF">Wallis and Futuna</option>
                                            <option value="ESH">Western Sahara</option>
                                            <option value="YEM">Yemen</option>
                                            <option value="ZMB">Zambia</option>
                                            <option value="ZWE">Zimbabwe</option>
                                            <option value="ALA">Åland Islands</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                        <input type="text" name="zip" placeholder="" id="txtShipPostalCode" data-validation="required" aria-required="true" maxlength="5" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                    </li>
                                    <li>
                                        <label>CITY <span class="req-field-star">*</span></label>
                                        <input type="text" data-validation="required" name="city" placeholder="" id="txtShipCity" required>
                                    </li>
                                    <li>
                                        <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                                        <select data-validation="required" id="stateName" name="state" required>
                                            <option value="Select State">Select State</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label>ADDRESS <span class="req-field-star">*</span></label>
                                        <input type="text" data-validation="required" name="address" placeholder="" id="txtShipAddress1" required>
                                    </li>
                                    <li>
                                        <label>Telephone <span class="req-field-star">*</span></label>
                                        <input type="text" data-validation="required" readonly="" name="phone" placeholder="" id="txtPhoneNumber" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                    </li>
                                    <li>
                                        <label>EMAIL <span class="req-field-star">*</span></label>
                                        <input type="text" data-validation="required" readonly="" name="email" placeholder="" id="txtEmailAddress" required>
                                    </li>
                                    <hr>
                                    <img class="img-responsive in-block" src="../../../order-now/assets/payment/visa.png" style="text-align: center;margin: 0 auto;">
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
                                <label>I accept <a href="/terms-services" target="blank">Terms &amp; condition</a> and <a href="/privacy-policy" target="blank">Privacy Policy</a>.</label>
                            </div>
                            <div class="loader">
                                <img src="../../../assets/images/loader.gif" alt="">
                            </div>
                            <div class="error"></div>
                            <div class="col-md-12">
                                <div id="finalFormResult" style="margin: 15px 0"></div>
                            </div>
                            <div class="form-sec">
                                <ul>
                                    <li class="submit-btn">
                                        <button type="submit" class="btn btn-red a-btn" id="stripe-submit" name="orderForm" value="1" fdprocessedid="7lan7o">Submit</button>
                                        <img class="img-responsive in-block" src="../../../order-now/assets/payment/verfication.png" style="margin-top: 16px;">
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
        <?php include '../includes/footer.php' ?>
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
                    url: '/includes/send_data.php?action=payment_form',
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
                            window.location.href = "/lp/logo-design-service/thankyou";
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