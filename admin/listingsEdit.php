<?php
require('../db/config.php');

function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES, "UTF-8");
}

$address = sanitize($_POST['address']);
$sqft = sanitize($_POST['sqft']);
$status = sanitize($_POST['status']);
$id = sanitize($_POST['id']);
$price = sanitize($_POST['price']);
$bathrooms = sanitize($_POST['bathrooms']);
$bedrooms = sanitize($_POST['bedrooms']);
$renters = sanitize($_POST['renters']);
$description = sanitize($_POST['description']);

$sql = "UPDATE listings
        SET address= '" .  $address . "', 
        sqft= '" .  $sqft . "', 
        status= '" .  $status . "', 
        price= '" .  $price . "', 
        renterName= '" .  $renters . "',
        bathrooms= '" .  $bathrooms . "', 
        description= '" .  $description . "',
        bedrooms= '" .  $bedrooms . "' 
        WHERE list_id=" .  $id . "
        ";


    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header('Location: ./listings.php');
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


?>