<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . "/../model/postModel.php";

class postControl
{
    public $postModel;

    public function __construct()
    {
        $this->postModel = new postModel();
    }

    public function postPosts()
    {
       if($_SERVER['REQUEST_METHOD'] === 'POST')
       {
            if( isset($_POST['tweet-button']) && !empty($_POST['tweet-input']))
            {
                $tweet = $_POST['tweet-input'];
                session_start();
                if(isset($_SESSION['user']))
                {
                    $user = $_SESSION['user'];
                    $this->postModel->postPosts($tweet, $user['user_id']);
                    header("Location: Accueil");
                } else {
                    echo "c'est vide.";
                }
            }
        }
    }
}