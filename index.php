<?php

require 'class\App.php';
App::load();
$app = App::getInstance();
$db = $app->getDB();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    //$p = 'home';
    $p='home';
}

ob_start();
if($p === 'home'){
    require 'front/home.php';
}
if($p === 'auth'){
    header("Location: pages/index.php");
}
$content = ob_get_clean();
require 'front/default.php'
?>