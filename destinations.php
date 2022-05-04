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
       session_start();
       if ($_COOKIE["time"] < time()) {
         session_destroy();
         setcookie("reference", "destinations.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='newlogin.php' style='width:12%'> Welcome " . $_SESSION["username"] . "</a>";
       }
       else {
         setcookie("reference", "destinations.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

  <div id="title" class="mid">
    <h2>Destinations</h2>
  </div>


  <div class="country_1">
    <p class="blank_column_left">
    </p>
    <tr>
    <td>
    <iframe id="left_v" src="https://www.youtube.com/embed/oz45k8EYblk"></iframe>
    </td>
    <td>
    <div class="mid" id="right_t">
      <h2>Paris, France</h2>
      <p>Known as both the City of Love and Lights, Paris is the most popular tourist destination in
Europe. This city is well renowned for not only its stunning views but also world-class cuisine.</p>
    </div>
</td>
    <p class="blank_column_right">
    </p>
  </div>


  <div class="country_2">
    <p class="blank_column_left">
    </p>
<table>
<tr>
<td>
    <div class="mid" id="left_l">
      <h2>London, United Kingdom</h2>
      <p>With attractions like Big Ben and Buckingham Palace, London is home to many marvels of
human architecture. The city is a great choice for people who are interested in the unique and
rich history of England.</p>
    </div>
    </td>
<td>
    <iframe id="left_v" src="https://www.youtube.com/embed/X8zLJlU_-60"></iframe>
    </td>
</tr>
    <p class="blank_column_right">
    </p>
  </div>

  <div class="country_3">
    <p class="blank_column_left">
    </p>
<tr>
<td>
    <iframe id="left_v" src="https://www.youtube.com/embed/fA-ZJnTDO2g"></iframe>
</td>
<td>
    <div class="mid" id="right_l">
      <h2>Bangkok, Thailand</h2>
      <p>Bangkok is the most popular destination in the world, and for good reason. With its abundant
		 parks and beaches, this destination is ideal for people who want to really get out there and
		 experience mother nature.</p>
    </div>
    </td>
    </tr>
    </table>

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
