<?php

$servername = "us-cdbr-iron-east-04.cleardb.net";
$username = "bab37838680e07";
$password = "1578f9b9";
$dbname = "heroku_bd8bef7a2fdf282";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

