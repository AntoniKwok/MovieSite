<?php

    $databaseHost = 'localhost';
    $databaseName = 'kasus_db';
    $databaseUsername = 'root';
    $databasePassword = '';

    $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    // echo "Connected successfully";
?>