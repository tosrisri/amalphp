<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>AMAL College - Contact Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"> -->
<link rel="stylesheet" href="baguetteBox/grid-gallery.css">
<link rel="stylesheet" href="css/amalc.css">
<script src="form.js"></script>
<style>
  input,
  textarea {
    width: 100%;
    font-size: 14px;
  }
  input[placeholder], textarea[placeholder] {
    font-size: 15px;
    color: black;
}
</style>
	<link rel="stylesheet"  href="css/scroll.css">
<?php include_once('analyticstracking.php'); ?>
</head>
<body class="inner-pages bg-logo scrolling-box" >
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navBar">
  <div class="container px-0"> <?php include_once('burger-menu.php'); ?>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto" id="priNavBar">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
        <li class="nav-item"><a class="nav-link" href="staff.php">Staff</a></li>
        <li class="nav-item"><a class="nav-link" href="news.php">News &amp; Events</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="alumni.php">Alumni</a></li>
        <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
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
      <h1>Contact Details</h1>
    </div>
    <!-- Breadcrumbs -->
    <div class="row">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Details</li>
      </ol>
    </div>
    <!-- /Breadcrumbs -->
  </div>
</div>
<!-- /Page Title -->
<!-- Grid Gallery -->
<section>
  <div class="container">
  <h2 class="w-100 mb-5">Contact Form &amp; Details</h2>
    <div class="row">  
      <div class="col-md-7 col-sm-12 col-xs-12">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- cForm -->
        <form method="post" id="reused_form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input id="name" type="text" name="Name" required maxlength="50" class="form-control"
                placeholder="Full Name">
            </div>
            <div class="form-group col-md-6">
              <input id="email" type="email" name="Email" required maxlength="50" class="form-control"
                placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <textarea id="message" name="Message" rows="3" maxlength="6000" required class="form-control"
              placeholder="Your Message"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <div class="g-recaptcha" data-sitekey="6Ld9n78UAAAAAFdlQc7vYZAZy9bT_bZPc1GfeQAK"></div>
            </div>
            <div class="form-group col-md-4">
              <button class="button-primary" type="submit">Submit</button>
            </div>
          </div>

          <div id="success_message" style="display:none">
            <h3>Form Submitted successfully!</h3>
            <p>We will get back to you soon. </p>
            <p><a href="#" onClick="javascript:window.history.back(); return false;" title="Go Back">Go back</a></p>
          </div>
          <div id="error_message" style="width:100%; height:100%; display:none; ">
            <h3>Error</h3> Sorry there was an error sending your form.
          </div>

        </form>       

        <!-- /cForm -->
      </div>
      <div class="col-md-4 offset-md-1 col-sm-12 col-xs-12">
        <address>
          AMAL College, Kotturu Junction,<br />
          Anakapalle, Visakhapatnam Dist.,<br />
          Andhra Pradesh - 531 001<br />
          <span class="text-white"><img src="images/telephone.svg" width="16" alt="Contact" /></span>: <a
            href="tel:+91 89424 220269" title="Telephone Number">(+91) 08924 – 220269</a> <br />
          <span class="text-white"><img src="images/fax.svg" width="16" alt="Contact" /></span>: (+91) 08924 –
          220634<br />
          <span class="text-white"><img src="images/email.svg" width="16" alt="E-Mail" /></span>: <a
            href="mailto:amalcollegeakp1953@gmail.com" title="Email">amalcollegeakp1953@gmail.com</a><br />
        </address>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3801.285266508092!2d82.9796544!3d17.6839792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3976d83ba84575%3A0xf81d70c8abfb67a7!2sAMAL%20College%2C%20Anakapalle%2C%20Andhra%20Pradesh%20531001!5e0!3m2!1sen!2sin!4v1572073089322!5m2!1sen!2sin"
          width='100%' height='100%' class="block-shadow" style="min-height: 400px;" frameborder="0"
          allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</section>
<!-- Grid Gallery -->
<!-- Footer Starts -->
<?php include_once('scroll.php'); ?>
<?php include_once('footer.php'); ?>
<?php include_once('footer-scripts.php'); ?>
</body>
</html>

<!-- 
<div class="container">
    <h2 class="w-100 mb-5">Contact Form &amp; Details</h2>
    <div class="row">
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="container">
          <script src='https://www.google.com/recaptcha/api.js'></script>
          <div class="form-container">
            <form method="post" id="reused_form" >
              <label for="name">Full Name:</label>
              <input id="name" type="text" name="Name" required maxlength="50">
              <label for="email">Email Address:</label>
              <input id="email" type="email" name="Email" required maxlength="50">
              <label for="message">Your Message:</label>
              <textarea id="message" name="Message" rows="3" maxlength="6000" required></textarea>
              <div class="g-recaptcha" data-sitekey="6Ld9n78UAAAAAFdlQc7vYZAZy9bT_bZPc1GfeQAK"></div>
              <button class="button-primary" type="submit" >Post</button>
            </form>
            <div id="success_message" style="display:none">
              <p>Thank You for your message. We will get back to you shortly.</p>
              <p><a href="contact.php"  title="Go Back">Go back</a></p>
            </div>
            <div id="error_message" style="width:100%; height:100%; display:none; ">
              <h3>Error</h3>
              Sorry there was an error sending your form. </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 offset-md-1 col-sm-12 col-xs-12">
        <address>
        AMAL College, Kotturu Junction,<br />
        Anakapalle, Visakhapatnam Dist.,<br />
        Andhra Pradesh - 531 001<br />
        <span class="text-white"><img src="images/telephone.svg" width="16" alt="Contact" /></span>: <a
            href="tel:+91 89424 220269" title="Telephone Number">(+91) 08924 – 220269</a> <br />
        <span class="text-white"><img src="images/fax.svg" width="16" alt="Contact" /></span>: (+91) 08924 –
        220634<br />
        <span class="text-white"><img src="images/email.svg" width="16" alt="E-Mail" /></span>: <a
            href="mailto:amalcollegeakp1953@gmail.com" title="Email">amalcollegeakp1953@gmail.com</a><br />
        </address>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3801.285266508092!2d82.9796544!3d17.6839792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3976d83ba84575%3A0xf81d70c8abfb67a7!2sAMAL%20College%2C%20Anakapalle%2C%20Andhra%20Pradesh%20531001!5e0!3m2!1sen!2sin!4v1572073089322!5m2!1sen!2sin"
          width='100%' height='100%' class="block-shadow" style="min-height: 400px;" frameborder="0"
          allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
-->