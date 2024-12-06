<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'dbh.inc.php';

    $username = trim($_POST['username']);
    $password = trim($_POST['passwd']);

    try {
        // Check if the username exists
        $query = "SELECT username, passwd FROM users WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashedPassword = $user['passwd'];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, start the session
                $_SESSION['username'] = $username;
                header("Location: ../camp_Homepage.php");
                exit();
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    exit();
}
