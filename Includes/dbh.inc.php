<?php

$dsn = 'mysql:host=localhost;dbname=user_database';
$dbusername = 'root';
$dbpassword = 'root';

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully!";
} catch (PDOException $e) {
    // Catch any connection error and display the message
    $error_message = $e->getMessage();
    echo "Connection failed: " . $error_message;
}