<?php

session_start();

//config.php


require_once 'vendor/autoload.php';


$google_client = new Google_Client();


$google_client->setClientId('640257130640-h5s012d9jkh6acl2ek4q9e38hvildd6b.apps.googleusercontent.com');


$google_client->setClientSecret('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');


$google_client->setRedirectUri('http://localhost/Internship/QuantumHunts/index.php');


$google_client->addScope('email');

$google_client->addScope('profile');

?>
