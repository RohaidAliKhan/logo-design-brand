<?php
if (file_exists(dirname(__FILE__) . '/../../includes/config.php')) {
    include(dirname(__FILE__) . '/../../includes/config.php');
} elseif (file_exists(dirname(__FILE__) . '/../includes/config.php')) {
    include(dirname(__FILE__) . '/../includes/config.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- <title>Privacy Policy</title> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="../../assets/images/favicon.png" sizes="16x16" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../assets/order/css/style.css" />
    <link rel="stylesheet" href="../../assets/order/css/custom-scroller.css" />
    <link rel="stylesheet" href="../../assets/order/css/style-web.css" />
    <link rel="stylesheet" href="../../assets/order/css/style-responsive.css" />
    <style>
        .selected-dial-code {
            display: none;
        }
    </style>

    <?php
    // Define the titles for different pages
    $pageTitles = [
        'privacy-policy' => 'Privacy Policy - ' . WEBSITE_NAME,
        'terms-and-conditions' => 'Terms and Conditions - ' . WEBSITE_NAME,
        'thank-you' => 'Thank You - ' . WEBSITE_NAME,
        // 'biography' => 'Biography Writing - ' . $WEBSITE_NAME,
    ];

    // Get the current page slug from the URL
    $currentSlug = trim(basename($_SERVER['REQUEST_URI'], ".php"), '/');

    // Determine title
    if (array_key_exists($currentSlug, $pageTitles)) {
        $title = $pageTitles[$currentSlug];
    } else {
        // Default to home page title if slug not found
        $title = 'Home Page - ' . WEBSITE_NAME;
    }



    // Define the canonical URLs for different pages
    $canonicalUrls = [
        'privacy-policy' => 'Privacy Policy',
        'terms-and-conditions' => 'Terms and Conditions',
    ];



    // Get the current page slug from the URL
    $currentSlug = trim(basename($_SERVER['REQUEST_URI'], ".php"), '/');

    // Determine canonical URL
    if ($currentSlug === '' || $currentSlug === 'index') {
        // Home page
        $canonicalUrl = BASE_URL;
    } elseif (array_key_exists($currentSlug, $canonicalUrls)) {
        // Other pages
        $canonicalUrl = BASE_URL . $currentSlug . '/';
    } else {
        // Fallback or error handling
        $canonicalUrl = '';
    }

    // Output the canonical link
    echo '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">';

    ?>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>

</head>