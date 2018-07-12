<?php 

require 'mysqli.php';


$query = "SELECT * FROM `users`";

if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {

		$id = $row['id'];
		$login = $row['login'];
		$password = $row['password'];

		echo "ID: ".$id."<br>";
		echo "login: ".$login."<br>";
		echo "password: ".$password."<br><br>";

		echo "<a href='http://localhost/projekty/user-management/delete-user.php?id=$id'>DELETE</a><br>";
		echo "<a href='http://localhost/projekty/user-management/update-user.php?id=$id'>EDIT</a><br><br><br><br>";
	}
}else{
	echo "oh no, problem :(";
}



$mysqli->close();

?>