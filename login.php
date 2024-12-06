<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="passwd">Password:</label>
        <input type="password" id="passwd" name="passwd" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="Signup.php">Sign up here</a>.</p>
</body>
</html>
