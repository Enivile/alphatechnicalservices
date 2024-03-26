<?php
$servername = "localhost";
$username = "Ahmed"; 
$password = "Abc@1234"; 
$database = "ats"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];

// Prepare and execute the SQL statement to insert the form data into the table
$sql = "INSERT INTO newspaper (Email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Newsletter subscribed successfully");</script>';
    echo '<script>window.location.href = "../index.php";</script>';
} else {
    echo " " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
