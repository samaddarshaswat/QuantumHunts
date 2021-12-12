<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('640257130640-h5s012d9jkh6acl2ek4q9e38hvildd6b.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Internship/QuantumHunts/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>