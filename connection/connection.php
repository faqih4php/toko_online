<?php 
    // make connection to database

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "toko_online_db";

    $conn = new mysqli($host, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>