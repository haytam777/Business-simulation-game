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

    
    $quantite = $_POST['quantite'];
    $id_produit = $_POST['selected'];

   // $joueur->mp = 555;

    //$joueur->test($db);
    //$joueur->test($db);

    //ajout du produit à la bd
    $joueur->setProduittoDB($db, $id_produit, $quantite);

    //calcul metier
    $prix = $joueur->getPrix($db, $id_produit);
    echo "Prix = ".$prix;

    //$joueur->caisse = $joueur->caisse - $prix*$quantite;

    //maj caisse
    //$joueur>setCaissetoDB($db);
     echo "old a = ".$joueur->a;
    //maj ade
    $joueur->a = $joueur->a - $prix*$quantite;

    echo "new a = ".$joueur->a;

    $joueur->setADEtoDB($db);
}

?>
