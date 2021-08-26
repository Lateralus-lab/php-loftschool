<?php

class Database
{

  const SELECTSINGLE = 1;
  const EXECUTE = 2;

  private $pdo;

  public function __construct()
  {

    try {
      $this->pdo = new PDO("mysql:host=localhost;dbname=burger_db", 'burger', 'burger');
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function queryDB($sql, $mode, $value = [])
  {

    $stmt = $this->pdo->prepare($sql);

    foreach ($value as $valueToBind) {
      $stmt->bindValue($valueToBind[0], $valueToBind[1]);
    }

    $stmt->execute();

    if ($mode !== Database::SELECTSINGLE && $mode !== Database::EXECUTE) {
      throw new Exception('Invalide Mode');
    } elseif ($mode === Database::SELECTSINGLE) {
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }
}
