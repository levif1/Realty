<?php
$css = "./header/listingCss.css";
require_once("./header/header.php");
require_once("./header/adminNav.php");
require("../db/config.php");
// onclick="jQuery('#listingModal').modal('toggle'); return false;

//database connection
$sql = "SELECT * FROM listings";
$results = $conn->query($sql);



$address = $price = $status = $leaseEnd =  $editID = "";

$imageArr = [];
?>

<?php if(isset($_GET['editid'])):?>
  <script type="text/javascript"> $(window).on('load' ,(function(){ $('#listingModal').modal('toggle'); })); </script>
  <?php
    $sql = "SELECT * FROM listings WHERE list_id=" . $_GET['editid'];
    $item = mysqli_query($conn, $sql);
    $newItem = $item->fetch_assoc();
  ?>
<?php endif;?>



<h1 id="tableHeader">Listings</h1>
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
            <?php while($row = $results->fetch_assoc()) { 
                $editID = $row["list_id"];        
            ?>
            <form action="listings.php?" method="get">
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
                <td>
                    <input type="hidden" name="editid" value="<?=$editID ?>">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </td>
            </tr>
            </form>
            <?php } ?>
        <tbody>
    </table>

<div class="centerDiv">
    <button class="btn btn-primary">Add New</button>
</div>




<div class="modal fade " id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="sizesModalLabel"><?php echo $newItem['address']; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">
          <div class="container-fluid">
                              <!-- Add Image -->
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
                <input type="hidden" name="id" value="<?=$_GET["editid"];  ?>">
            </form>

           
            <div id="demo" class="carousel slide clearfix" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php 
                    while($row = $results->fetch_assoc()) { ?>
                        <li data-target="#demo" data-slide-to="<?= $x ?>" class="<? if($x == 0){echo "active";} ?>"></li>
                    <?php $x++;} ?>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <?php 
                        $x = 0;
                        $sql = "SELECT * FROM listings WHERE list_id=" . $_GET['editid'];
                        $res = mysqli_query($conn, $sql);
                        $row = $res->fetch_assoc();
                        $tempString = $row['images'];
                        $stringArr = explode(',', $tempString);

                        foreach($stringArr as $string) {
                            $string = trim($string);
                            if($string != ''){
                                ?>
                                    <div class='carousel-item <?= ($x==0)? "active": "" ?>'>
                                        <img src="./images/<?=$string ?>" alt="house image">
                                    </div>
                            <?php } ?>
                            
                        <?php $x++; } ?>
                </div>

                <!-- Left and right controls -->
                <?php
                    $photoid = 0;
                ?>

                <form action="listings.php"  method="GET" id='newForm'>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                </form>
                <form action="listings.php"  method="GET" id='newForm2'>
                    <button type="submit" onclick="increasePhotoId(<?=$photoid ?>)"  class="carousel-control-next btn btn-primary" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                    <input name="photoid" type="hidden" value="<?=$photoid?>">
                </form>
            </div>  


                


                
            <form action="listingsEdit.php"  method="post" id='myForm'>
                <div class="row">
                    <div class="form-group col-md-8 center1">
                        <label class="center1 col-md-2" for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?=$newItem['address']; ?>" class="form-control center1 col-md-10">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 center1">
                        <label class="center1" for="price">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                            </div>
                            <input type="number" class="form-control" name="price" id="price" placeholder="" value="<?=$newItem['price']; ?>">
                        </div>
                    </div>

                    <div class="form-group col-md-2 center1">
                        <label for="bedrooms" class="center1">Bedrooms</label>
                        <input type="number" name="bedrooms" id="bedrooms" min="1" max="20" value="<?=$newItem['bedrooms']; ?>" class="form-control center1">
                    </div>

                    <div class="form-group col-md-2 center1">
                        <label for="bathrooms" class="center1">Bathrooms</label>
                        <input type="number" name="bathrooms" id="bathrooms" min="1" max="20" value="<?=$newItem['bathrooms']; ?>" class="form-control center1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 center1">
                        <label class="center1" for="renters">Renters</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="renters" id="renters" placeholder="" value="<?=$newItem['renterName']; ?>">
                        </div>
                    </div>

                    <div class="form-group col-md-2 center1">
                        <label for="sqft" class="center1">Square Ft.</label>
                        <input type="text" name="sqft" id="sqft" value="<?=$newItem['sqft']; ?>" class="form-control center1">
                    </div>

                    <div class="form-group col-md-2 center1">
                        <label for="status" class="center1">Status</label>
                        <input type="text" name="status" id="status" value="<?=$newItem['status']; ?>" class="form-control center1">
                    </div>

                    <input type="hidden" value="<?=$_GET['editid'];?>" id="id" name='id'>
                </div>
            </form>

            <div class="row">
                <div class="form-group col-md-8 center1">
                    <label class="center1 col-md-2" for="description">Description</label>
                    <textarea name="description" rows="4" id="description" form='myForm' value="" class="form-control center1 col-md-10"><?=$newItem['description']; ?></textarea>
                </div>
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" form="myForm">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script> 
$('.carousel').carousel({
    interval: false
});

function increasePhotoId(newId){
    newId = newId + 1;
    return newId
}
</script>
