<?php 

$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit user</title>
</head>
<body>

	<form action="" method="POST">
		<input type="text" name="login" placeholder="login"><br>
		<input type="text" name="password" placeholder="password"><br>

		<input type="submit" name="submit" value="Send">
	</form>

	<br><br>
	<a href="read-user.php">All users</a>

</body>
</html>


<?php 

require 'mysqli.php';

if (isset($_POST['submit'])) {
	
	$login = $_POST['login'];
	$password = $_POST['password'];

	$query = "UPDATE `users` SET `login`='$login',`password`='$password' WHERE id='$id'";

	if ($result = $mysqli->query($query)) {
		echo "<p style='color: green;'>Success update user! :)</p>";
	}else{
		echo "oh no, problem with update user :(";
	}

}



$mysqli->close();

?>