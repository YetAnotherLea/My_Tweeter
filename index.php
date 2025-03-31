<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définition des routes
$routes = [
    '/MyTwitter/' => [
        'POST' => [
        "action" => 'addUsers', //L'appel d'une fonction
        'method' => 'POST',
        'controller' => 'registerControl', // Pointe le fichier controlleur
        ],
        'GET' => [
        "action" => 'view', //L'appel d'une fonction
        'method' => 'GET',
        'controller' => 'registerControl', // Pointe le fichier controlleur
        ]
    ],
    '/MyTwitter/Accueil' => [
        'POST' => [
        "action" => 'logout',
        'method' => 'POST',
        'controller' => 'registerControl',
        ],
        'POST' => [
          "action" => 'postPosts',
          'method' => 'POST',
          'controller' => 'postControl',
          ],
        'GET' => [
          "action" => 'viewPosts',
          'method' => 'POST',
          'controller' => 'homeControl',
          ],
    ],
    '/MyTwitter/Profil' => [
        'POST' => [
          "action" => 'view',
          "method" => 'GET',
          'controller' => 'profilControl',
        ],
        'GET' => [
        "action" => 'view',
        "method" => 'GET',
        'controller' => 'profilControl',
      ],
    ],
];
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$routeFound = false;

foreach ($routes as $route => $methodRoutes) {
  if ($url === $route && isset($methodRoutes[$method])) {
    $details = $methodRoutes[$method];
    $controllerName = $details['controller'];
    $action = isset($details['action']) ? $details['action'] : 'defaultAction';

    require "controlleur/" . $controllerName . ".php";
    $controller = new $controllerName();

    if (method_exists($controller, $action)) {
      $controller->$action();
      $routeFound = true;
      break;
    } else {
      echo "Erreur 404 : Page non trouvée ou méthode incorrecte.";
      exit();
    }
  } else {
    //echo "404 : Page not found";
  }
}
/*
echo "URL demandée : " . $_SERVER['REQUEST_URI']; // Affiche l'URL demandée
echo "<br>";
echo "Méthode HTTP : " . $_SERVER['REQUEST_METHOD'];
error_log("URL demandée : " . $_SERVER['REQUEST_URI']);*/