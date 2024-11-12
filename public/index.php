<?php

// Controleur FRONTAL => Routeur
// TOute les requétes des utilisateurs passent par ce fichier

use App\Controllers\AccueilController;
use App\Controllers\HeaderController;
use App\Controllers\FooterController;
use App\Controllers\MentionsLegalesController;
use App\Controllers\connexionCompte;
use App\Utilitaire\Vue;


require_once __DIR__ . "/../vendor/autoload.php";

//chargement vriables d'environnement

if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

if (isset($_REQUEST["page"]))
    $page = $_REQUEST["page"];
else
    $page = "defaut";


// Configurer la connexion a la bdd

//Mise en place du routing
$route = $_GET["route"] ?? 'accueil';
//$headerController = new \App\Controllers\HeaderController();
//$headerController->header();
$Vue = new Vue();




switch ($route) {
    case 'accueil':
        $accueilController = new \App\Controllers\AccueilController();
        $accueilController->accueil();
        break;
    case 'Mentionslegales':
        $mentionsLegalesController = new \App\Controllers\MentionsLegalesController();
        $mentionsLegalesController->mentionsLegales();
        break;
    case "connexion":
        include "../src/Controllers/Non_connecter.php";
        break;
    case "Nonconnexion":
        include "../src/Controllers/connecter.php";
        break;
    case 'deconnexion':
        $mentionsLegalesController = new \App\Controllers\MentionsLegalesController();
        $headerController = new \App\Controllers\HeaderController();
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
$Vue -> afficher();

$footerController = new \App\Controllers\FooterController();
$footerController->footer();







//if ($route === 'accueil') {
//    // Créer un objet AccueilControlleur
//    $accueilController = new \App\Controllers\AccueilController();
//    $accueilController->accueil();
//} else {
//    echo 'page not found';
//}