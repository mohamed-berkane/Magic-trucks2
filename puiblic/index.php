<?php

/**
 * Front Controller : 1 seul point d'entrée (entonnoir)
 * Il intercepte toutes les requetes
 * et demande au Dispatcher d'appeller les vues (templates) associées
 */

// On inclut les dépendances (librairies ou plugins) de notre projet
// Doc sur AltoRouter : http://altorouter.com/
require __DIR__ .'/../vendor/autoload.php';

 // Le fichier index.php étant dans le dossier public, on remonte
 // d'un cran (../) pour inclure le fichier MainController


// 1) On instancie la classe AltoRouter
$router = new AltoRouter();

// 2) On fournit à AltoRouter la partie de l'URL à ne pas prendre en compte pour faire la comparaison entre l'URL courante et l'url de la route
// On lui dit à quel moment est ce qu'il doit commencer à travailler
// la valeur de $_SERVER['BASE_URI'] est donnée par le .htaccess. Elle correspond à la racine du site ==> /S05/E02/S05-projet-oShop-charlesen/public
$router->setBasePath($_SERVER['BASE_URI']);

// 3) On crée les routes du site
// AltoRouter c'est le tinder des URLS ==> @copyright 2021 Tom

// Route pour l'affichage de la page d'accueil
$router->map(
    'GET', // La méthode HTTP qui est autorisée  (GET ou POST)
    '/', // L'url que l'on saisira dans le navigateur

    // "target" : ce tableau stocke les noms de l'action et du contrôleur qui vont se déclencher pour réagir à cette URL
    [
        'method' => 'home',
        'controller' => 'App\Controllers\MainController'
    ], 
    'main-home' // On donne un nom (un identifiant à la route)
);


//=========================
// Dispatching START
//=========================
// On décide quelle méthode appeler en fonction de $match
// On créé un objet de la classe du controleur

// $match renvoie "un tableau" si la route existe
// $match renvoie "false" si la route n'existe pas
$match = $router->match();

//dump($GLOBALS['titi']); // hello
//dump($GLOBALS['router']); // renvoie $router

// On aimerait pouvoir utiliser $routes pour décider si une page
// particulière est autorisée ou non (404)
// Si la route est définie, alors on récupère les informations
// nécessaires au rendu HTML (method, controller, paramètres, ...)
if ($match !== false) {
    // La page existe dans les routes (AltoRouter): 
    // On récupère donc les informations
    // nécessaires au rendu HTML (method, controller, paramètres, ...)
    $routeData = $match['target'];
    
    // Si la route est "/" (page d'accueil), alors 
    $methodToCall = $routeData['method']; // method = home
    $controllerToCall = $routeData['controller']; // MainController
    $routeParams = $match['params']; // Paramètres (si existants)
} else {
    // La route n'est pas définie : La page n'existe pas !
    $methodToCall = 'page404';
    $controllerToCall = 'App\Controllers\MainController';
    $routeParams = [];
}

// On instancie le controller
// $controller = new MainController (par ex.)
$controller = new $controllerToCall();

// On affiche nos pages dynamiquement !
// si $methodToCall = home ==> $controller->home($routeParams);
$controller->$methodToCall($routeParams); // category() -> show('category') => 

//=========================
// Dispatching END
//=========================