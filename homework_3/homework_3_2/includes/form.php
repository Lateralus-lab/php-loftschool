<?php

require('classes/Database.php');
require('classes/Helper.php');
require('classes/Customer.php');

/* echo '<pre>'; */

/* print_r($_POST); */

/* echo '</pre>'; */

$helper = new Helper();

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$street = $_POST['street'] ?? '';
$home = $_POST['home'] ?? '';
$part = $_POST['part'] ?? '';
$appt = $_POST['appt'] ?? '';
$floor = $_POST['floor'] ?? '';
$comment = $_POST['comment'] ?? '';

if ($helper->isEmpty([$name, $phone, $email, $street, $home, $part, $appt, $floor, $comment])) {
  echo 'All fields are required';
} else {
  if ($helper->isValidEmail($_POST['email'])) {

    $customer = new Customer($email);

    if ($customer->isEmailTaken()) {
      echo 'This email is already taken';
    } else {
      $customer->addCustomer();
    }
  }
}




/* $orderId = $customer->getCustomerIdByEmail(); */
/* echo $orderId; */
