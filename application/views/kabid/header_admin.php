<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SIPP-Balitbang Provinsi Riau Kabid</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>assets/templates/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>assets/templates/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>assets/templates/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/templates/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/templates/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="<?= base_url() ?>assets/templates/images/icon/logo4.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <a class="js-arrow" href="<?= base_url() ?>/admin/home"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>kabid/seminar">
                            <i class="fas fa-user"></i> Nilai Penelitian</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="<?= base_url() ?>assets/templates/images/icon/riau.png" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"><?=$_SESSION['nama_kabid']?></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?= base_url() ?>assets/templates/images/icon/riau.png" alt="Joshn Doe"  width="40px" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?=$_SESSION['nama_kabid']?></a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="<?= base_url() ?>kabid/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
