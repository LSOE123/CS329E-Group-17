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
    <a class="active" href="cuisines.php" style="width:12%">Cuisines</a>
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
         setcookie("reference", "cuisines.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='logout.php' style='width:12%'>Logout</a>";
       }
       else {
         setcookie("reference", "cuisines.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

  <div id="title" class="mid">
    <h2>Cuisines</h2>
  </div>


  <div class="country_1">
    <p class="blank_column_left">
    </p>

    <img id="left_s" src="./assets/img/cuisines/rat.jpg" alt="Picture of Ratatouille"/>

    <div class="mid" id="right_l">
      <h2>Ratatouille</h2>
      <p>Originating from Nice, Ratatouille is a colorful vegetable stew well known for its inclusion in the
popular Disney movie of the same name. seasoned with a variety of herbs and spices, France is
the best place to have a taste of this unreal dish.</p>
<?php
   if (isset($_SESSION["username"])){
     echo "<p><a href='france.php'>I'm interested.</a></p>";
   }
?>
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
<?php
   if (isset($_SESSION["username"])){
     echo "<p><a href='uk.php'>I'm interested.</a></p>";
   }
?>
    </div>

    <img id="right_s" src="./assets/img/cuisines/fish.jpg" alt="Picture of Fish and Chips"/>

    <p class="blank_column_right">
    </p>
  </div>

  <div class="country_3">
    <p class="blank_column_left">
    </p>

    <img id="left_s" src="./assets/img/cuisines/padthai.jpg" alt="Picture of Pad Thai"/>

    <div class="mid" id="right_l">
      <h2>Pad Thai</h2>
      <p>Pad Thai was actually invented by the prime minister of Thailand in the 1930’s. It is a sitr fried
noodle dish that has several regional variations based on where one looks within Thailand.</p>
<?php
  if (isset($_SESSION["username"])){
    echo "<p><a href='thailand.php'>I'm interested.</a></p>";
  }
?>
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
