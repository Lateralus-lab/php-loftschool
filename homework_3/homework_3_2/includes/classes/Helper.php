<?php

class Helper
{

  public function isValidEmail($email)
  {

    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
  }

  public function isEmpty($postValues)
  {

    return count($postValues) !== count(array_filter($postValues));
  }

  public function message($address, $orderId, $orderCount)
  {
    return 'Thank you for your new purchase. Your order will be delivered to:' .  '<br/>' . $address .  '<br/>' . 'Your ID is ' . $orderId . '<br/>' .  'This is your ' . $orderCount . ' order';
  }
}
