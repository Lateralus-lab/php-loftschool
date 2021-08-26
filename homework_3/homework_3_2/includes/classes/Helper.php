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
}
