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
  <link href="../style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top color1">
  <div class="container-fluid nav-item">
    <img src="../resources/LogoWhite.png" class="navbar-brand center" alt="Logo">
    <a class="navbar-brand d-none d-xl-block d-none d-lg-block">Ruffner Rentals</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          <li class="nav-item">
            <a class="nav-link active" href="listing.php">Listings</a>
          <li class="nav-item">
            <a class="nav-link" href="#">Apply</a>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
      </div>
  </div>
</nav>


<!-- Banner Image -->
<img src="../resources/listingBanner.jpg" class="img-fluid imageBanner" alt="Home Page">


<!-- Filter Banner -->
<div class="container-fluid bannerFont">
  <div class="row text-center padding">
    <div class="vertAlignButton">
      <h3 class="vertAlignButton">Filters:</h3>
    </div>
      <div class="dropdown vertAlignButton">
        <form>
          <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Bedrooms</option>
                <option value="One">1</option>
                <option value="Two">2</option>
                <option value="Three">3+</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="vertAlignButton">
        <form>
          <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Bathrooms</option>
                <option value="One">1</option>
                <option value="Two">2</option>
                <option value="Three">3+</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="vertAlignButton">
        <div class="checkbox vertAlignButton">
          <label><input class="" type="checkbox" value="">Pets Allowed</label>
        </div>
      </div>
  </div>
</div>



<!-- Listing -->
<div class="container-fluid">
  <div class="containListing">
    <div class="Listing">
      <div class="adjustMargin row">
        <div class="col-lg-12 col-xl-4 listingContents">
          <img src="../resources/fillerHouse.jpg" class="img-fluid imageBorder displayImage" alt="House">
        </div>
        <div class="col-lg-12 col-xl-8 listingContents">
          <table class="alignVertical">
            <tr class="listingText"><td class="textListing">*Street Address*&nbsp;</td></tr>
            <tr class="listingText"><td class="textListing">*City*&nbsp;</td></tr>
            <tr class="listingText"><td class="textListing">*State*&nbsp;</td></tr>
            <tr class="listingSpace"><td>&nbsp;</td></tr>
            <tr class="listingText"><td class="textListing">Beds:&nbsp;</td></tr>
            <tr class="listingText"><td class="textListing">Baths:&nbsp;</td></tr>
            <tr class="listingText"><td class="textListing">Pets Allowed:&nbsp;</td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer -->

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

<div class="footerContainer">
  <div class="footerSpacing row">
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2"><a href="#" class="nav-link">Resident Login</a></div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2"><a href="#" class="nav-link">Application Login</div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2"><a href="#" class="nav-link">Contact Us</div>
      <a class="break d-none d-sm-block">|</a>
    <div class="footerText col-xs-12 col-sm-2"><a href="#" class="nav-link">Create an Account</div>
      <a class="break d-none d-sm-block">|</a>
  </div>
</div>
