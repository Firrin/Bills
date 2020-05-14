<!doctype html>
<html lang="en">
  <head>
    <title>Bill's Coffee - Contact</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bill's Coffee - Come and take a look inside. Send a mail. See our opening hours for the cafe.">
    <!-- favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#f17525">
    <meta name="theme-color" content="#f17525">
      <!-- favicon slut  -->

    <!-- Bootstrap CSS cdn -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Yeseva+One" rel="stylesheet">
    <!-- Fontawesome ikoner cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

<header id="kontaktheader">
<!-- Navbar start -->
<nav class="navbar navbar-expand-sm fixed-top navbar-light transparent">
<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand navn med logo -->
<a class="navbar-brand" href="en_index.php">
<img id="nav-bill" src="../images/bill.svg" width="70" height="70" class="d-inline-block align-top" alt="Logo">
</a>
<ul class="navbar-nav">
<li class="nav-item">
<a href="en_index.php" class="nav-link">Bill's Coffee</a>
</li>
</ul>

<!-- Links menu -->
<div class="collapse navbar-collapse justify-content-center" id="nav-content">
<ul class="navbar-nav">
</li>
<li class="nav-item">
  <a href="en_menukort.php" class="nav-link">Menu</a>
  </li>
  <li class="nav-item">
  <a href="en_omos.php" class="nav-link">About</a>
  </li>
  <li class="nav-item">
  <a href="en_galleri.php" class="nav-link">Gallery</a>
  </li>
  <li class="nav-item">
  <a href="en_kontakt.php" class="nav-link">Contact</a>
</li>
<li class="nav-item">
<a href="../kontakt.php" class="nav-link">Danish <i class="fa fa-globe"> </i></a>
</li>
</ul>
</div>
</nav>
<!-- Slut på Navbar -->
</header>

<!-- Google maps  -->
<div class="container-fluid text-center">
  <!-- Google maps Tittel -->
  <div class="title">
  <h1 class="display-4">Take a look inside Bill's Coffee</h1>
  <div class="text-underline"></div>
  <p id="Georgia" class="text-muted"></p>
  </div>
  <!-- Google Tittel slut -->
  <div class="row">
    <div class="col">
    <div class="map-responsive">
   <iframe src="https://www.google.com/maps/embed?pb=!4v1513199937634!6m8!1m7!1siV24MickJFkAAAQvxWaIQQ!2m2!1d56.15754750496734!2d10.20099491739916!3f333.990967733102!4f4.198980153173082!5f0.5970117501821992" width="1500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
<!-- Google maps slutter  -->

<!-- Kontakt form -->
<section id="contact" class="container-fluid text-center">
<div class="row p-5">
  <div class="col-md-6 col-sm-12 col-lg-6">
    <h1>Contact us</h1>
    <div class="text-underline"></div>
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter a name.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <input class="form-control" id="email" type="email" placeholder="Email Adress" required data-validation-required-message="Please enter an email">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <input class="form-control" id="phone" type="tel" placeholder="Phone number">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please write a message"></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-block" id="sendMessageButton">Send</button>
      </div>
    </form>
</div>
<div class="col-md-6 col-sm-12 col-lg-6">
  <div>
    <h1>Opening hours</h1>
    <div class="text-underline"></div>
    <h2 class="p-4">Monday-Friday: 07:30-18:00</h2></div>
  <div>
    <h2 class="p-4">Saturday: 09:00-18:00</h2></div>
  <div>
    <h2 class="p-4">Sunday: 09:00-17:00</h2></div>
</div>
</div>
</section>

<!-- Kontakt form slut  -->


<!-- Footer starter her  -->
<?php include '../include/en_footer.php' ?>
<!-- Footer slutter her  -->

<!-- JavaScript/Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Scroll til toppen pil -->

<script src="js/smoothscrolling.js" type="text/javascript"></script>
<script src="js/scrollup.js" type="text/javascript"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
