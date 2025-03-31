<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . "/../model/homeModel.php";

class homeControl
{
    public $homeModel;

    public function __construct()
    {
        $this->homeModel = new homeModel();
    }

    public function viewPosts()
    {
    $posts = $this->homeModel->viewPosts();
    require_once __DIR__ .'/../vue/accueilView.php';
    }

    

    /*public function view()
    {
        require_once __DIR__ .'/../vue/accueilView.php';
        
    }*/
}