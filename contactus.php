<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
   <title>Contact Us</title>
   <meta charset="UTF-8">
   <meta name="description" content="Contact Us Page">
   <meta name="author" content="Yixing Ma">
   <meta name="Edited by" content="Michelle Brun">
   <link rel="stylesheet" href="title.css">
   <link href='navBar/css_for_navi.css' rel='stylesheet'>
   <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
    <a class="active" href="contactus.php" style="width:12%">Contact Us</a>
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
         setcookie("reference", "contactus.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
       else if (isset($_SESSION["username"])) {
         echo "<a href='logout.php' style='width:12%'>Logout</a>";
       }
       else {
         setcookie("reference", "contactus.php", time()+3600, "/");
         echo "<a href='newlogin.php' style='width:12%'>Login</a>";
       }
    ?>
  </div>

   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <center>
      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Group 17</p>
      </div>
      </center>

      <center>
      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/doctors/yixing.jpeg" class="img-fluid" alt="">
              <div class="social">
                <!-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a> -->
                <a href="https://www.linkedin.com/in/yixing-ma/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Yixing Ma</h4>
              <span>Major - Mathematics</span>
              <span>I have been to Australia, Japan, Vietnam, China and United States</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/doctors/ahmad.png" class="img-fluid" alt="">
              <div class="social">
                <!-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a> -->
                <a href="https://www.linkedin.com/in/ahmadelessawy"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Ahmad El Essawy</h4>
              <span>Major - Finance</span>
              <span>I have been to Egypt and United States</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/doctors/ahmet.jpg" class="img-fluid" alt="">
              <div class="social">
                <!-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a> -->
                <a href="https://www.linkedin.com/in/ahmetnalcaci/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Ahmet Nalcaci</h4>
              <span>Major - Economics</span>
              <span>I have been to Turkey, Italy, Germany, France, Netherlands, Norway, Sudan and many states in United States</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/doctors/michelle.png" class="img-fluid" alt="">
              <div class="social">
                <!-- <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a> -->
                <a href="https://www.linkedin.com/in/michelle-brun-3b5663175"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Michelle Brun</h4>
              <span>Major - Mathematics</span>
              <span>I have been to Germany, Mexico, Chile, Spain and Japan. </span>
            </div>
          </div>
        </div>

      </div>
      </center>

    </div>
  </section><!-- End Doctors Section -->

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
