<?php
$servername = "localhost";
$username = "Ahmed"; 
$password = "Abc@1234"; 
$database = "ats";



$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
    echo '<script>';
    echo 'alert("Error connecting to the database: ' . $e->getMessage() . '");';
    echo '</script>';
}


