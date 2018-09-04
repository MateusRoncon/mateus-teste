<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

