<!doctype html>
<html lang="en">
<head>
	<title>Aplikasi Antrian Klinik</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist-custom.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/toastr.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.min.css'); ?>">
	<link href="<?php echo base_url('assets/css/font.source-sans-pro.css'); ?>" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?php echo base_url('assets/img/logo-dark.webp'); ?>" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger"></span>
							</a>
							<ul class="dropdown-menu notifications">
								<!-- <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Lorem ipsum sit dolor amet</a></li> -->
								<li><a style="text-align: center">Tidak ada notifikasi</a></li>
								<!-- <li><a href="#" class="more">Lihat semua notifikasi</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Bantuan</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('PetunjukAdmin'); ?>">Petunjuk &amp; Informasi</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('assets/img/user-placeholder.webp'); ?>" class="img-circle" alt="Avatar"> <span><?php echo $this->session->userdata('nama'); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('ProfilAdmin'); ?>"><i class="lnr lnr-user"></i> <span>Profil Saya</span></a></li>
								<li><a href="<?php echo base_url('PengaturanAdmin'); ?>"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>
								<li><a href="<?php echo base_url('Keluar'); ?>"><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>