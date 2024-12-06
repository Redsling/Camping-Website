<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST["username"]);
    $password = trim($_POST["passwd"]);
    $email = trim($_POST["email"]);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format. Please provide a valid email.");
    }

    // Hashing the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Including the database connection
        require_once "dbh.inc.php";

        // Prepare the SQL query
        $query = "INSERT INTO users (username, passwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query); // Using $pdo as per dbh.inc.php

        // Execute the query with the provided data
        $stmt->execute([$username, $hashedPassword, $email]);

        // Clean up
        $stmt = null;

        // Redirect to the homepage page with a success message
        header("Location: ../Camp_homepage.php?signup=success");
        exit();
    } catch (PDOException $e) {
        // Handle potential errors gracefully
        if ($e->getCode() == 23000) { // Duplicate entry (Integrity constraint violation)
            die("A user with this email or username already exists. Please try again.");
        } else {
            die("An error occurred. Please try again later.");
        }
    }
} else {
    // Redirect back to the signup page if accessed incorrectly
    header("Location: ../Signup.php");
    exit();
}
