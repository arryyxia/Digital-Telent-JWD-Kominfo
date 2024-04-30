<?php 
// Database connection details
$host = 'your_host';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Create connection
$link = new mysqli($host, $username, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>