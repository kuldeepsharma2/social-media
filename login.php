<?php
session_start();
$servername = "localhost";
$username = "root"; // Change as needed
$password = ""; // Change as needed
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$user = $_POST['username'];
$pass = $_POST['password'];

// Check if username exists
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    // Verify password
    if (password_verify($pass, $hashed_password)) {
        // Successful login
        session_start();
        $_SESSION['user_id'] = $id; // Store user ID in session
        header("Location: social.php"); // Redirect to welcome page
    } else {
        header("Location: index.html?message=Invalid%20password");
    }
} else {
    header("Location: index.html?message=User%20does%20not%20exist");
}

$stmt->close();
$conn->close();
?>