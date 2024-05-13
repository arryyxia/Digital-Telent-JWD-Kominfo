<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_jwd';

    // Create connection
    $link = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
?>