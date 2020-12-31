<?php
// Connection Information
$servername = "localhost";
$username   = "user";//sql username
$password   = "Password123#@!";//sql password
$dbname     = "jobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
