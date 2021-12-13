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
    <link href="<?= base_url() ?>assets/templates1/https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/main.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/templates1/css/form/all-type-forms.css">
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
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registrasi</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
<!--                        <form action="--><?//=base_url()?><!--pemohon/insertpemohon" method="post" id="loginForm">-->
                            <?= form_open('pemohon/insertpemohon',array('enctype' =>'multipart/form-data')) ?>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Nomor HP</label>
                                    <input type="text" name="hp" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Pas Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Foto KTP</label>
                                    <input type="file" name="fotoktp" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn" type="submit">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2019. Balitbang Provinsi Riau</p>
			</div>
		</div>   
    </div>
