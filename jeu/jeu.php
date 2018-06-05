<?php

require '..\class\App.php';
App::loadAuth();
$app = App::getInstance();
$db = $app->getDB();
session_start();

$session = Session::getSession($db, $_GET['p']);
$idjour = $session->getJourCourant();

$joueur = new Joueur();
$joueur->getJoueurById($_SESSION['auth'],$db);
$joueur->getADEfromDB($db);

$q = $joueur->getQuantite($db, 11);

if($joueur->pdt == 0)
    $de = 0;
else{
    $de = rand(1,6);
    while ($joueur->pdt < $de ){
        $de = rand(1,6);
        
    }
}

$creance_percentage = rand(1,5);
if($creance_percentage == 1){
    $creance_perdentage = 1;
    $qd = $idjour + 1;
}
else if($creance_percentage == 1){
    $creance_perdentage = 2;
    $qd = $idjour + 4;
}
else if($creance_percentage == 1){
    $creace_perdentage = 1;
    $qd = 29;
}
else if($creance_percentage == 1){
    $creance_perdentage = 2;
    $qd = $idjour + 1;
}
else {
    $creance_perdentage = 0;
    $qd = 0;
}

echo 'tehee '.$q;


$ctrlSally ="data-toggle=\"modal\" data-target=\"#vendre_Modal\"";
$ctrlBanque =  "data-toggle=\"modal\" data-target=\"#achats_Modal\"";
$ctrlHarry = "data-toggle=\"modal\" data-target=\"#add_data_ModalMP\"";
$ctrlClara = "data-toggle=\"modal\" data-target=\"#add_data_ModalClara\"";
$ctrlCartes = "data-toggle=\"modal\" data-target=\"#cartevie_Modal\"";
$ctrlCreance = "data-toggle=\"modal\" data-target=\"#creance_Modal\"";
$ctrlADE = "data-toggle=\"modal\" data-target=\"#add_data_Modal\"";
$ctrlAchat ="data-toggle=\"modal\" data-target=\"#achats_Modal\"";
$ctrlPdt = "data-toggle=\"modal\" data-target=\"#creerpdt_Modal\"";
$ctrlVendren = "data-toggle=\"modal\" data-target=\"#vendren_Modal\"";
$ctrlVendrec = "data-toggle=\"modal\" data-target=\"#vendrec_Modal\"";

switch ($idjour%7) {
    case 1 :  break;
    case 2 :  break;
    case 3 : break;
    case 4 : break;
    case 5 :  break;
    case 6 :  break;
    case 0 :  break;
}

$c1="";
$c2="";
$c3="";
$c4="";
$c5="";
$c6="";
$c7="";
$c8="";
$c9="";
$c10="";
$c11="";
$c12="";
$c13="";
$c14="";
$c15="";
$c16="";
$c17="";
$c18="";
$c19="";
$c20="";
$c21="";
$c22="";
$c23="";
$c24="";
$c25="";
$c26="";
$c27="";
$c28="";
$c29="";
$c30="";

$d1="";
$d2="";
$d3="";
$d4="";
$d5="";
$d6="";
$d7="";
$d8="";
$d9="";
$d10="";
$d11="";
$d12="";
$d13="";
$d14="";
$d15="";
$d16="";
$d17="";
$d18="";
$d19="";
$d20="";
$d21="";
$d22="";
$d23="";
$d24="";
$d25="";
$d26="";
$d27="";
$d28="";
$d29="";
$d30="";

