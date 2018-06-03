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


$ctrlSally = "";
$ctrlBanque = "";
$ctrlHarry = "";
$ctrlClara = "";
$ctrlCartes = "data-toggle=\"modal\" data-target=\"#cartevie_Modal\"";
$ctrlRoue = "";
$ctrlADE = "";
$ctrlAchat = "";

switch ($idjour%7) {
    case 1 :  break;
    case 2 : $ctrlADE = "data-toggle=\"modal\" data-target=\"#add_data_Modal\"" ; break;
    case 3 : break;
    case 4 : break;
    case 5 : $ctrlHarry = "data-toggle=\"modal\" data-target=\"#add_data_ModalMP\"" ; break;
    case 6 :  break;
    case 0 :  break;
}






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
    
    <?php require('cartevie.php' ); ?>
    <?php require('cartevie_modal.html') ?>

    <!--ADE MODAL HTML !-->
    <?php require('emprunt_modal.html') ?>

    <!--ADE MODAL HTML !-->
    <?php require('ade_modal.html') ?>

    <!--MP MODAL HTML !-->
    <?php require('MP_modal.html') ?>

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
                                              <td>CAISSE :</td>
                                              <td><?= $joueur->caisse; ?></td>
                                              
                                              
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
                                        <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 id="carb">0</h2>
                                        <?php
                                            $now = time();
                                            $start = mktime(0, 0, 0, 1, 24, 2007);
                                            $carbonsaving =(0);
                                            $format = round($carbonsaving, 2);
                                        ?>
                                        <p class="m-b-0">Paieront-ils</p>
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
                                    <img src="../images/Sally.png" style="width:80px;height:80px;">
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
                                    <img src="../images/Banque.png" style="width:80px;height:80px;">
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
                                    <img src="../images/Clara.png" style="width:75px;height:80px;">
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
                                    <img src="../images/Roue.jpg" style="width:76px;height:79px;">
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
                                          <table>
                                            <tr>
                                              <th>First Name</th>
                                              <th>Last Name</th>
                                              <th>Points</th>
                                              <th>Points</th>
                                              <th>Points</th>
                                              <th>Points</th>
                                              <th>Points</th>

                                            </tr>
                                            <tr>
                                              <td>Jill</td>
                                              <td>Smith</td>
                                              <td>50</td>
                                              <td>50</td>
                                              <td>50</td>
                                              <td>50</td>
                                              <td>50</td>
                                           
                                            </tr>
                                            <tr>
                                              <td>Eve</td>
                                              <td>Jackson</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              
                                            </tr>
                                            <tr>
                                              <td>Adam</td>
                                              <td>Johnson</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              
                                            </tr>
                                            <tr>
                                              <td>Eve</td>
                                              <td>Jackson</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              <td>94</td>
                                              
                                            </tr>
                                            <tr>
                                              <td>Adam</td>
                                              <td>Johnson</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              <td>67</td>
                                              
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
                                    <img src="../images/Achete.png" style="width:80px;height:80px;">
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
    if($idjour === '1'){ 
    ?>
    <script src="emprunt_modal.js"></script>
    <?php } ?>

    <!-- MODAL CARTE VIE-->
    <script src="cartevie_modal.js"></script>
    <!--MODAL ADE SCRIPT -->
    <script src="ade_modal.js"></script>

    <!--MODAL MP SCRIPT -->
    <script src="MP_modal.js"></script>


    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        .display {
          display: none;
          }
        .whitething {
            color: white;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        </style>

</body>

</html>