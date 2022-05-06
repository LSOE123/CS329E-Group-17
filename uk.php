<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
   <title>Home</title>
   <meta charset="UTF-8">
   <meta name="description" content="Home Page">
   <meta name="author" content="Michelle">


   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="main.css" rel="stylesheet">
</head>


<body>

  <div class="header">
    <img src="Joy Compass-logos_transparent.png" alt="logo" />
    <h1>Joy Compass</h1>
  </div>

  <div class="topnav">
    <a href="home.php" style="width:12%">Home</a>
    <a class="active" href="destinations.php" style="width:12%">Destinations</a>
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
         setcookie("reference", "destinations.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='logout.php' style='width:12%'>Logout</a>";
       }
       else {
         setcookie("reference", "destinations.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

  <div id="title" class="mid">
    <h2>United Kingdom</h2>
  </div>

  <div class="country_1">
    <p class="blank_column_left">
    </p>

    <iframe id="left_v" src="https://www.youtube.com/embed/X8zLJlU_-60"></iframe>

    <div class="mid" id="right_l">
      <h2>London</h2>
      <p>With attractions like Big Ben and Buckingham Palace, London is home to many marvels of
human architecture. The city is a great choice for people who are interested in the unique and
rich history of England.</p>
    </div>

    <p class="blank_column_right">
    </p>
  </div>

  <div class="country_2">
    <p class="blank_column_left">
    </p>

    <div class="mid" id="left_l">
        <h2>Fish and Chips</h2>
        <p>What screams comfort food better than battered fish, fries, and a nice sauce on the side? England
  has introduced this incredible combo to the world, and London is home to some of the best spots
  in the entire world.</p>
    </div>

    <img id="right_s" src="./assets/img/cuisines/fish.jpg" alt="Picture of Fish and Chips"/>

    <p class="blank_column_right">
    </p>
  </div>


  <div class="country_2">
    <p class="blank_column_left">
    </p>

    <img id="left_s" src="./assets/img/covid/masks.jpg" alt="Picture of Mask"/>

    <div class="mid" id="right_l">
        <h2>Travel Restrictions</h2>
        <p>Vaccinated and unvaccinated travelers do not need to provide a negative COVID-19
        test and do not need to quarantine on arrival.</p>
        <p>For more information click <a href="https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19">here</a>.</p>

    </div>

    <p class="blank_column_right">
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
