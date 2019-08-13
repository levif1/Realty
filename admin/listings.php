<?php
$css = "listingCss.css";
require_once("./header/header.php");
require_once("./header/adminNav.php");
require("../db/config.php");


//database connection
$sql = "SELECT * FROM listings";
$results = $conn->query($sql);



$address = $price = $status = $leaseEnd = "";

$imageArr = [];



?>
 <link rel="stylesheet" href="./header/listingCss.css">


<h1 id="tableHeader">Listings</h1>
<form>
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <td> Address </td>
                <td> Price </td>
                <td> Status/Rentor </td>
                <td> Lease End </td>
                <td> Pictures </td>
                <td> Buttons </td>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $results->fetch_assoc()) { ?>
            <tr>
                <td> <?=$row["address"];?> </td>
                <td> <?=$row["price"];?> </td>
                <td> <?=$row["renterName"];?></td>
                    <td id="<?php 

                            $effectiveDate = date('Y-m-d', strtotime("+3 months"));
                            $effectiveDate1 = date('Y-m-d', strtotime("+6 months"));
                            if($effectiveDate > $row["leaseEnd"]){
                            echo "bad"; 
                            } else if($effectiveDate1 > $row["leaseEnd"]){
                                echo "warning";
                            } else{
                                echo "good";
                            }
                        ?>"> 
                    <?=$row["leaseEnd"];?> </td>
                <td> thumbnail </td>
                <td><button id="<?=(isset($_GET['edit'])? '' :'' ) ?>" class="btn btn-primary" onclick="jQuery('#listingModal').modal('toggle'); return false;">Edit</button></td>
            </tr>
            <?php } ?>
        <tbody>
    </table>
</form>
<div class="centerDiv">
    <button class="btn btn-primary">Add New</button>
</div>




<div class="modal fade " id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sizesModalLabel"><?php echo $address; ?></h4>
      </div>
      <div class="modal-body">
          <div class="container-fluid">

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
                
                <div class="form-inline col-md-4 center">
                    <label class="center" for="">Address</label>
                    <input type="text" name="" id="" value="" class="form-control">
                </div>

                <div class="col-md-3 center">
                    <label class="center" for="price">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control" id="price" placeholder="">
                    </div>
                </div>    


                <div class="form-group col-md-3 center">
                    <label for="" class="center">Bedrooms</label>
                    <input type="number" name="" id="" min="1" max="20" value="" class="form-control center">
                </div>
                <div class="form-group col-md-3 center">
                    <label for="" class="center">Bathrooms</label>
                    <input type="number" name="" id="" min="1" max="20" value="" class="form-control center">
                </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateSizes();jQuery('#sizesModal').modal('toggle'); return false;">Save changes</button>
      </div>
    </div>
  </div>
</div>