<?php

class Helper
{

  public function isValidEmail($email)
  {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $email !== '') {
      return true;
    }

    return false;
  }

  public function isEmpty($postValues)
  {
    foreach ($postValues as $value) {
      if ($value === '') {
        return true;
      }

      return false;
    }
  }
}
