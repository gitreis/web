<?php

class Conection 
{

  private $username   = 'postgres';
  private $password   = '';
  private $banco      = 'postgres';
  private $host       = '127.0.0.1';
  private $port       = '5432';
  private $conn;

  public function __construct()
  {
    try
    {
      $conn = new PDO("pgsql:host={$this->host},port={$this->port}, dbname={$this->banco}", $this->username, $this->password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->conn = $conn;
    }
    catch(PDOException $e)
    {
        echo 'Erro: ' . $e->getMessage();
    }
  }

  public function getConn()
  {
    return $this->conn;
  }

  public function getSelect()
  {
    $stmt = $this->conn->prepare("SELECT * FROM MENU");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}