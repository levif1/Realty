<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ruffner Rentals</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/49d100ca5a.js"></script>
  <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- navigation -->
<nav class="navbar navbar-expand-md sticky-top color1">
  <div class="container-fluid nav-item">
    <img src="resources/LogoWhite.png" class="navbar-brand center" alt="Logo">
    <p class="navbar-brand d-none d-xl-block d-none d-lg-block">Ruffner Rentals</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          <li class="nav-item">
            <a class="nav-link" href="listing/listing.php">Listings</a>
          <li class="nav-item">
            <a class="nav-link" href="#">Apply</a>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
      </div>
  </div>
</nav>

<!-- image banner -->
<img src="resources/streetCropped.jpg" class="img-fluid" alt="Home Page">

<!-- banner -->
<div class="container-fluid">
  <div class="bannerShadow">
  <div class="row customBanner">&nbsp;</div>
  </div>
</div>

<!-- jumbotron -->
<div class="container-fluid padding bannerFont">
  <div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-shopping-cart fa-5x"></i>
        <p>Near Grocery Stores</p>
      </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-home fa-5x"></i>
        <p>Comfy Homes Made for You</p>
      </div>
    <div class="col-sm-12 col-md-4">
      <i class="fas fa-school fa-5x"></i>
        <p>Near Great Schools for Children</p>
      </div>
</div>
</div>


<!-- info section -->
<div class="backgroundImage">
<div class="container-fluid overallPadding">
      <div class="row text-center infoPadding">
        <div class="col-md-12 col-lg-6 customImage1 contentPadding">
          <img src="resources/kitchen.jpg" class="imageBorder img-fluid" alt="Grocery Basket">
        </div>
        <div class="col-md-12 col-lg-6 titlePadding">
          <h1 id="titleBlock">Ruffner Rentals</h1>
          <img src="resources/LogoWhite.png" id="logo" alt="Logo">
        </div>
      </div>
      <div class="row infoPadding">
        <div class="col-md-12 col-lg-6 textPadding">
          <h3 class="hPadding">Your Home Awaits</h3>
          <p class="pPadding">Whether you're looking for a community to surround your life in or a home that fits your needs, you'll find just what you need at Ruffner Rentals. Our homes provide the highest priority for a comfortable living and excellent customer service. </p>
        </div>
        <div class="col-md-12 col-lg-6 customImage2 contentPadding">
          <img src="resources/house.jpg" class="imageBorder img-fluid" alt="Home">
        </div>
      </div>
    </div>
</div>
<!-- spacer -->
<div class="backgroundImage">
<div class="container-fluid padding spacer">
  <div class="customBanner2">&nbsp;</div>
</div>
</div>

<!-- contact -->
<div class="backgroundImage">
<div class="contain contactUs">
  <div class="marginControl">
  <div class="row contactTitle">
    <div class="col-lg-4 col-sm-6">&nbsp;</div>
    <div class="col-lg-4 d-none d-xl-block d-none d-lg-block">&nbsp;</div>
    <h1 class="col-lg-4 col-sm-6 titleContact">Contact Us</h1>
  </div>

<form action="">
<div class="" id="contactUs">
<div class="row">
  <div class="col-lg-12 col-xl-3 paddingText">
      <div class="gridSpacing row">
        <div class="col-12 span1">
          <input class="contactGrid" type="text" name="fullName" placeholder="Full Name">
        </div>
      </div>
      <div class="gridSpacing row">
        <div class="col-12 span1">
          <input class="contactGrid" type="text" name="emailAddress" placeholder="Email Address">
        </div>
      </div>
      <div class="gridSpacing row">
        <div class="col-12 span1">
          <input class="contactGrid" type="text" name="phoneNumber" placeholder="Phone Number">
        </div>
      </div>
</div>
<div class="col-lg-12 col-xl-9 textInput">
  <div class="gridSpacing span2">
    <textarea class="contactGrid textBox" name="Message" placeholder="Message..." rows="10"></textarea>
  </div>
  </div>
</div>
</div>
<div class="span3 row">
  <div class="col-lg-4">&nbsp;</div>
  <div class="col-lg-4">&nbsp;</div>
<input type="submit" value="SUBMIT" class="col-lg-4 btn btn-lg btn-primary">
</div>
</div>
</div>
</div>

<!-- connect -->
<div class="connectBanner">
  <div class="row containConnect text-center">
    <div class="dol-xs-12 col-sm-4 opacityConnect">
    <i class="fab fa-facebook-square facebookIcon"></i>
  </div>
  <div class="col-xs-12 col-sm-4 opacityConnect">
    <i class="fab fa-twitter-square twitterIcon"></i>
  </div>
  <div class="col-xs-12 col-sm-4 opacityConnect">
    <i class="fab fa-instagram instagramIcon"></i>
  </div>
</div>
</div>

<!-- footer -->
<div class="footerContainer">
  <div class="footerSpacing row">
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2" href="#">Resident Login</div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2" href="#">Application Login</div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2" href="#">Contact Us</div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2" href="#">Create an Account</div>
      <a class="break d-none d-sm-block">|</a>
  </div>
</div>


<!-- -->

<!-- -->

<!-- -->

<!-- -->

<!-- -->

<!-- -->

<!-- -->

<!-- -->
