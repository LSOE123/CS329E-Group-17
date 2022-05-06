<?php session_start();

$username = $_SESSION["username"];

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
?>

<!DOCTYPE html>
<html>
   <head>
      <title> Login </title>
      <meta charset="UTF-8">
      <meta name="description" content="Cookies">
      <meta name="author" content="Michelle Brun">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="main.css" rel="stylesheet">
   </head>

<body>
  </script>
  <div class="header">
    <img src="Joy Compass-logos_transparent.png" alt="logo" />
    <h1>Joy Compass</h1>
  </div>

  <div class="topnav">
      <a href="home.php" style="width:12%">Home</a>
      <a href="destinations.php" style="width:12%">Destinations</a>
      <a href="cuisines.php" style="width:12%">Cuisines</a>
      <a href="Flights.php" style="width:12%">Flights</a>
      <a href="covid.php" style="width:12%">Covid-19</a>
      <a href="contactus.php" style="width:12%">Contact Us</a>
      <a class="active" href='newlogin.php' style='width:12%'>Login</a>
  </div>
  <br>

  <div class="mid">
    <?php echo "Thank you! You've been logged out, " . $username . ".";  ?>
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