switch ($idjour) {
case 1 : $c1  =" href=\"\" data-toggle=\"modal\" data-target=\"#jeudi_Modal\">Plus d'infos"; $d1="style=\"background-color: #668cff;\"" ;break;
case 2 : $c2  =" href=\"\" data-toggle=\"modal\" data-target=\"#vendredi_Modal\">Plus d'infos"; $d2="style=\"background-color: #668cff;\"" ;break;
case 3 : $c3  =" href=\"\" data-toggle=\"modal\" data-target=\"#samedi_Modal\">Plus d'infos"; $d3="style=\"background-color: #668cff;\"" ;break;
case 4 : $c4  =" href=\"\" data-toggle=\"modal\" data-target=\"#dimanche_Modal\">Plus d'infos"; $d4="style=\"background-color: #668cff;\"" ;break;
case 5 : $c5  =" href=\"\" data-toggle=\"modal\" data-target=\"#lundi_Modal\">Plus d'infos"; $d5="style=\"background-color: #668cff;\"" ;break;
case 6 : $c6  =" href=\"\" data-toggle=\"modal\" data-target=\"#mardi_Modal\">Plus d'infos"; $d6="style=\"background-color: #668cff;\"" ;break;
case 7 : $c7  =" href=\"\" data-toggle=\"modal\" data-target=\"#mercredi_Modal\">Plus d'infos"; $d7="style=\"background-color: #668cff;\"" ;break;
case 8 : $c8  =" href=\"\" data-toggle=\"modal\" data-target=\"#jeudi_Modal\">Plus d'infos"; $d8="style=\"background-color: #668cff;\"" ;break;
case 9 : $c9  =" href=\"\" data-toggle=\"modal\" data-target=\"#vendredi_Modal\">Plus d'infos"; $d9="style=\"background-color: #668cff;\"" ;break;
case 10 : $c10  =" href=\"\" data-toggle=\"modal\" data-target=\"#samedi_Modal\">Plus d'infos"; $d10="style=\"background-color: #668cff;\"" ;break;
case 11 : $c11  =" href=\"\" data-toggle=\"modal\" data-target=\"#dimanche_Modal\">Plus d'infos"; $d11="style=\"background-color: #668cff;\"" ;break;
case 12 : $c12  =" href=\"\" data-toggle=\"modal\" data-target=\"#lundi_Modal\">Plus d'infos"; $d12="style=\"background-color: #668cff;\"" ;break;
case 13 : $c13  =" href=\"\" data-toggle=\"modal\" data-target=\"#mardi_Modal\">Plus d'infos"; $d13="style=\"background-color: #668cff;\"" ;break;
case 14 : $c14  =" href=\"\" data-toggle=\"modal\" data-target=\"#mercredi_Modal\">Plus d'infos"; $d14="style=\"background-color: #668cff;\"" ;break;
case 15 : $c15  =" href=\"\" data-toggle=\"modal\" data-target=\"#jeudi_Modal\">Plus d'infos"; $d15="style=\"background-color: #668cff;\"" ;break;
case 16 : $c16  =" href=\"\" data-toggle=\"modal\" data-target=\"#vendredi_Modal\">Plus d'infos"; $d16="style=\"background-color: #668cff;\"" ;break;
case 17 : $c17  =" href=\"\" data-toggle=\"modal\" data-target=\"#samedi_Modal\">Plus d'infos"; $d17="style=\"background-color: #668cff;\"" ;break;
case 18 : $c18  =" href=\"\" data-toggle=\"modal\" data-target=\"#dimanche_Modal\">Plus d'infos"; $d18="style=\"background-color: #668cff;\"" ;break;
case 19 : $c19  =" href=\"\" data-toggle=\"modal\" data-target=\"#lundi_Modal\">Plus d'infos"; $d19="style=\"background-color: #668cff;\"" ;break;
case 20 : $c20  =" href=\"\" data-toggle=\"modal\" data-target=\"#mardi_Modal\">Plus d'infos"; $d20="style=\"background-color: #668cff;\"" ;break;
case 21 : $c21  =" href=\"\" data-toggle=\"modal\" data-target=\"#mercredi_Modal\">Plus d'infos"; $d21="style=\"background-color: #668cff;\"" ;break;
case 22 : $c22  =" href=\"\" data-toggle=\"modal\" data-target=\"#jeudi_Modal\">Plus d'infos"; $d22="style=\"background-color: #668cff;\"" ;break;
case 23 : $c23  =" href=\"\" data-toggle=\"modal\" data-target=\"#vendredi_Modal\">Plus d'infos"; $d23="style=\"background-color: #668cff;\"" ;break;
case 24 : $c24  =" href=\"\" data-toggle=\"modal\" data-target=\"#samedi_Modal\">Plus d'infos"; $d24="style=\"background-color: #668cff;\"" ;break;
case 25 : $c25  =" href=\"\" data-toggle=\"modal\" data-target=\"#dimanche_Modal\">Plus d'infos"; $d25="style=\"background-color: #668cff;\"" ;break;
case 26 : $c26  =" href=\"\" data-toggle=\"modal\" data-target=\"#lundi_Modal\">Plus d'infos"; $d26="style=\"background-color: #668cff;\"" ;break;
case 27 : $c27  =" href=\"\" data-toggle=\"modal\" data-target=\"#mardi_Modal\">Plus d'infos"; $d27="style=\"background-color: #668cff;\"" ;break;
case 28 : $c28  =" href=\"\" data-toggle=\"modal\" data-target=\"#mercredi_Modal\">Plus d'infos"; $d28="style=\"background-color: #668cff;\"" ;break;
case 29 : $c29  =" href=\"\" data-toggle=\"modal\" data-target=\"#jeudi_Modal\">Plus d'infos"; $d29="style=\"background-color: #668cff;\"" ;break;
case 30 : $c30  =" href=\"\" data-toggle=\"modal\" data-target=\"#vendredi_Modal\">Plus d'infos"; $d30="style=\"background-color: #668cff;\"" ;break;

}

