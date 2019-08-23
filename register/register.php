<?php
$css = "register.css";
include("../includes/head.php");
include("../includes/nav.php");

?>



<div class="container">
    <div class="row loginPadding">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">

          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action = "register.inc.php" method="POST">


              <div class="form-label-group">
                <input type="email" id="inputEmail" name = "inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name = "inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name = "inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn-register btn-lg" type="submit" name="signup-submit">Register</button>
              <a class="d-block text-center mt-2 small" href="../login/login.php">Sign In</a>
              <hr class="my-4">
              <div class="vertAlignButton container">
              <button class="row btn-outline-danger btn-google" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="row btn-outline-primary btn-facebook" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php

require_once("../includes/footer.php");

?>
