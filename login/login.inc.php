<?php

if (isset($_POST["login-submit"])){

    require("../db/config.php");

    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    if( empty($email) || empty($password) ) {
        header("Location: login.php?error=emptyfields");
        exit();
    }  //error handling 
    else{
        $sql = "SELECT * FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt, $sql) ){
            header("Location: login.php?error=sqlerror");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if( $row = mysqli_fetch_assoc($results) ){
                $pwdCheck = password_verify($password, $row["password"]);
                $priority = $row["priority"];
                if($pwdCheck == false){
                    header("Location: login.php?error=wrongpassword");
                    exit();
                } else if($pwdCheck == true){
                    $_SESSION["priority"] = $priority;
                    $_SESSION["userId"] = $row["id"];
                    $_SESSION["loggedIn"] = "true";

                    if($priorty == "admin"){
                        header("Location: ../admin/adminWelcome.php");
                        exit();
                    } else {
                        header("Location: ../renter/renterWelcome.php");
                        exit();
                    }

                } else{
                    header("Location: login.php?error=wrongpassword");
                    exit();
                }
            } else{
                header("Location: login.php?error=nouser");
                exit();
            }
        }
    }

} else{
    header("Location: login.php");
    exit();
}




?>