<?php

//ini_set("session.cookie_lifetime","60");
session_start();

//var_dump($_SESSION);

if (!isset($_SESSION['user_id'])) {
	header("Location: login-form.html");
	return false;
}

echo "hello ".$_SESSION['user_id'];
echo "<br><br><a href='logout.php'>Logout</a>";

 ?>