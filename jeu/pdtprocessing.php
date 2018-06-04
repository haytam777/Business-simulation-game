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
    $pdt = $_POST['qtepdt'];
    $joueur->mp = $joueur->mp - $pdt*2;
    $joueur->pdt = $joueur->pdt + $pdt;

    $joueur->setPdtMPtoDB($db);
}

?>
