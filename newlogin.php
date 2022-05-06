<?php session_start(); ?>

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
  <script language = "javascript" type = "text/javascript">

       //Browser Support Code
       function ajaxFunction(server,user,pwd,dbName){
          var ajaxRequest;  // The variable that makes Ajax possible!

          ajaxRequest = new XMLHttpRequest();

          // Create a function that will receive data sent from the server and will update
          // the div section in the same page.

          ajaxRequest.onreadystatechange = function(){
             if(ajaxRequest.readyState == 4){
                var ajaxDisplay = document.getElementById('ajaxDiv');
                ajaxDisplay.innerHTML = ajaxRequest.responseText;
             }
          }

          // Now get the value from user and pass it to server script.

          var username = document.getElementById('username').value;
          var password = document.getElementById('password').value;
          if (username == "" || password == ""){
             window.alert("Please fill out all fields.");
          }
          else {
            var queryString = "?password=" + password ;

            queryString +=  "&username=" + username + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;

            ajaxRequest.open("GET", "search_users.php" + queryString, true);
            ajaxRequest.send(null);
          }
       }

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

<?php
   //session_start();

   $server = "spring-2022.cs.utexas.edu";
   $user = "cs329e_bulko_michelb";
   $pwd = "Clip9Brake3combat";
   $dbName = "cs329e_bulko_michelb";

   $pwd = urlencode($pwd);

   $mysqli = new mysqli ($server, $user, $pwd, $dbName);

   echo "<h2> Login </h2>";

   echo "<form id=\"textForm\" method = \"get\" > <table> <tr><td>Username:</td>";
   echo "<td> <input type = 'text' id = 'username' autofocus required> </td>";
   echo "</tr> <tr>";

   echo "<td>Password:</td>";
   echo "<td> <input type = 'password' id = 'password' required> </td>";
   echo "</tr> <tr> <td>";

   echo "<input type = \"button\" onclick = \"ajaxFunction('$server','$user',
        '$pwd','$dbName')\" value = \"login\"/> ";
   echo "<input type = \"reset\" value = \"reset\"> <br><br> ";
   echo "</td> </tr> </table> </form>";

?>

   <div id = 'ajaxDiv'> Please log in or <a href="createacc.php"> create account.</a> </div>

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
