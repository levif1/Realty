<?php


if(isset($_POST['signup-submit'])){

    require_once("../db/config.php");

    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    $confirmPass = $_POST["inputConfirmPassword"];

    if($password !== $confirmPass){
        header("Location: register.php?error=passwordcheck&email=".$email);
        exit();
    } else{

        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: register.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: register.php?error=emailtaken&email =".$email);
                exit();
            } else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (email, password, priority) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: register.php?error=sqlerror");
                    exit();
                } else{
                    $priority = "renter";
                    mysqli_stmt_bind_param($stmt, "sss", $email, $hashedPwd, $priority);
                    mysqli_stmt_execute($stmt);
                    header("Location: register.php?register=success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: register.php");
    exit();
}
?>