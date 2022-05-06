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

   // Escape User Input to help prevent SQL Injection
   //$lastName = $mysqli->real_escape_string($lastName);
   //$firstName = $mysqli->real_escape_string($firstName);

   //build query
   //echo "<code>...Building query</code><br>";
   $query = "SELECT * FROM joycompass WHERE username = '$username' AND password = '$password'";
   //SELECT * FROM joycompass WHERE username = "goodbye" AND password = "hello"

   //Execute query
   //echo "<code>...Executing query</code><br><br>";
   $result = $mysqli->query($query); //or die($mysqli->error);

   if (mysqli_num_rows($result)==0) {
     $user_query = "SELECT * FROM joycompass WHERE username = '$username'";
     $user_result = $mysqli->query($user_query);
     if (mysqli_num_rows($user_result)==0) {
       $new = "'$username', '$password'";
       $insert = "INSERT INTO joycompass VALUES ($new)";
       $insert_result = $mysqli->query($insert);
       if (!$insert_result) {
         echo "Registration failed. Try Again";
       }
       else{
         setcookie("time", time()+3600, time()+4000, "/");
         $_SESSION["username"] = $username;
         echo "New user registered. Welcome $username.<br>";
       }
     }
     else {
       echo "User already exists. <a href='login.php'>Login.</a>";

     }
   }

   else {
     echo "User already exists. <a href='login.php'>Login.</a>";
   }



?>
