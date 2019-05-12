<?php


if( !isset($_SESSION["loggedIn"]) ){
    header("Location: ../login/login.php");
    exit();
} else{

    if($_SESSION["loggedIn"] == "true" && $_SESSION["priority"] == "renter"){

        


    } else{
        header("Location: ../login/login.php");
        exit();
    }

}



?>