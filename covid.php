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
    <a href="destinations.php" style="width:12%">Destinations</a>
    <a href="cuisines.php" style="width:12%">Cuisines</a>
    <a href="Flights.php" style="width:12%">Flights</a>
    <a class="active" href="covid.php" style="width:12%">Covid-19</a>
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
         setcookie("reference", "covid.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='logout.php' style='width:12%'>Logout</a>";
       }
       else {
         setcookie("reference", "covid.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

  <div id="title" class="mid">
    <h2>Covid-19</h2>
    <p>
      Below, we have linked websites that can help you understand the current covid situation in whatever country you choose to travel to
    </p>
  </div>


  <div class="country_1">
    <p class="blank_column_left">
    </p>

    <img id="left_s" src="./assets/img/covid/covid.jpg" alt="Picture of COVID"/>

    <div class="mid" id="right_l">
      <h2>France</h2>
      <p>Vaccinated travelers must prove that they have received all prescribed doses of
      an approved vaccine.</p>
      <p>Unvaccinated travelers must provide a negative PCR test taken no more than 72
      hours before the arrival date, a negative antigen test taken no more than 48
      hours before the arrival date, or a certificate of recovery dated more than
      eleven days and less than six months ago.</p>
      <p>For more information click <a href="https://www.welcometofrance.com/en/covid-19-entry-and-stay-of-foreign-talents-in-france">here</a>.</p>
    </div>

    <p class="blank_column_right">
    </p>
  </div>


  <div class="country_2">
    <p class="blank_column_left">
    </p>

    <div class="mid" id="left_l">
      <h2>United Kingdom</h2>
      <p>Vaccinated and unvaccinated travelers do not need to provide a negative COVID-19
      test and do not need to quarantine on arrival.</p>
      <p>For more information click <a href="https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19">here</a>.</p>

    </div>

    <img id="right_s" src="./assets/img/covid/masks.jpg" alt="Picture of Mask"/>

    <p class="blank_column_right">
    </p>
  </div>

  <div class="country_3">
    <p class="blank_column_left">
    </p>

    <img id="left_s" src="./assets/img/covid/vaccine.jpg" alt="Picture of Vaccine"/>

    <div class="mid" id="right_l">
      <h2>Thailand</h2>
      <p>All travelers must apply a Thailand Pass before travel. To apply all travelers
      need to provide passport profile page and need to obtain an approved medical insurance.</p>
      <p>Vaccinated travelers must provide proof of vaccination.</p>
      <p>Unvaccinated travelers need to provide a negative PCR test taken no more than 72
      hours before the arrival date, or book at an approved quarantine hotel and take
      a pre-booked PCR test on arrival.</p>
      <p>For more information click <a href="https://www.thaiembassy.com/travel-to-thailand/thailand-travel-restrictions">here</a>.</p>
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
