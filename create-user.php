<?php 

require 'mysqli.php';

$login = $_POST['login'];
$password = $_POST['password'];

$query = "INSERT INTO `users`(`login`, `password`) VALUES ('$login', '$password')";
$query2 = "SELECT `login` FROM `users` WHERE login='$login'";
$result2 = $mysqli->query($query2);
$loginExist = $result2->num_rows;

if ($loginExist > 0) {
	echo "User is already exist! Change login to other.";
	return false;
}

if (empty($login) && empty($password)) {

	echo "<p style='color: red;'>Fill all fields</p>
	<p>You will be moved in 5 second to form</p>";
	
	header('refresh: 5; url=form.html');
	return false;

}

if (!($result = $mysqli->query($query))) {
	echo "<p style='color: red;'>Problem with add user :( </p>";
	return false;		
}
	
echo "<p style='color: green;'>Success add user!!! :D </p>";



$mysqli->close();

?>