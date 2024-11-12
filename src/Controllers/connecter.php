<?php

switch ($page) {
    case "accueil":
    case "defaut":
        $Vue->addToCorps(new \App\Vues\Vue_accueil());
        break;
    case "deconnexion":
        unset($_REQUEST["email"]);
        unset($_REQUEST["pseudo"]);
        unset($_REQUEST["password"]);
        $Vue->addToCorps(new \App\Vues\Vue_Deconnexion());
        break;
}