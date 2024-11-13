<?php
$entityManager = require_once __DIR__.'/../config/bootstrap.php';
use App\Entity\User;
use App\UserStory\CreateAccount;

$account = new CreateAccount($entityManager);

$pseudo = "Moi";
$email = "moi@yahoo.com";
$password = "password9658!";

$account->execute($pseudo,$email,$password);
