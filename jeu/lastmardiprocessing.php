<?php
require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();

$joueur = new Joueur();
$joueur->getJoueurById($_SESSION['auth'],$db);
$joueur->getADEfromDB($db);
$joueur->a = $joueur->a - 100;
$joueur->setADEtoDB($db);

?>


