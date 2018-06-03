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
    $vente = $_POST['vente'];
    $achat = $_POST['achat'];
    $joueur->getADEfromDB($db);

    $joueur->mp = $joueur->mp + $achat - $vente;
    $joueur->a = $joueur->a + $vente*20 - $achat*40;

    var_dump($joueur);

    $joueur->setMPtoDB($db);
}

?>
