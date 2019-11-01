<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AMAL College - About</title>
  <?php include_once('header-styles.php'); ?>
</head>
<body class="inner-pages bg-logo scrolling-box" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navBar">
    <div class="container">
      <?php include_once('burger-menu.php'); ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="priNavBar">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
          <li class="nav-item"><a class="nav-link" href="staff.php">Staff</a></li>
          <li class="nav-item"><a class="nav-link" href="news.php">News &amp; Events</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="alumni.php">Alumni</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navigation -->

  <!-- Page Title -->
  <div class='thetop'></div>
  <div class="ptitle">
    <div class="container">
      <div class="row">
        <h1>National Assessment and Accreditation Council</h1>
      </div>
      <!-- Breadcrumbs -->
      <div class="row">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item" aria-current="page">About</li>
          <li class="breadcrumb-item active" aria-current="page">NAAC</li>
        </ol>
      </div>
      <!-- /Breadcrumbs -->
    </div>
  </div>
  <!-- /Page Title -->

  <!-- second-level-nav -->
    <div class="container mt-5">
      <ul class="nav nav-pills" id="secNavPills">
        <li class="nav-item"><a class="nav-link" href="about.php">History</a></li>
        <li class="nav-item"><a class="nav-link" href="about-si.php">AMA's Sister Institutions</a></li>
        <li class="nav-item"><a class="nav-link active" href="about-naac.php">NAAC</a></li>
      </ul>
    </div>
  <!-- /second-level-nav -->

  <!-- naac -->
  <section>
    <div class="container">
      <div class="w-100">
        <h2 class="subheading w-100">Certificate of Accreditation by NAAC - B++</h2>        
      </div>
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
         <embed src="images/NACC.pdf" width="100%" height="700">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            
            <p>Though <strong>College secured NAAC Accredited B++ Grade</strong>, as a team we are striving for A+. All our efforts for the past 1 years was aimed towards acheving a better goal and a better life to students and society.</p>            
          <h6>What is NAAC?</h6>
          <p>The National Assessment and Accreditation Council (NAAC) is an organisation that assesses and accredits higher education Institutions (HEIs) in India. It is an autonomous body funded by University Grants Commission of Government of India headquartered in Bangalore.</p>
          
          <h6>NAAC grading tabel</h6>
          <p><img src="images/naac-grading.jpg" class="img-fluid" alt="NAAC Grading Table"></p>
        </div>
      </div>
    </div>
  </section>
  <!-- /naac -->


<!-- Footer Starts -->
<?php include_once('scroll.php'); ?>
<?php include_once('footer.php'); ?>
<?php include_once('footer-scripts.php'); ?>
</body>
</html>