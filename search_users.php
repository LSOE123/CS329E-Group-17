<?php
   session_start();
   error_reporting(E_ALL);
   ini_set("display_errors", "on");

   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];

   // decode the urlencoded password
   $pwd = urldecode($pwd);

   // Connect to MySQL Server

   $mysqli = new mysqli($server, $user, $pwd, $dbName);

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   } else {
      echo "";
   }

   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);

   // Retrieve data from Query String
   $username = $_GET['username'];
   $password = $_GET['password'];

   $username = $mysqli->real_escape_string($username);
   $password = $mysqli->real_escape_string($password);

   $query = "SELECT * FROM joycompass WHERE username = '$username' AND password = '$password'";

   $result = $mysqli->query($query); //or die($mysqli->error);

   if (mysqli_num_rows($result)==0) {
     $user_query = "SELECT * FROM joycompass WHERE username = '$username'";
     $user_result = $mysqli->query($user_query);
     if (mysqli_num_rows($user_result)==0) {
       echo "Please create an account. <a href='createacc.php'>Create account.</a>";
     }
     else {
       //$update = "UPDATE joycompass SET password = '$password' WHERE username = '$username'";
       //$user_result = $mysqli->query($update);
       echo "Incorrect password.";
     }
   }

   else {
     setcookie("time", time()+3600, time()+4000, "/");
     $_SESSION["username"] = $username;
     echo "Welcome $username.";

   }

?>
