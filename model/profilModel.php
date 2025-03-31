<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "database.php";

class profilModel extends db
{
    public function __construct(){
        parent::__construct();
    }

    public function viewUsers()
    {
        $sql = "
        SELECT * FROM Users ";
        $try = $this->db->prepare($sql);
        $try->execute();

        return $try->fetch();
    }
}
