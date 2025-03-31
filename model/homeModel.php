<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "database.php";

class homeModel extends db
{
    public function __construct(){
        parent::__construct();
    }

    public function viewPosts()
    {
        $sql = "
        SELECT tweets.content, tweets.created_at, Users.username
        FROM `tweets`
        INNER JOIN Users ON Users.user_id = tweets.id_user";
        $try = $this->db->prepare($sql);
        $try->execute();

        return $try->fetch();
    }
}




