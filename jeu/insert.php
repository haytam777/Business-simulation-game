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

    $a = $_POST['affaire'];
    $d = $_POST['depense'];
    $e = $_POST['epargne'];

    $joueur->caisse = $joueur->caisse-((int)$a+(int)$d+(int)$e);

    $joueur->a = $joueur->a + $a;
    $joueur->d = $joueur->d + $d;
    $joueur->e = $joueur->e + $e;
        
    $joueur->setADEtoDB($db);
    $joueur->setCaissetoDB($db);
}

?>

