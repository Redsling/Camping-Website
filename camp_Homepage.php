<?php
session_start();

// Check if the user is logged in
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Campdash</title>
    <link rel="shortcut icon" href="images/nature-2022759_1280.jpg">
    <link rel="stylesheet" href="Styles/Camp_homepage.css">
</head>

<body>
<?php
    session_start(); // start of session
    $username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : null;
    ?>

<header> 
    <img src="Images/car-4025379_1280.png" alt="RV Car Logo" height="80">
    <h2>Campdash</h2>
    <h3><span class="shadow">Fun and relaxing camping experience</span></h3>
    <?php if ($username): ?>
        <p>Welcome, <?php echo $username; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
    <?php endif; ?>
</header>
    <nav id="nav_menu">
        <ul>
            <li><a href="camp_Homepage.php" class="current">Home</a></li>
            <li><a href="login.php">Login</a>
                <ul>
                <li><a href="Signup.php">Signup</a></li>
                </ul>
            </li>
            <li><a href="Event.php">Event</a></li>
            <li><a href="Camping_method.php">camping method</a></li>
            <li><a href="About.php">About</a>
                <ul>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <main>  
        <section>
        <img src="Images/camp-4363073_1280.png" alt="Night camping picture">
        <h2>Introduction</h2>
        <p>Welcome to Campdash website, where you are close to have the best camping experience of your Life.
        There are plenty of spots for camping, including events where you can have fun with friends and family.</p>
        <h2>Why this site is a good choice?</h2>
        <p>Campdash organization prides itself in providing the best experience and enjoyment in the camping
        experience. The locations we provide has really good scenery and it makes this site the best choice camping,
        as company founder Hulbert Lewis says himself:</p>
        <blockquote>&ldquo;We strive to give you the best experience we can at our organization.&rdquo;</blockquote>
        </section>

        <aside>
            <h2>pictures</h2>
            <img src="Images/joe-pohle-i4ZLareLmn0-unsplash (1).jpg" alt="inside of a tent with a view">
            <img src="Images/kevin-ianeselli-ebnlHkqfUHY-unsplash.jpg" alt="Tent outside in the evening">
            <img src="Images/jesse-gardner-wTVr4HR4SBI-unsplash.jpg" alt="Tent in nature">
        </aside>
    </main>
    <footer>
        <p>&copy; 2024, Campdash</p>
    </footer>
</body>
</html>