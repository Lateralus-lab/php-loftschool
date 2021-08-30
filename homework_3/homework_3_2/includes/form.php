<?php

require('classes/Database.php');
require('classes/Helper.php');
require('classes/Customer.php');

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
  $address = 'Street ' . $street . ', home ' . $home . ', part ' . $part . ', appt ' . $appt . ', floor ' . $floor;

  if ($helper->isValidEmail($_POST['email'])) {

    $customer = new Customer($email);
    $orderId = $customer->getCustomerIdByEmail();
    $orderDate = date('Y-m-d H:i:s');
    $orderCount = $customer->getOrderCount();

    if (!$customer->isEmailTaken()) {
      $customer->addCustomer($name, $phone, $orderDate, $street, $home, $part, $appt, $floor, $comment);
    }

    echo 'Thank you for your new purchase. Your order will be delivered to:' .  '<br/>' . $address .  '<br/>' . 'Your ID is ' . $orderId . '<br/>' .  'This is your ' . $orderCount . ' order';
  }
}
