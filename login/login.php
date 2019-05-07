<?php
$css = "login.css";

include("../includes/head.php");
include("../includes/nav.php");
include("../db/config.php");


if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true  ){
  if($_SESSION["priority"] == "renter"){
    header("location: renterWelcome.php");
  } else if ($_SESSION["priorty"] == "admin"){
    header("location: admin/adminWelcome.php");
  }






  

}

?>

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="../contact_me/images/icons/favicon.ico"/>
<!--==============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../contact_me/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../contact_me/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../contact_me/vendor/animate/animate.css">


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../contact_me/css/util.css">
	<link rel="stylesheet" type="text/css" href="../contact_me/css/main.css">
<!--===============================================================================================-->

<<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>

                <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn">
                    <span>
                      Sign in
                      <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>

                <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===============================================================================================-->
<script src="../contact_me/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../contact_me/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../contact_me/vendor/bootstrap/js/popper.js"></script>
	<script src="../contact_me/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../contact_me/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../contact_me/vendor/daterangepicker/moment.min.js"></script>
	<script src="../contact_me/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../contact_me/vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->
	<script src="../contact_me/js/main.js"></script>

<?php
include("../includes/footer.php");

?>