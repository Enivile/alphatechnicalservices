<?php
    // Session parameters
    session_set_cookie_params(86400);
    ini_set('session.gc_maxlifetime', 86400);
    // Start the session
    session_start();
    session_unset();
    include_once "../db_con.php";
    // Saving form data in variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Password is correct, user is authenticated
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        exit;
    } else {
        // Incorrect password or username
        $_SESSION['error'] = "Incorrect username or password";
        header("Location: ../pages/sign-in.php");
        
    }

    // Close the database connection
    $conn->close();
?>