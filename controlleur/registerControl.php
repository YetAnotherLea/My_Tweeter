<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . "/../model/registerModel.php";

class registerControl
{
    public $registerModel;

    public function __construct()
    {
        $this->registerModel = new registerModel();
        //$this->registerModel->registerUser($username, $ddn, $email, $mdp);
    }

   public function addUsers()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if( isset($_POST['submit-register']) && !empty($_POST['register-username']) && !empty($_POST['register-birthdate']) && !empty($_POST['register-email']) && !empty($_POST['register-password']))
            {
                $username = $_POST['register-username'];
                $ddn = $_POST['register-birthdate'];
                $email = $_POST['register-email'];
                $mdp = $_POST['register-password'];

                $dataMail = $this->registerModel->checkUser($email);

                if ($dataMail > 0) {
                    json_encode(array("exists" => true, "message" => "Un compte existe déjà pour l'adresse email "));
                   } else {
                    //$this->registerModel->registerUser($username, $ddn, $email, $mdp);
                    //session_start();
                    
                    //$_SESSION['user'] = $user;
                    header("Location: Accueil");
                    exit;
                }
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['submit-login'])){
                if (isset($_POST['login-email']) && isset($_POST['login-password'])) {

                    $mail = $_POST['login-email'];
                    $password = $_POST['login-password'];
                    
                    $user = $this->registerModel->loginUser($mail, $password);
                
                    if ($user && password_verify($password, $user['password']))
                    {
                        session_start();
                        echo "getUsers appelé";
                        $_SESSION['user'] = $user;
                        header("Location: Accueil");
                        exit;
                    }
                }
            }
        }
    }



    public function getUsers()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['submit-login'])){
                if (isset($_POST['login-email']) && isset($_POST['login-password'])) {
                    // Récupération des données
                    $mail = $_POST['login-email'];
                    $password = $_POST['login-password'];
        
                    // Appel de la fonction de connexion dans le modèle
                    $user = $this->registerModel->loginUser($mail, $password);
        
                
                    if ($user && password_verify($password, $user['password'])) {
                        session_start();
                        echo "getUsers appelé";
                        $_SESSION['user'] = $user;
                        header("Location: Accueil");
                        exit;
                    } else {
                        echo "Email ou mot de passe incorrect.";
                    }
                } else {
                    echo "Tous les champs doivent être remplis.";
                }
            }
        }
    }

    public function logout() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {

            session_unset();
            session_destroy();
            header("Location: /MyTwitter/");
            exit();
            
        }
    }
    
    
    public function view()
    {
        require __DIR__ .'/../vue/homeView.php';
    }
}