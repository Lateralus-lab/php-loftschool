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

  // Check if the email exists in the database
  public function isEmailTaken()
  {

    $sql = "SELECT * FROM orders
            WHERE `email` = :email";

    $values = [
      [':email', $this->email]
    ];

    $result = $this->db->queryDB($sql, Database::EXECUTE, $values);

    return $result ? $this->incrementOrderCount() : false;
  }

  // Add new customer to the database
  public function addCustomer()
  {

    $sql = "INSERT INTO orders (`email`)
            VALUES (:email)";

    $values = [
      [':email', $this->email]
    ];

    $this->db->queryDB($sql, Database::EXECUTE, $values);
  }

  // Get customer ID by email
  public function getCustomerIdByEmail()
  {
    $sql = "SELECT * FROM orders
            WHERE `email` = :email";

    $values = [
      [':email', $this->email]
    ];

    $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

    if ($result > 0) {
      return $result['id'];
    }
  }

  // Increment order count by one
  public function incrementOrderCount()
  {
    $sql = "UPDATE orders SET order_count = order_count + 1
            WHERE `email` = :email";

    $values = [
      [':email', $this->email]
    ];

    $this->db->queryDB($sql, Database::EXECUTE, $values);

    return true;
  }
}