$a = $joueur->a;



?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="../css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    
    <?php require('creerpdt_modal.html'); ?>
    
    <?php require('cartevie.php' ); ?>
    <?php require('cartevie_modal.html') ?>

    <!--ADE MODAL HTML !-->
    <?php require('emprunt_modal.html') ?>

    <!--ADE MODAL HTML !-->
    <?php require('ade_modal.html') ?>

    <!--MP MODAL HTML !-->
    <?php require('MP_modal.html') ?>

    <?php require('banque_modal.html') ?>

     <!--MP MODAL HTML !-->
    <?php require('Clara_modal.html') ?>

    <?php require('vendre_modal.php') ?>
    <?php require('vendren_modal.html') ?>
    <?php require('vendrec_modal.html') ?>

    <?php require('lundi_modal.html') ?>
    <?php require('mardi_modal.html') ?>
    <?php require('mercredi_modal.html') ?>
    <?php require('jeudi_modal.html') ?>
    <?php require('vendredi_modal.html') ?>
    <?php require('samedi_modal.html') ?>
    <?php require('dimanche_modal.html') ?>

    <?php require('achats_modal.html') ?>

    <?php require('creance_modal.php') ?>

    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="../images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="../images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                    <input type="hidden" name="a" id = "a" value="<?= $a;?>">
                        
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <div class="container-fluid">
                                    <!-- Start Page Content -->
                                    <div class="row">
                                        <div >
                                            <div >
                                                <p class="whitething"> whitethingwhitethingwhitethingwhitethingwhitethingwhitethingwhitething </p>
                                            </div>
                                        </div>
                                        <!--Raccourci caricatures-->
                                        <div class="col-md-2">
                                            <div class="card p">
                                                <div class="media">
                                                    <div>
                                                        <span>
                                                        <img src="../images/Goal.png" style="width:80px;height:80px;">
                                                        </span>
                                                    </div>
                                                    <div class="media-body media-text-right">
                                                        <h2 style="font-size: 20px">Caricatures</h2>
                                                        <p class="m-b-1" style="text-align: right;"> Personnages</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Raccourci -->
                                        <div class="col-md-2">
                                            <div class="card p">
                                                <div class="media">
                                                    <div>
                                                        <span>
                                                        <img <?= $ctrlADE  ?>  src="../images/Caisse.png" style="width:80px;height:80px;">
                                                        </span>
                                                        
                                                    </div>
                                                    <div class="media-body media-text-right">
                                                        <h2 style="font-size: 20px">Caisse</h2>
                                                        <p class="m-b-1" style="text-align: right;"> A.D.E</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <div class="container-fluid" >
                    <div class="row">
                        <div class="navbar-collapse">
                            <div class="card p">
                                <div class="media">
                                    <div >
                                        <table>
                                            <tr>
                                              <th>Mes infos </th>
                                              <th></th>
                                     

                                            </tr>
                                            <tr>
                                              <td>Pseudo</td>
                                              <td><?= $joueur->user; ?></td>
                                            
                                           
                                            </tr>
                                            <tr>
                                              <td>Mat.Première</td>
                                              <td><?= $joueur->mp."pièces"; ?></td>
                                             
                                              
                                            </tr>
                                            <tr>
                                              <td>Affaires</td>
                                              <td><?= $joueur->a; ?></td>
                                             
                                              
                                            </tr>
                                            <tr>
                                              <td>Dépenses</td>
                                              <td><?= $joueur->d; ?></td>
                                             
                                              
                                            </tr>
                                            <tr>
                                              <td>Epargne</td>
                                              <td><?= $joueur->e; ?></td>
                                            </tr>
                                            <br/>

                                            <tr>
                                              <td>Produits</td>
                                              <td><?= $joueur->pdt; ?></td>
                                            </tr>
                                            

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span>
                                            <img <?= $ctrlPdt ?> src="../images/produit.png" style="width:80px;height:80px;">
                                        </span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        
                                        
                                        <p class="m-b-0">Fabriquer un produit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="navbar-collapse">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h1 id="nomjour">Jeudi</h1>
                                        <h2 id="idjour" onchange="myFunction()"><?= $idjour; ?></h2>
                                        <h2 id="carb">0</h2>
                                        <h2 id="compteur" > 
                                            <?php
                                                $now = time();
                                                $start = mktime(0, 0, 0, 1, 24, 2007);
                                                $carbonsaving =(0);
                                                $format = round($carbonsaving, 2);
                                            ?>
                                        </h2>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Conteneur VILLAGE-->
                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlSally ?> src="../images/Sally.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 22px">Sally</h2>
                                    <p class="m-b-1" >boutique</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlBanque ?> src="../images/Banque.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 21px">Banque</h2>
                                    <p  style="text-align: right;">du people</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img  <?= $ctrlHarry  ?>   src="../images/Harry.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 21px">Harry</h2>
                                    <p class="m-b-1">grossiste</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlClara ?> src="../images/Clara.png" style="width:75px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 24px">Clara</h2>
                                    <p class="m-b-1" style="font-size: 13px">supermarché</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conteneur CARTES VIE-->
                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlCartes ?> src="../images/Cards.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 20px">Cartes</h2>
                                    <p class="m-b-1" style="text-align: right;"> de vie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Conteneur COMBIEN PAYERONT-ILS?-->
                    <div class="col-md-2">
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlCreance ?> src="../images/Roue.jpg" style="width:76px;height:79px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 19px">La roue</h2>
                                    <p class="m-b-1" style="text-align: right;">Vont-ils</p><p class="m-b-1" style="text-align: right;">payer?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Cycle d'affaire-->
                    <div class="col-md-10">
                        <div class="card p-150" >
                            <div>
                                <div class="media-body media-text-right">
                                    <div style="overflow-x:auto;">
                                          <table class="cycleAffaires">
                                            <tr>
                                              <th>LUNDI</th>
                                              <th>MARDI</th>
                                              <th>MERCREDI</th>
                                              <th>JEUDI</th>
                                              <th>VENDREDI</th>
                                              <th>SAMEDI</th>
                                              <th>DIMANCHE</th>

                                            </tr>
                                           <tr>
     <div><td ></a></td></div>
     <div><td ></a></td></div>
     <div><td ></a></td></div>
     <div><td <?= $d1 ?>><a<?= $c1 ?>></a></td></div>
     <div><td <?= $d2 ?>><a<?= $c2 ?>></a></td></div>
     <div><td <?= $d3 ?>><a<?= $c3 ?>></a></td></div>
     <div><td <?= $d4 ?>><a<?= $c4 ?>></a></td></div>
