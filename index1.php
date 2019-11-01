<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>AMAL College</title>
<?php include_once('header-styles.php'); ?>
<link rel="stylesheet" href="css/news.css">
<style>

</style>
</head>
<body class="scrolling-box">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navBar">
  <div class="container">
    <?php include_once('burger-menu.php'); ?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto" id="priNavBar">
        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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
<div class='thetop'></div>
<!-- /Navigation -->
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="images/amal-college-building.jpg" class="hpvideo">
    <source src="images/a11.mp4" type="video/mp4">
  </video>
  <?php include_once('carousel.php'); ?>
</header>

<!-- Latest News -->
<!--
<section id="News">
  <div class="container">
    <h2 class="font-alt text-center">Latest News, Events &amp; Updates</h2>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="holder">
          <ul id="ticker01">
            <li><span>2019.10.29</span> <a href="news.php" class="font-serif">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget aliquam quam, vel imperdiet diam. Nullam eget dui velit. Nam a consectetur dolor. </a></li>
            <li><span>2019.10.02</span> <a href="news.php" class="font-serif">Donec tincidunt urna eu tincidunt lacinia. Aliquam erat volutpat. Phasellus at condimentum libero. Donec posuere nunc eu neque volutpat scelerisque. </a></li>
            <li><span>2019.09.29</span> <a href="news.php" class="font-serif">Curabitur consectetur odio dolor, a vehicula enim maximus vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</a></li>
            <li><span>2019.02.14</span> <a href="news.php" class="font-serif">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget aliquam quam, vel imperdiet diam. Nullam eget dui velit. Nam a consectetur dolor. </a></li>
            <li><span>2018.12.25</span> <a href="news.php" class="font-serif">Donec tincidunt urna eu tincidunt lacinia. Aliquam erat volutpat. Phasellus at condimentum libero. Donec posuere nunc eu neque volutpat scelerisque. </a></li>
            <li><span>2018.09.09</span> <a href="news.php" class="font-serif">Curabitur consectetur odio dolor, a vehicula enim maximus vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!-- /Latest News -->

<!-- Features -->
<section class="sblock" id="alt-features">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h2 class="font-alt">The College</h2>
        <p class="module-subtitle font-serif px-md-5">Anakapalli Merchants’ Association Lingamurthy College was established in the year 1953. The Merchants’ Association had ventured into this philanthropic work of starting a college to provide educational facilities for all secondary school leaving students of the town and nearby places. Dr.Lakkaraju Subba Rao, the then Commissioner of Andhra University granted permission to start the college. Sri S.Parthasarathi Naidu, an eminent educationalist, was the founder Principal. Sri T.Bhaskar Rao Naidu I.C.S. (Retired) helped a lot to secure this vast campus of 42 acres. ... <a class="text-link" href="about.php" role="button">learn
          more</a> </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/biology.svg" alt="Chemistry"></div>
          <h3 class="alt-features-title font-alt">Biology</h3>
          Whether you want to identify dicotyledons or draw
          mitochondria
          you name it and we have for you. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/computer.svg" alt="Computer Lab"></div>
          <h3 class="alt-features-title font-alt">Computers</h3>
          Equipped with latest and fastest processing machines
          for the
          students who want to go beyond their expectations. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/hostel.svg" alt="Hostel"></div>
          <h3 class="alt-features-title font-alt">Hostel</h3>
          Our campus has the hostel facility for the and the
          eligible and
          unpreviledged with basic emenities. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/ncc.png" alt="NCC"></div>
          <h3 class="alt-features-title font-alt">NCC</h3>
          If "Unity and Discipline" is your motto and guided by
          certain core
          values, then why wait, NCC is there for you. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/gravity.svg" alt="NCC"></div>
          <h3 class="alt-features-title font-alt">Physics</h3>
          Physics is more interesting when you know the right
          equation to solve it, get your values and theories right in our physics lab. </div>
      </div>
      <div class="col-md-6 col-lg-6 hidden-xs hidden-sm pr-5">
        <div class="alt-services-image align-center my-md-0 my-5"><img src="images/godess1.jpg"
              alt="Godess Saraswathi" class="mx-4 block-shadow img-fluid alt-services-image"></div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/chemistry.svg" alt="Chemistry"></div>
          <h3 class="alt-features-title font-alt">Chemistry</h3>
          State of the art Chemistry Lab, both for Analytical
          and
          Organic Chemistry experiments to take place. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/gym.svg" alt="Gym"></div>
          <h3 class="alt-features-title font-alt">Gym</h3>
          We all know health is wealth so we have it, best equipped
          with
          modern tools and we called it a healthy room. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/books.svg" alt="Library"></div>
          <h3 class="alt-features-title font-alt">Library</h3>
          Book worms and knowledge seeker, we dont leave you far
          away,
          get the book that have been longing for. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/nss.png" alt="NSS"></div>
          <h3 class="alt-features-title font-alt">NSS</h3>
          Interested in doing service activities, etc?
          then join our NSS programme without further ado. </div>
        <div class="alt-features-item">
          <div class="alt-features-icon"><img src="images/trophy.svg" alt="NCC"></div>
          <h3 class="alt-features-title font-alt">Sports</h3>
          Wanna play? Win accolades for college, go and play in our
          massive sports playground either indoor or outdoor. </div>
      </div>
    </div>
  </div>
</section>
<!-- /Features -->

<?php include_once('mmessage.php'); ?>
<?php include_once('footer.php'); ?>
<?php include_once('scroll.php'); ?>
<?php include_once('footer-scripts.php'); ?>
</body>
</html>
