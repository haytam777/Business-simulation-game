<?php

require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();


$joueur = new Joueur();
/*AUHENTIFICATION*/
if(!isset($_SESSION['auth'])){
    
    $log = $joueur->login($_POST['user'],$_POST['password'],$db);
    if($log){ 
        $_SESSION['auth']=$log->id;
        echo 'co';
    }
    else{
        header("Location: ../index.php");
    }
}else{
    echo 'cc';
    $joueur->getJoueurById($_SESSION['auth'],$db); 
}
/*END OF AUTHENTIFICATION*/

/*DETERMINE THE ROUTE*/
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    //$p = 'home';
    $p='home';
}
/*END OF ROUTING*/

/*CONTENT and ACTIONS*/
ob_start();
if($p === 'home'){
    require 'front/home.php';
}else if($p === 'joinsession'){
    $idSession = $_GET['id'];
    $session = Session::getSession($db,$idSession);
    $emptyplace = $session->getEmptyPlace($db); /*execute get list joueur*/
    $joined = $session->checkJoined($joueur->id);
    if(!$joined)
        $joueur->joinSession($db,$idSession,$emptyplace);
    
    header("Location:index.php?p=session&id=".$idSession); 
    
}else if($p==='session'){
    $idSession = $_GET['id'];
    $session = Session::getSession($db,$idSession);
    require 'front/session.php';
}

/*else if($p === 'deco'){
    session_destroy();
}
*/
$content = ob_get_clean();
require 'front/default.php'
?>