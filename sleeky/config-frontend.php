<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL

// Site URL (no trailing slash)
define('siteURL', $YOURLS_SITE);

// Page title for your site
define('title', getenv('WEB_NAME') ?: 'Sleeky theme for YOURLS');

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', getenv('WEB_SHORT_NAME') ?: 'Sleeky');

// A description of your site, shown on the homepage.
define('description', getenv('DESCRIPTION') ?: 'A quick description on why your site is so fantastic, what it does and why people should definitely start using it. Oh, and how it’s free.'); 

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo-black.png');

// Enable reCAPTCHA V3
// It is highly recommended you use reCAPTCHA V3. It will stop spam. You can get a site and secret key from here: https://www.google.com/recaptcha/admin/create
define("enableRecaptcha", getenv('RECAPTCHA_ENABLE') === false ?: filter_var(getenv('RECAPTCHA_ENABLE'), FILTER_VALIDATE_BOOLEAN) );

// reCAPTCHA V3 Site Key
define("recaptchaV3SiteKey", getenv('RECAPTCHA_SITE_KEY_V3') ?: 'SITE_KEY_V3');

// reCAPTCHA V3 Secret Key
define("recaptchaV3SecretKey", getenv('RECAPTCHA_SECERT_KEY_V3') ?: 'SECERT_KEY_V3');

// Enables the custom URL field
// true or false
define('enableCustomURL', true);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange
define('colour', getenv('BG_COLOR') ?: '#007bff');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
// define('backgroundImage', 'https://source.unsplash.com/daily');

// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "About"   =>  "https://sleeky.flynntes.com/",
    "Contact" =>  "https://sleeky.flynntes.com/",
    "Legal"   =>  "https://sleeky.flynntes.com/",
    "Admin"   =>  "/admin"
];

?>
