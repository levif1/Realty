<?php
require_once("../includes/head.php");
require_once("../includes/nav.php");

?>
<link rel="stylesheet" href="/realty/css/payment.css">




<h2 class="my-4 text-center"> Intro To React Course [$50] </h2>

<div class="container">
  <form action="./charge.php" method="post" id="payment-form" class="">
    <div class="form-row">
      <div class="input-group">
        <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="First Name" name="first_name">
        <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Last Name" name="last_name">
      </div> 

      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Street Address" name="street_address">
      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Apt #" name="apt">
      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="City" name="city">
      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="State" name="state">
      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Zip Code" name="zip_code">

      <input type="email" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Email Address" name="email">
      <input type="text" class="form-control mb-3 StripeElement StripElement--empty" placeholder="Payment Amount" name="amount">
      <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
  </form>
</div>


<script src="https://js.stripe.com/v3/"></script>
<script src="../js/payment.js"></script>
