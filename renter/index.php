<?php
$css = "";
include("includes/head.php");
include("includes/nav.php");
?>

<div id="carouselExampleIndicators" class="carousel slide cont" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="container">
            <img class="d-block w-100" src="picts/chicago.jpg" alt="First slide" class = "caro">
        </div>
    </div>
    <div class="carousel-item">
        <div class="container">
            <img class="d-block w-100" src="la.jpg" alt="Second slide" class = "caro">
        </div>
    </div>
    <div class="carousel-item">
        <div class="container">
            <img class="d-block w-100" src="ny.jpg" alt="Third slide" class = "caro">
        </div>
    </div>
  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<?php
include("includes/footer.php");

?>