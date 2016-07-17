<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "dastawezat";

// Create connection
$con = mysqli_connect($hostname, $username, $password, $db_name);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
