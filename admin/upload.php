<?php
require('../db/config.php');

$sql = "SELECT images FROM listings WHERE list_id=" . $_POST['id'];
$results = mysqli_query($conn, $sql);
$row = $results->fetch_assoc();

$target_dir = "./images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_Name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
$target_file = $target_dir . $target_Name;
$tempString = $row['images'] . $target_Name . ',';


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        header('Location: ./listing.php?imageError=File is not an image' );
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $sql = "UPDATE listings SET images='" . $tempString . "' WHERE list_id=" . $_POST['id'];
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
            mysqli_close($conn);
            header('Location: ./listings.php?message=Success');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>