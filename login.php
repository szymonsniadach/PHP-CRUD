<?php 

require 'mysqli.php';

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE login='$login' AND password='$password'";

if (!isset($_POST['submit'])) {

	echo "<p style='color: red;'>Ups. Problem.</p>
	<p>You will be moved in 5 second to form</p>";
	header('refresh: 5; url=login-form.html');
	return false;
}

if (empty($login) && empty($password)) {
	echo "Fill all fields! In 5 seconds you will be move to form.";
	header('refresh: 5; url=login-form.html');
	return false;
}


if (!($result = $mysqli->query($query))) {
	echo "<p style='color: red;'>Ups. Problem ;/</p>";
	return false;
}

$row = $result->fetch_assoc();
$id = $row['id'];

if (!($login == $row['login']) && !($password == $row['password'])) {
	echo "Wrong login or password. In 5 seconds you will be move to form.";
	header('refresh: 5; url=login-form.html');
	return false;
}

$_SESSION['user_id'] = $id;
header("Location: welcome.php");


$mysqli->close();

?>