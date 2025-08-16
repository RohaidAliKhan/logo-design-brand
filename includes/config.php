<?php

define('ADMIN_EMAIL', 'info@paceonstudio.com');
define('ADMIN_EMAIL_SENDER', 'developerxavtech@gmail.com');
define('ADMIN_APP_PASSWORD', 'vxvtdlxmkvatlfry');
define('PHONE', '(872) 201-1157');
define('PHONE_HREF', 'tel:+18722011157');
define('EMAIL', 'info@paceonstudio.com');
define('EMAIL_HREF', 'mailto:info@paceonstudio.com');
define('CONTACT_EMAIL', 'info@paceonstudio.com');
define('CONTACT_EMAIL_HREF', 'mailto:info@paceonstudio.com');
define('ADDRESS', '1860 Cool Creek DrSt. Charles, IL 60174, USA');
define('ADDRESS2', '44 Tehama ST San Francisco CA 94105');
define('ADDRESS3', 'Data Center : Houston, Texas');
define('ADDRESS_HREF', '');
define('WEBSITE_NAME', 'Pace On Studio');
define('WEBSITE_LINK', 'paceonstudio.com/');
define('WEBSITE_NAME_PLURAL', "Pace On Studio");
define('GOOGLE_RECAPTCHA_SITE_KEY', "6Lc2WMgqAAAAAJ4om4FD0JsNBnldq5ZHjcqyx2ke");
define('GOOGLE_RECAPTCHA_SECRET_KEY', "6Lc2WMgqAAAAALDEX9xAQJcRJoAqFqWPUon-fkxZ");

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