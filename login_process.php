<?php
// Start a session to manage user state
session_start();

// Database connection details
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'hms';

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Retrieve username and password from POST request
$Uname = $_POST['Uname'] ?? '';
$Password = $_POST['Password'] ?? '';

// Prepare the SQL query to prevent SQL injection
$stmt = $conn->prepare("SELECT Password FROM signup1 WHERE Uname = ?");
$stmt->bind_param("s", $Uname);  // Use 's' for string
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists and verify the password
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['Password'];

    // Check if the entered password matches the hashed password in the database
    if (password_verify($Password, $hashed_password)) {
        // Set session variables or similar mechanism for maintaining login state
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $Uname;

        // Redirect to Hotel.php after successful login
        header("Location: Hotel.php");
        exit();  // Important to prevent further script execution
    }
}

// If login fails, return an appropriate message
echo 'Invalid credentials';

// Close the prepared statement and the connection
$stmt->close();
$conn->close();
?>
