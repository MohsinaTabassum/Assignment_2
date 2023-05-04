<?php
// Include the config.php file
require_once 'config.php';

// Handle registration form submission
if (isset($_POST['register'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    // Perform a MySQL query to insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: dashboard.php");
        // Redirect to a success page or perform other actions
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a MySQL query to retrieve user with matching credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location: dashboard.php");
        // Redirect to a success page or perform other actions
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>
