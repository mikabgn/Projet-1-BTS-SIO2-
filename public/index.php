<?php

// Controleur FRONTAL => Routeur
// TOute les requétes des utilisateurs passent par ce fichier

use App\Controllers\AccueilController;
use App\Controllers\HeaderController;
use App\Controllers\FooterController;
use App\Controllers\MentionsLegalesController;


require_once __DIR__ . "/../vendor/autoload.php";

//chargement vriables d'environnement

// Configurer la connexion a la bdd

//Mise en place du routing
$route = $_GET["route"] ?? 'accueil';

switch ($route) {
    case 'accueil':
        $accueilController = new \App\Controllers\AccueilController();
        $headerController = new \App\Controllers\HeaderController();
        $footerController = new \App\Controllers\FooterController();
        $headerController->header();
        $accueilController->accueil();
        $footerController->footer();
        break;
    case 'Mentionslegales':
        $mentionsLegalesController = new \App\Controllers\MentionsLegalesController();
        $headerController = new \App\Controllers\HeaderController();
        $footerController = new \App\Controllers\FooterController();
        $headerController->header();
        $mentionsLegalesController->mentionsLegales();
        $footerController->footer();
        break;
    default :
        //r 404
        echo 'page not found';
        break;
/*
 case 'livre-list':
 //mivre dao est une dependance de livre controller
 $livreDAO = new \App\DAO\LivreDAO($db);
 //injection dao en bas la
 $livreController = new \App\Controllers\LivreController($livreDAO);
 $livreController->list();
 break;
*/

}




//if ($route === 'accueil') {
//    // Créer un objet AccueilControlleur
//    $accueilController = new \App\Controllers\AccueilController();
//    $accueilController->accueil();
//} else {
//    echo 'page not found';
//}