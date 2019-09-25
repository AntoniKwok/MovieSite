<?php

    $databaseHost = 'localhost'; //nama host
    $databaseName = 'testing'; //nama database
    $databaseUsername = 'root'; //username phpmyadmin
    $databasePassword = ''; //password phpmyadmin   

    $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } 
    // echo "Connected successfully";
?>