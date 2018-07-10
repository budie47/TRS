<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1035858940301-hfvlos712r68pbab5ubrbe5mo3mk709m.apps.googleusercontent.com';
$clientSecret = 'uPQcMoyaFhOLJ8Ph1KUJoS4e';
$redirectURL = 'http://localhost/trs/TRS/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to TRS');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>