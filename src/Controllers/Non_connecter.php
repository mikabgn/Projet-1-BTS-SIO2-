<?php
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());

switch ($page){
    case "accueil":
    case "defaut":
        $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;
    case "creationCompte":
        include "src/Controler/creationCompte.php";
        break;
    case "connexion":
        include "src/Controler/connexionCompte.php";
        break;
}