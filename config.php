<?php
// Your password: mnQ25n4eZoFKRod. Make sure to save it
$dbhost = "mysql.hostinger.es";
$dbuser = "u112085043_user";
$dbpass = "ajZ0uSm4Q4V";
$dbname = "u112085043_bd";
$display_errors = false;
$disable_admin_panel = false;

$connection_options = array(
    'disable_curl' => false,
    'local_cafile' => false,
    'force_ipv4' => false    // cURL only
);

// dsn - Data Source Name
// if you use MySQL, leave it as is
// more information:
// http://php.net/manual/en/pdo.construct.php
$dbdsn = "mysql:host=$dbhost;dbname=$dbname";