</tr>
<tr>
     <div><td <?= $d5 ?>><a<?= $c5 ?>></a></td></div>
     <div><td <?= $d6 ?>><a<?= $c6 ?>></a></td></div>
     <div><td <?= $d7 ?>><a<?= $c7 ?>></a></td></div>
     <div><td <?= $d8 ?>><a<?= $c8 ?>></a></td></div>
     <div><td <?= $d9 ?>><a<?= $c9 ?>></a></td></div>
     <div><td <?= $d10 ?>><a<?= $c10 ?>></a></td></div>
     <div><td <?= $d11 ?>><a<?= $c11 ?>></a></td></div>
</tr>
<tr>
     <div><td <?= $d12 ?>><a<?= $c12 ?>></a></td></div>
     <div><td <?= $d13 ?>><a<?= $c13 ?>></a></td></div>
     <div><td <?= $d14 ?>><a<?= $c14 ?>></a></td></div>
     <div><td <?= $d15 ?>><a<?= $c15 ?>></a></td></div>
     <div><td <?= $d16 ?>><a<?= $c16 ?>></a></td></div>
     <div><td <?= $d17 ?>><a<?= $c17 ?>></a></td></div>
     <div><td <?= $d18 ?>><a<?= $c18 ?>></a></td></div>
</tr>
<tr>
     <div><td <?= $d19 ?>><a<?= $c19 ?>></a></td></div>
     <div><td <?= $d20 ?>><a<?= $c20 ?>></a></td></div>
     <div><td <?= $d21 ?>><a<?= $c21 ?>></a></td></div>
     <div><td <?= $d22 ?>><a<?= $c22 ?>></a></td></div>
     <div><td <?= $d23 ?>><a<?= $c23 ?>></a></td></div>
     <div><td <?= $d24 ?>><a<?= $c24 ?>></a></td></div>
     <div><td <?= $d25 ?>><a<?= $c25 ?>></a></td></div>
