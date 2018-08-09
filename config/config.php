<?php 

require_once('../vendor/autoload.php');

define("CLIENT_ID", "ca_9O9Rw5orFobhEjUbDJRVfSJOd8u5jqvK"); // Your client ID: https://dashboard.stripe.com/account/applications/settings
define("SECRET_KEY","sk_live_oc46bVLC4bFTC0WulfZsbcdi"); // Your secret API KEY: https://dashboard.stripe.com/account/apikeys
define("REDIRECT_URL", "http://12.12.12.12/connected.php"); // https://dashboard.stripe.com/account/applications/settings

\Stripe\Stripe::setApiKey(sk_live_oc46bVLC4bFTC0WulfZsbcdi);
?>
