<?php
require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();


if(!empty($_POST))
{
    $joueur = new Joueur();
    $joueur->getJoueurById($_SESSION['auth'],$db);
    $joueur->a = $_POST['affaire'];
    $joueur->d = $_POST['depense'];
    $joueur->e = $_POST['epargne'];
    $joueur->setADEtoDB($db);
}

?>
