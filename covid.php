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
       session_start();
       if ($_COOKIE["time"] < time()) {
         session_destroy();
         setcookie("reference", "covid.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='newlogin.php' style='width:12%'> Welcome " . $_SESSION["username"] . "</a>";
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
      <a href="https://www.welcometofrance.com/en/covid-19-entry-and-stay-of-foreign-talents-in-france">https://www.welcometofrance.com/en/covid-19-entry-and-stay-of-foreign-talents-in-france</a>
    </div>

    <p class="blank_column_right">
    </p>
  </div>


  <div class="country_2">
    <p class="blank_column_left">
    </p>

    <div class="mid" id="left_l">
      <h2>United Kingdom</h2>
      <a href="https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19">https://www.gov.uk/guidance/travel-to-england-from-another-country-during-coronavirus-covid-19</a>
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
      <a href="https://www.thaiembassy.com/travel-to-thailand/thailand-travel-restrictions">https://www.thaiembassy.com/travel-to-thailand/thailand-travel-restrictions</a>
    </div>

    <p class="blank_column_right">
    </p>

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
