<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <title>Camping Locations in the US</title>
  <link rel="shortcut icon" href="images/nature-2022759_1280.jpg"> 
  <link rel="stylesheet" href="Styles/Camp_homepage.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
</head>

<body>
<?php
    session_start(); // start of session
    $username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : null;
    ?>

  <header>
  <img src="Images/car-4025379_1280.png" alt="RV Car Logo" height="80">
    <h1>Camping Locations in the US</h1>
    <h3><span class="shadow">Fun and relaxing camping experience</span></h3>
    <?php if ($username): ?>
        <p>Welcome, <?php echo $username; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
    <?php endif; ?>
</header>
    <nav id="nav_menu">
        <ul>
            <li><a href="camp_Homepage.php">Home</a></li>
            <li><a href="login.php">Login</a>
                <ul>
                <li><a href="Signup.php">Signup</a></li>
                </ul>
            </li>
            <li><a href="campingLocations.php" class="current">Camping Locations</a></li>
            <li><a href="Event.php">Event</a></li>
            <li><a href="Camping_method.php">camping method</a></li>
            <li><a href="About.php">About</a>
                <ul>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>
  </header>

  <main>
    <h1>Camping Locations in the US</h1>
    <!-- main.html -->
    <main>
      <div id="map" style="width: 500px; height: 500px;"></div>
      <div id="location-list"></div>
      <div id="map"></div>
      <!-- other content -->
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2963217.216099963!2d-87.73334595663088!3d33.074330361257886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5af93226febdf%3A0x6f81f2995d35185c!2sStone%20Mountain%20Park!5e0!3m2!1sen!2sus!4v1733378070053!5m2!1sen!2sus" 
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <script> 
        function initializeMap() {
          var location = { lat: 37.7749, lng: -122.4194 };
          var map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 4
          });
          var marker = new google.maps.Marker({
            position: location,
            map: map
          });
        }
      </script>
      <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDdZJYXrWY1QlH0uZlQl0hQoUaU5E2oW0w&callback=initializeMap"></script>
      </main>
      <footer>
        <p>&copy; 2024, Campdash</p>
    </footer>
</body>
</html>