<?php

require('classes/Database.php');
require('classes/Helper.php');
require('classes/Customer.php');

/* echo '<pre>'; */

/* print_r($_POST); */

/* echo '</pre>'; */

$helper = new Helper();

if ($helper->isValidEmail($_POST['email'])) {

  $email = $_POST['email'];
  $customer = new Customer($email);

  if ($customer->isEmailTaken()) {
    echo 'This email is already taken';
  } else {
    $customer->addCustomer();
  }
}

/* if ($helper->isEmpty([$_POST['name'], $_POST['street'], $_POST['home'], $_POST['part'], $_POST['appt'], $_POST['floor']])) { */
/*   echo 'All fields are required'; */
/* } */

  /* if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { */
