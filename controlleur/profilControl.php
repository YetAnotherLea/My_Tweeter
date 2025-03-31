<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . "/../model/registerModel.php";

class profilControl
{
    public $registerModel;

    public function __construct()
    {
        $this->registerModel = new registerModel();
    }

    public function showProfile() {
        // Logique pour récupérer les informations de l'utilisateur
        // Par exemple, obtenir l'utilisateur connecté depuis la session
        $user = $_SESSION['id'];
    }

public function view()
    {
        require_once __DIR__ .'/../vue/profileView.php';
        
    }
}