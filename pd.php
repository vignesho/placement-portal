<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement_portal";

//Create New Database 
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}