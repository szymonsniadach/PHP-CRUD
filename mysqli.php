<?php 


$mysqli = new mysqli('localhost', 'root', '', 'user_management');

if ($mysqli->connect_errno) {
	echo "Problem z połaczeniem z baza danych: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	return false;
}


 ?>