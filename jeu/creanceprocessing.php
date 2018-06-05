<?php
require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();

$joueur = new Joueur();
$joueur->getJoueurById($_SESSION['auth'],$db);
$joueur->getADEfromDB($db);

$creance = $joueur->getCreance($db,$_POST['idjour']);
$joueur->a = $joueur->a + $creance;
$joueur->dropCreance($db,$_POST['idjour']);
$joueur->setADEtoDB($db);

?>


