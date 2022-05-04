
<!DOCTYPE html>

<html lang="en">

<head>
   <title>Flights</title>
   <meta charset="UTF-8">
   <meta name="description" content="Flights Page">
   <meta name="author" content="Ahmad, Ahmet, Michelle">


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
    <a class="active" href="Flights.php" style="width:12%">Flights</a>
    <a href="covid.php" style="width:12%">Covid-19</a>
    <a href="contactus.php" style="width:12%">Contact Us</a>
    <?php
       session_start();
       if ($_COOKIE["time"] < time()) {
         session_destroy();
         setcookie("reference", "Flights.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='newlogin.php' style='width:12%'> Welcome " . $_SESSION["username"] . "</a>";
       }
       else {
         setcookie("reference", "Flights.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

  <div class="mid">
      <h2><a href="https://www.google.com/travel/flights">Google Flights</a></h2>
      <p style="text-align:center;"><img src="./assets/img/airplane-windows.png" alt="Picture of Airplane" class="center"/></p>
      <p>
          Click on the header hyperlink to purchase tickets through Google Flights.
          <br> We highly recommend their website due to convenience and good prices.
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
