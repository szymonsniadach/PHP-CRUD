<?php 

require 'mysqli.php';

$id = $_GET['id'];

$query = "DELETE FROM `users` WHERE id='$id'";

if ($result = $mysqli->query($query)) {
	echo "<p style='color: green;'>Success delete user! :)</p>";
}else{
	echo "oh no, problem with delete user :(";
}



$mysqli->close();

?>