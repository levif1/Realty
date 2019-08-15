<?php require_once('./includes/head.php'); ?>
<!-- navigation -->
<?php require_once('./includes/nav.php'); ?>


<!-- image banner -->
<img src="picts/streetCropped.jpg" class="img-fluid" alt="Home Page">
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
          <img src="picts/kitchen.jpg" class="img-fluid" alt="Grocery Basket">
        </div>
        <div class="col-md-12 col-lg-6 titlePadding">
          <h1 id="titleBlock">Ruffner Rentals</h1>
          <img src="picts/LogoWhite.png" id="logo" alt="Logo">
        </div>
      </div>
      <div class="row infoPadding">
        <div class="col-md-12 col-lg-6 textPadding">
          <h3 class="hPadding">Your Home Awaits</h3>
          <p class="pPadding">Whether you're looking for a community to surround your life in or a home that fits your needs, you'll find just what you need at Ruffner Rentals. Our homes provide the highest priority for a comfortable living and excellent customer service. </p>
        </div>
        <div class="col-md-12 col-lg-6 customImage2 contentPadding">
          <img src="picts/house.jpg" class="img-fluid" alt="Home">
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


<?php require_once('./includes/footer.php'); ?>