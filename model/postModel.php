<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "database.php";

class postModel extends db
{
    public function __construct(){
        parent::__construct();
    }

    public function postPosts($input,$userID)
    {
        $sql = "INSERT INTO tweets (id_user, content)
        VALUES (:userID , :input)";
        $trybis = $this->db->prepare($sql);
        $trybis->bindParam(':userID',$userID);
        $trybis->bindParam(':input',$input);
        $trybis->execute();
    }
}