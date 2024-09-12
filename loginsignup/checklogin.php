<?php
// Start the session
session_start();

// Include the database connection
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the email exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email exists, fetch the data
        $user = $result->fetch_assoc();

        // Verify the password
        if ($password==$user['password']) {
            // Password matches, create a session
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            // Redirect to another file (welcome.php)
            header("Location: /website/html/homepage.php");
            exit();
        } else {
            // Password doesn't match
            echo "Invalid password! try $password";
        }
    } else {
        // Email not found in the database
        echo "Email not found!";
    }
}

// Close the connection
$conn->close();
?>
