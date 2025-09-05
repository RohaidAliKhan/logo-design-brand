<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = "https://";
} else {
    $protocol = "http://";
}

define('CURRENT_URL', $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('ADMIN_EMAIL', 'info@domain.com');
define('ADMIN_EMAIL_SENDER', 'developerxavtech@gmail.com');
define('ADMIN_APP_PASSWORD', 'vxvtdlxmkvatlfry');
define('PHONE', '(872) 201-1157');
define('PHONE_HREF', 'tel:+18722011157');
define('EMAIL', 'info@domain.com');
define('EMAIL_HREF', 'mailto:info@domain.com');
define('CONTACT_EMAIL', 'info@domain.com');
define('CONTACT_EMAIL_HREF', 'mailto:info@domain.com');
define('ADDRESS', '1860 Cool Creek DrSt. Charles, IL 60174, USA');
define('ADDRESS2', '44 Tehama ST San Francisco CA 94105');
define('ADDRESS3', 'Data Center : Houston, Texas');
define('ADDRESS_HREF', '');
define('WEBSITE_NAME', 'Pace On Studio');
define('WEBSITE_LINK', 'domain.com/');
define('WEBSITE_NAME_PLURAL', "Pace On Studio");
define('GOOGLE_RECAPTCHA_SITE_KEY', "6LfMIK8rAAAAAN1fQCiL955v7EHyBUBs-NeVMWSd");
define('GOOGLE_RECAPTCHA_SECRET_KEY', "6LfMIK8rAAAAAKhkNzfulhETF-__lWVaSd-9yjyZ");
// define('TERMINAL', "http://127.0.0.1:8000/");
define('TERMINAL', "https://terminal.tech-deck.co/");
define('TERMINAL_BRAND', "68ba2bf8d5e01");
define('STRIPE_SECRET', 'sk_test_tufroxQif3WXYBXnpE7654Lc00ELByYsKj');
define('STRIPE_KEY', 'pk_test_lkMq1Om8KnexFcuPpAlxrbxe00pfcOxxvr');

function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }