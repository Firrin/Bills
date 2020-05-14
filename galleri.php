<!doctype html>
<html lang="da">
  <head>
    <title>Bill's Coffee - Galleri</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bill's Coffee - Galleri. Se billeder fra vores cafe og Instagram. Tryk på billederne for at komme til vores Instagram">
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
      <link rel="stylesheet" href="/css/main.css">
    <!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Yeseva+One" rel="stylesheet">
    <!-- Fontawesome ikoner cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body>
  <header id="gallerihead">

<!-- Navbar start -->
<nav class="navbar navbar-expand-sm fixed-top navbar-light transparent">
<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand navn med logo -->
<a class="navbar-brand" href="index">
<img id="nav-bill" src="images/bill.svg" width="70" height="70" class="d-inline-block align-top" alt="Logo">
</a>
<ul class="navbar-nav">
<li class="nav-item">
<a href="index" class="nav-link">Bill's Coffee</a>
</li>
</ul>

<!-- Links menu -->
<div class="collapse navbar-collapse justify-content-center" id="nav-content">
<ul class="navbar-nav">
</li>
<li class="nav-item">
  <a href="menukort" class="nav-link">Menukort</a>
  </li>
  <li class="nav-item">
  <a href="omos" class="nav-link">Om os</a>
  </li>
  <li class="nav-item">
  <a href="galleri" class="nav-link">Galleri</a>
  </li>
  <li class="nav-item">
  <a href="kontakt" class="nav-link">Kontakt</a>
</li>
<li class="nav-item">
<a href="en/en_galleri.php" class="nav-link">English <i class="fa fa-globe"> </i></a>
</li>
</ul>
</div>
</nav>
</header>
<!-- Slut på Navbar -->

<!-- Instagram feed  starter her-->
<!--http://instafeedjs.com/-->


<div class="container-fluid text-center">
  <div class="title">
  <h1 class="display-4">Galleri</h1>
  <div class="text-underline"></div>
  <p class="text-muted">Tryk på billederne for at komme til vores Instagram</p>
  </div>

	<div id="instafeed" class="row p-5"></div>
</div>

<!-- Instagram feed slut -->
<!-- Footer starter her  -->
<?php include 'include/footer.php' ?>
<!-- Footer slutter her  -->

<!-- JavaScript/Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/instafeed.min.js"></script>
<script src="js/custom.js"></script>
<!-- Scroll til toppen pil -->
<script src="js/smoothscrolling.js" type="text/javascript"></script>
<script src="js/scrollup.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
