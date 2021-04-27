<?php

    // phpinfo();
    $servername = "localhost";
    $database = "esucomex";
    $username = "root";
    $password = "";
    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
?>