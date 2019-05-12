<?php

require_once("../includes/head.php");
require_once("../includes/nav.php");

echo $_SESSION["loggedIn"];

if( !isset($_SESSION["loggedIn"]) ){
    // header("Location: ../login/login.php");
    // exit();
} else{

    // if($_SESSION["loggedIn"] == "true" && $_SESSION["priority"] == "admin"){




    // } else{
    //     header("Location: ../login/login.php");
    //     exit();
    // }

}



?>