<?php

class Customer
{

  public $db;

  public function __construct()
  {

    $this->db = new Database();
  }

  public function isCustomer($email)
  {

    $sql = "SELECT * FROM orders
            WHERE `email` = :email";

    $values = [
      [':email', $email]
    ];

    $result = $this->db->queryDB($sql, Database::EXECUTE, $values);

    var_dump($values);

    return $result ? true : false;
  }
}
