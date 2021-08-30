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
  public function addCustomer($name, $phone, $orderDate, $street, $home, $part, $appt, $floor, $comment)
  {

    $sql = "INSERT INTO orders (`email`, `name`, `phone`, `order_date`, `street`, `home`, `part`, `appt`, `floor`, `comment`)
            VALUES (:email, :name, :phone, :orderDate, :street, :home, :part, :appt, :floor, :comment)";

    $values = [
      [':email', $this->email],
      [':name', $name],
      [':phone', $phone],
      [':orderDate', $orderDate],
      [':street', $street],
      [':home', $home],
      [':part', $part],
      [':appt', $appt],
      [':floor', $floor],
      [':comment', $comment],
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

  // Get order count
  public function getOrderCount()
  {
    $sql = "SELECT * FROM orders
            WHERE `email` = :email";

    $values = [
      [':email', $this->email]
    ];

    $result = $this->db->queryDB($sql, Database::SELECTSINGLE, $values);

    if ($result > 0) {
      return $result['order_count'];
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
