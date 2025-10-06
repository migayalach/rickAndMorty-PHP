<?php

class Connection
{
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "rickAndMorty";

  public function connect()
  {
    try {
      $PDO = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      return $PDO;
    } catch (PDOException $error) {
      return $error->getMessage();
    }
  }
}

?>