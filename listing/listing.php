<?php require_once('../includes/head.php'); ?>
<!-- navigation -->
<?php require_once('../includes/nav.php'); ?>


<!-- Banner Image -->
<img src="../picts/listingBanner.jpg" class="img-fluid imageBanner" alt="Home Page">


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
<div class="backgroundImage">
  <div class="container-fluid">
    <div class="containListing">
      <div class="Listing">
        <div class="adjustMargin row">
          <div class="col-lg-12 col-xl-4 listingContents">
            <img src="../picts/fillerHouse.jpg" class="img-fluid imageBorder displayImage" alt="House">
          </div>
          <div class="vertical col-lg-12 col-xl-8">
            <table class="alignVertical d-none d-xl-block d-none d-lg-block">
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
