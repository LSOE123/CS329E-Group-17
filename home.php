<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
   <title>Home</title>
   <meta charset="UTF-8">
   <meta name="description" content="Home Page">
   <meta name="author" content="Ahmad, Ahmet, Michelle">


   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="main.css" rel="stylesheet">
   <script src = "slideShow.js" defer></script>
</head>


<body>

  <div class="header">
    <img src="Joy Compass-logos_transparent.png" alt="logo" />
    <h1>Joy Compass</h1>
  </div>

  <div class="topnav">
      <a class="active" href="home.php" style="width:12%">Home</a>
      <a href="destinations.php" style="width:12%">Destinations</a>
      <a href="cuisines.php" style="width:12%">Cuisines</a>
      <a href="Flights.php" style="width:12%">Flights</a>
      <a href="covid.php" style="width:12%">Covid-19</a>
      <a href="contactus.php" style="width:12%">Contact Us</a>
      <?php
         if ($_COOKIE["time"] < time()) {
           $_SESSION = array();
           if (ini_get("session.use_cookies")) {
               $params = session_get_cookie_params();
               setcookie(session_name(), '', time() - 42000,
                   $params["path"], $params["domain"],
                   $params["secure"], $params["httponly"]
               );
           }
           session_destroy();
           setcookie("reference", "home.php", time()+3600, "/");
           echo "<a href='newlogin.php' style='width:12%'>Login</a>";
         }
         else if (isset($_SESSION["username"])) {
           echo "<a href='logout.php' style='width:12%'>Logout</a>";
         }
         else {
           setcookie("reference", "home.php", time()+3600, "/");
           echo "<a href='newlogin.php' style='width:12%'>Login</a>";
         }
      ?>
      <!-- <a href="newlogin.php" style="width:12%">Login</a> -->
  </div>

  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 8</div>
    <img src="./assets/img/london.jpg" style="width:60%">
    <!-- <div class="text">Caption Text</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 8</div>
    <img src="./assets/img/turkey.jpg" style="width:60%">
    <!-- <div class="text">Caption Two</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 8</div>
    <img src="./assets/img/germany.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="./assets/img/dubai.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="./assets/img/newyork.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="./assets/img/Australia.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="./assets/img/egypt.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="./assets/img/tokyo.jpg" style="width:60%">
    <!-- <div class="text">Caption Three</div> -->
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
</div>

  <div class="mid">
      <h2>What is Joy Compass</h2>
          <p>
              <b>Joy Compass</b> is your one stop guide to a dileghtful & fulfilling travel experience.
              <br> over to the destinations tab to explore the various locations we recommend.
          </p>
  </div>

  <footer>
  	<br>
  	<span>&copy; Joy Compass | </span>
      <span>Designed by Group 17 | </span>
      <span>
      Page Last Updated:
      <script>
  		document.write(document.lastModified);
      </script>
      </span>
  </footer>

</body>
</html>
