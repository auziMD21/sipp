<?php
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPP-Balitbang Provinsi Riau</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/templates1/img/riau.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url() ?>assets/templates1/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="#"><img class="main-logo" src="<?=base_url()?>assets/templates1/img/logo/logo4.png" width="200px" style="margin-top: 20px;margin-bottom: 20px"   alt="" /></a>
            <strong><a href="index.php"><img src="<?=base_url()?>assets/templates1/img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a href="<?=base_url()?>/pemohon/home">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>pemohon/permohonan" aria-expanded="false"><span class="fa fa-check" aria-hidden="true"></span> <span class="mini-click-non">Permohonan </span></a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>pemohon/seminar" aria-expanded="false"><span class="fa fa-grav"></span> <span class="mini-click-non">Seminar</span></a>
                    </li>
                    <li><a href="<?=base_url()?>pemohon/histori" aria-expanded="false"><span class="educate-icon educate-student icon-wra"></span> <span class="mini-click-non">History</span></a>
                    </li>
                </ul>


            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.php"><img class="main-logo" src="<?=base_url()?>assets/templates1/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="<?=base_url()?>upload/registrasi/<?=$_SESSION['foto']?>" alt="" />
                                                    <span class="admin-name"><?=$_SESSION['nama']?></span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="<?=base_url()?>pemohon/profil"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                    </li>
                                                    <li><a href="<?=base_url()?>pemohon/logout"<span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

