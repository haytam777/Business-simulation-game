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


    $joueur->a = $a;
    $joueur->d = $d;
    $joueur->e = $e;
        
    $joueur->setADEtoDB($db);
    
}

?>

