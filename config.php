<?php
// Your password: mnQ25n4eZoFKRod. King
// Your password: pqorap44oSRSDPY. Like
// King

$dbhost = "mysql.hostinger.es";
$dbuser = "u262227228_user";
$dbpass = "ajZ0uSm4Q4V";
$dbname = "u262227228_bd";
$display_errors = false;
$disable_admin_panel = false;

// Satoshistoday
// nPiPMjC8d5ZfzTi
/*
$dbhost = "mysql.hostinger.es";
$dbuser = "u756791466_user";
$dbpass = "ajZ0uSm4Q4V";
$dbname = "u756791466_db";
$display_errors = false;
$disable_admin_panel = false;
*/
// Like
/*
$dbhost = "mysql.hostinger.es";
$dbuser = "u262227228_user";
$dbpass = "ajZ0uSm4Q4V";
$dbname = "u262227228_bd";
$display_errors = false;
$disable_admin_panel = false;
*/
//faucetpay
//JQfbmmL97GUjpqD
/*
$dbhost = "mysql.hostinger.es";
$dbuser = "u966210398_user";
$dbpass = "ajZ0uSm4Q4V";
$dbname = "u966210398_bd";
$display_errors = false;
$disable_admin_panel = false;
*/

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
