<?php
require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();

$joueur = new Joueur();
$joueur->getJoueurById($_SESSION['auth'],$db);
$joueur->getADEfromDB($db);

if(($_POST['qtev']) != '')
{
    $qtev = $_POST['qtev'];
    $joueur->pdt = $joueur->pdt - $qtev;
    $joueur->a = $joueur->a + $qtev*60;
    

}else{
    
    $de = $_POST['de'];
    $joueur->pdt = $joueur->pdt - $de;
    $joueur->a = $joueur->a + $de*100;
    $joueur->setPdtMPtoDB($db);
    $joueur->setADEtoDB($db);
}

?>


