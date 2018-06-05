<?php
require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();

$joueur = new Joueur();
$joueur->getJoueurById($_SESSION['auth'],$db);
$joueur->getADEfromDB($db);

if(isset($_POST['qtevc']))
{   
    if($_POST['creance'] == 2)
        $percentage = 1/2;
    if($_POST['creance'] == 1)
        $percentage = 1;
    else
        $percentage = 0;

    $qte = $_POST['qtevc'];
    $creance = $qte*120*$percentage;
    $jour = $_POST['jour'];
    $joueur->setCreancetoDB($db,$jour,$creance);
    $joueur->pdt = $joueur->pdt - $qte;
    $joueur->setPdtMPtoDB($db);
}    


?>


