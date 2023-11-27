<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'earth_galle';

    // connect database
    $conn = new mysqli($server, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
?>