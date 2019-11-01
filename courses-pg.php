<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AMAL College - Courses Offered for Post Graduation</title>
<?php include_once('header-styles.php'); ?>
<?php include_once('analyticstracking.php'); ?>
</head>
<body class="inner-pages bg-logo scrolling-box" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navBar">
    <div class="container">
      <?php include_once('burger-menu.php'); ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="priNavBar">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item active"><a class="nav-link" href="courses.php">Courses</a></li>
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
        <h1>Courses Offered in Post Graduation</h1>
      </div>
      <!-- Breadcrumbs -->
      <div class="row">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Courses - Post Graduation</li>
        </ol>
      </div>
      <!-- /Breadcrumbs -->
    </div>
  </div>
  <!-- /Page Title -->

  <!-- second-level-nav -->

  <div class="container mt-5">
    <ul class="nav nav-pills" id="secNavPills">
      <li class="nav-item"><a class="nav-link" href="courses.php">Intermediate</a></li>
      <li class="nav-item"><a class="nav-link" href="courses-g.php">Graduation</a></li>
      <li class="nav-item"><a class="nav-link active" href="courses-pg.php">Post Graduation</a></li>
    </ul>
  </div>

  <!-- /second-level-nav -->

  <!-- courses-i -->
<section>
  <div class="container">
    <div class="row px-3">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Group</th>
                <th scope="col">Medium</th>
                <th scope="col">Intake Number</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>M.Sc (Organic Chemistry)</td>
                <td>English</td>
                <td>36</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>M.Sc (Analytical Chemistry)	</td>
                <td>English</td>
                <td>36</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>M.Com	</td>
                <td>English</td>
                <td>100</td>
              </tr>
              
            </tbody>
          </table>
    </div>
  </div>
</section>
  <!-- /courses-i -->

<div class="container">
  <div class="row px-3">
    <h4 class="w-100">Post Graduation Buildings</h4>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <img src="images/pg1.jpg" class="img-fluid rounded block-shadow mx-auto my-3" alt="PG Building">
        <p class="font-serif text-center">M.Sc and Administrative Blocks</p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <img src="images/pg2.jpg" class="img-fluid rounded block-shadow mx-auto my-3" alt="PG Building">
        <p class="font-serif text-center">M.Com Blocks</p>
      </div>
    
    
  </div>
</div>


<!-- Footer Starts -->
<?php include_once('scroll.php'); ?>
<?php include_once('footer.php'); ?>
<?php include_once('footer-scripts.php'); ?>
</body>
</html>