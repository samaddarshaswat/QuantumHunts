<?php



include('config.php');


$google_client->revokeToken();

session_destroy();

//redirect page to index.php
header('location:index.php');

?>
