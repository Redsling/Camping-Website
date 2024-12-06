<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Page</title>
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
    <form action="Includes/formhandler.inc.php" method="post">
        <h2>Signup</h2>
        
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="passwd" id="password" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <button type="submit">Signup</button>
    </form>
</body>
</html>
