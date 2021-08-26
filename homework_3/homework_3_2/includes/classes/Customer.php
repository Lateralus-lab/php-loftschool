<?php

class Customer
{

  private $db;
  private $email;

  public function __construct($email)
  {
    $this->db = new Database();
    $this->email = $email;
  }

  public function isEmailTaken()
  {

    $sql = "SELECT * FROM orders
            WHERE `email` = :email";

    $values = [
      [':email', $this->email]
    ];

    $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

    return $result ? true : false;
  }

  public function addCustomer()
  {
    $sql = "INSERT INTO orders (`email`)
            VALUES (:email)";

    $values = [
      [':email', $this->email]
    ];

    $this->db->queryDB($sql, Database::EXECUTE, $values);
  }
}
