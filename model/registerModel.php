<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "database.php";

class registerModel extends db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registerUser($username, $ddn, $email, $mdp)
   {
        $hashmdp = password_hash($mdp, PASSWORD_DEFAULT);

        $try = $this->db->prepare("INSERT INTO Users ( username, email, password, birthdate) VALUES (:username, :email, :mdp, :ddn)");
        $try->bindParam(':username',$username);
        $try->bindParam(':ddn',$ddn);
        $try->bindParam(':email',$email);
        $try->bindParam(':mdp',$hashmdp);
        $try->execute();
    }

    public function loginUser($email, $mdp)
    {
        $sql = "SELECT * FROM Users WHERE email = :mail";
        $try = $this->db->prepare($sql);
        $try->bindParam(':mail',$email);
        $try->execute();
        $user = $try->fetch();
        print_r($user);
        return $user;
    }

    public function viewUser($userID){
        $sql = "SELECT * FROM Users WHERE user_id = :userID";
        $try = $this->db->prepare($sql);
        $try->bindParam(':userID',$userID);
        $try->execute();
        $user = $try->fetch();
        return $user;
    }

    public function checkUser($email){
    
        $sql = "SELECT COUNT(*) FROM Users WHERE email LIKE :email";
        $try = $this->db->prepare($sql);
        $try->bindParam(':email', $email, PDO::PARAM_STR);
        $try->execute();
        return $try->fetchColumn();
    }

}

