<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$dbname = "admission";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
