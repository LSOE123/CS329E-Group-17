<?php
   session_start();
   // If the request method is POST, then verify the
   // submitted username and password.

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get values submitted from the login form
      $username = $_POST["username"];
      $password = $_POST["password"];
      //echo $username . ", " . $password . "<br>";

      // beyonce is the only authorized user:  her name and
      // password are hardcoded into this file just cuz she's beyonce
      $script = $_SERVER['PHP_SELF'];

      $file = fopen ("./users.txt", "r");

      while (!feof($file)) {
        $line = fgets($file);
        if ($line == "") {
          break;
        }

        $user_pass_arr = preg_split("/:/",$line);

        //echo $user_pass_arr[0] . ", " . trim($user_pass_arr[1]) . "<br>";

        if ($username == $user_pass_arr[0] && $password == trim($user_pass_arr[1])) {
           //echo "hehe";
           $redirect = $_COOKIE["reference"];
           $_SESSION["username"] = $username;
           //$_SESSION["time"] = time()+60;
           setcookie("time", time()+120, time()+360, "/");
           fclose($file);
           header("Location: $redirect");
           die;
        }
        else {
           //echo "hello?";
           continue;
        }
      }
      echo "<p> Incorrect username or password </p>";
      fclose($file);

   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title> HW 14 </title>
      <meta charset="UTF-8">
      <meta name="description" content="Cookies">
      <meta name="author" content="Michelle Brun">

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
       <a href="covid.php" style="width:12%">Covid-19</a>
       <a href="contactus.php" style="width:12%">Contact Us</a>
       <a class="active" href='newlogin.php' style='width:12%'>Login</a>
  </div>
   <br>
   <form method="post" action="./newlogin.php">
      <div> Username:
            <input type="text" name="username" autofocus></div>
      <div> Password:
            <input type="password" name="password"> </div>
      <input type="submit" value="Login">
   </form>

</body>
</html>
