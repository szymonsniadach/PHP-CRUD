<?php 

session_start();
session_destroy();

echo "You are logged out! In 5 seconds you will be move.";
header('refresh: 5; url=login-form.html');






 ?>