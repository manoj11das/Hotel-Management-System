<?php
// Database connection details
$servername = 'localhost';
$username = 'root';
$password = ''; // Your MySQL password
$database = 'hms'; // Your database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve form data
$Fname = $_POST['Fname'] ?? '';
$Lname = $_POST['Lname'] ?? '';
$Uname = $_POST['Uname'] ?? '';
$Password = $_POST['Password'] ?? '';
$dob = $_POST['dob'] ?? '';

// Insert the data into the 'signup' table
$stmt = $conn->prepare("INSERT INTO signup1 (Fname, Lname, Uname, Password, dob) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $Fname, $Lname, $Uname, $Password, $dob);

if ($stmt->execute()) {
    echo 'Signup successful';
} else {
    // Handle unique constraint violation or other errors
    echo 'Error: ' . $stmt->error;
}

// Close the prepared statement and the connection
$stmt->close();
$conn->close();
?>
