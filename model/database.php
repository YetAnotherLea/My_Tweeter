<?php

abstract class db
{
  protected $db;
  protected $host = 'localhost';
  protected $user = 'root';
  protected $pass = 'tIAvsp4E';
  protected $dbname = 'twitter';
  protected $error;

  public function __construct()
  {
    try {
      $this->db = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      $this->error = 'Connexion erreur : ' . $e->getMessage();
      echo $this->error;
      die();
    }
  }

  protected function connect()
  {
    return $this->db;
  }
}
