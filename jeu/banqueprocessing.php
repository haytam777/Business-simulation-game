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
    $joueur->getADEfromDB($db);
    $a = $_POST['retirera'];
    $d = $_POST['retirerd'];
    $e = $_POST['ajoutere'];
    $joueur->a = $joueur->a - $a;
    $joueur->d = $joueur->d - $d;
    $joueur->e = $joueur->e + $e;

    $joueur->setADEtoDB($db);
}

?>
