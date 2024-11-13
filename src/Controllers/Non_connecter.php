<?php
$Vue->setMenu(new \App\Vues\Vue_Menu_Non_Connecter());

switch ($page){
    case "accueil":
    case "defaut":
        $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;

}