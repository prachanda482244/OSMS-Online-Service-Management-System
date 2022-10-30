<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "osms_db";

// Create a connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Checking a connection
if ($conn->connect_error) {
    die("Error:-" . mysqli_connect_error());
}