</tr>
<tr>
     <div><td <?= $d26 ?>><a<?= $c26 ?>></a></td></div>
     <div><td <?= $d27 ?>><a<?= $c27 ?>></a></td></div>
     <div><td <?= $d28 ?>><a<?= $c28 ?>></a></td></div>
     <div><td <?= $d29 ?>><a<?= $c29 ?>></a></td></div>
     <div><td <?= $d30 ?>><a<?= $c30 ?>></a></td></div>
     <div><td ></a></td></div>
     <div><td ></a></td></div>
</tr>
                                        
                                          </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                                        <!-- Payeront ils-->
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlADE ?>  src="../images/Caisse.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 20px">Caisse</h2>
                                    <p class="m-b-1" style="text-align: right;"> A.D.E</p>
                                </div>
                            </div>
                        </div>
                                            <!-- J'ai acheté-->
                        <div class="card p">
                            <div class="media">
                                <div>
                                    <span>
                                    <img <?= $ctrlAchat ?> src="../images/Achete.png" style="width:80px;height:80px;">
                                    </span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="font-size: 20px">Achats</h2>
                                    <p class="m-b-1" style="font-size: 15px"> Mes achats </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="../js/lib/morris-chart/raphael-min.js"></script>
    <script src="../js/lib/morris-chart/morris.js"></script>
    <script src="../js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="../js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="../js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="../js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="../js/lib/calendar-2/pignose.init.js"></script>

    <script src="../js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="../js/scripts.js"></script>

    <script type="text/javascript">
        // we need to import our server side variable into javascript to let it increment live
    
        
    </script>

    <!-- MODAL EMPRINT SCRIT-->
    <?php
    if($idjour === '177'){ 
        $joueur->a = 200;
        $joueur->setADEtoDB($db);
    ?>
    <script src="emprunt_modal.js"></script>
    <?php } ?>

    <!-- MODAL CARTE VIE-->
    <script src="cartevie_modal.js"></script>
    <!--MODAL ADE SCRIPT -->
    <script src="ade_modal.js"></script>

    <!--MODAL MP SCRIPT -->
    <script src="MP_modal.js"></script>

    <!--MODAL PDT SCRIPT -->
    <script src="creerpdt_modal.js"></script>

    <script src="banque_modal.js"></script>

    <!--MODAL CLARA SCRIPT -->
    <script src="Clara_modal.js"></script>

    <script src="vendren_modal.js"></script>

    <script src="vendrec_modal.js"></script>

    <script src="creance_modal.js"></script>


    <style>

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        th, td {
            
            padding: 8px;
        }
        .display {
          display: none;
          }
        .whitething {
            color: white;
        }

        .cycleAffaires {
            border: 1px solid black;
        }

        td,th {
            border-style:solid;
            width: 14%;
            height:40px;
            border-width:3px;
            border-color:#333333;
            text-align: center;
            text-align-last: center;
            
         }
        tr:nth-child(even){background-color: #f2f2f2}
        </style>

</body>

</html>