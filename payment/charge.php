<?php

require_once("../vendor/autoload.php");

\Stripe\Stripe::setApiKey('sk_test_qepEUmApOFftSLXMsvN8Lp5q');

// Sanitize Post Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first = $POST['first_name'];
$last = $POST['last_name'];
$email = $POST['email'];
$address = $POST['street_address'];
$apt = $POST['apt'];
$city = $POST['city'];
$state = $POST['state'];
$zip = $POST['zip_code'];



$amount = $POST['amount'];
$token = $POST['stripeToken'];

$amountAdjusted = (float)$amount * 100;

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email, 
    "source" => $token
));

$chargeAddress = \Stripe\Address::create(array(


));

// Charge Customer
$charge = \Stripe\Charge::create(array(
    "amount" => $amountAdjusted,
    "currency" => "usd",
    "description" => "Rent Charge",
    "customer" => $customer->id,
    'receipt_email' => $email,
    'billing_details.address.line1' => $address,
    'billing_details.address.line2' => $apt,
    'billing_details.address.city' => $city,
    'billing_details.address.state' => $state,
    'billing_details.address.postal_code' => $zip,
    'billing_details.address.country' => "US",
    'statement_descriptor' => 'Ruffner Rentals Rent'
));



print_r($charge);

?>