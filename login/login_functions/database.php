<?php
function db_connect($query){
    // Connection Information
    $servername = "localhost";
    $username = "user";//sql username
    $password = "Password123#@!";//sql password
    $dbname = "jobs";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $sql = $query;

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
