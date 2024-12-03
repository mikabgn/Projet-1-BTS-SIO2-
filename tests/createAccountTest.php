<?php
use App\Entity\User;
use App\UserStory\CreateAccount;
use Doctrine\ORM\EntityManager;

require_once __DIR__. "/../vendor/autoload.php";
$entityManager = require __DIR__ . "/../config/bootstrap.php";
$user = new createAccount($entityManager);

try{
    $user->execute("nom","prenom","nom.prenom@moi.com","motDePAsse");

}catch (\Exception $e){
    echo $e->getMessage();
}