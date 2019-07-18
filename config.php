<?php
session_start();
/*require_once('GoogleAPI/vendor/autoload.php');*/
require_once __DIR__ . '/vendor/autoload.php';

$gclient=new Google_Client();
$gclient->setClientId("764871000404-ophdt8lr47a963rlp329ptqq33jlcggl.apps.googleusercontent.com");
$gclient->setClientSecret("LsZerHWWU3Y0VHt_g3tbLbKL");
$gclient->setApplicationName("login User");
$gclient->setRedirectUri("http://localhost/gmail/callback.php");
/*$gclient->addScope( scope_or_scopes : "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
*/
$gclient->setScopes(array('https://www.googleapis.com/auth/userinfo.email'));
?>