<?php
$config = include __DIR__ . './env.php';
$mode = $config['MODE'] === 'docker' ? 'DB_DOCKER' : 'DB_LOCAL';
$dbConfig = $config[$mode];

class Connection
{
  private $host;
  private $username;
  private $password;
  private $dbname;

  public function __construct($dbConfig)
  {
    $this->host = $dbConfig['DB_HOST'];
    $this->username = $dbConfig['DB_USER'];
    $this->password = $dbConfig['DB_PASS'];
    $this->dbname = $dbConfig['DB_NAME'];
  }


  public function connect()
  {
    try {
      $PDO = new PDO(
        "mysql:host={$this->host};dbname={$this->dbname}",
        $this->username,
        $this->password
      );
      return $PDO;
    } catch (PDOException $error) {
      return $error->getMessage();
    }
  }
}
