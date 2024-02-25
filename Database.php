<?php

class Database
{
  public $connection;
  public function __construct($user = "root", $password = "")
  {
    // Data Source Name
    $dsn = "mysql:host=localhost;port=3306;dbname=validation_register";
    $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  }
  public function query($query, $params = [])
  {
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
  }
}

// <?php
// $serverName = "localhost";
// $userName = "root";
// $password = "";
// $dbName = "tailor";

// $conn = new mysqli($serverName, $userName, $password, $dbName);
// if ($conn->connect_error) {
//   die('Connection Failed : ' . $conn->connect_error);
// }
