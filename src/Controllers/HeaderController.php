<?php
namespace App\Controllers;

class HeaderController
{
    //Méthodes permettant de gérer la page d'accueil
    public function header(){
        //  Fait appel au modèle afin de récupérer les données dans la bdd

        // Fait appel a la vue afin de renvoyer la page
        require_once __DIR__ . "/../Vues/header/header.php";
    }

}
