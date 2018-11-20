<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Masuk</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/toastr.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqueryui/jquery-ui.css'); ?>">
	<link href="<?php echo base_url('assets/css/font.source-sans-pro.css'); ?>" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.webp'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.webp'); ?>">  
</head>
<body>
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<p class="lead">Masuk ke Dashboard Administrator</p>
							</div>
							<form class="form-auth-small" method="POST" action="<?php echo base_url('Login/authlogin'); ?>">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Nama pengguna</label>
									<input type="text" class="form-control" id="signin-email" placeholder="Nama pengguna" name="username" required=""> 
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Kata sandi</label>
									<input type="password" class="form-control" id="signin-password" placeholder="Kata sandi" name="password" required=""> 
								</div>
								<div class="form-group clearfix"></div>
								<input type="submit" class="btn btn-primary btn-lg btn-block" value="Masuk"/>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Aplikasi Antrian Klinik</h1>
							<p>by TinyLab</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/scripts/klorofil-common.js');  ?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
	<script src="<?php echo base_url('assets/vendor/toastr/toastr.min.js'); ?>"></script>
	<script type="text/javascript">
	<?php 
	if($this->session->flashdata('error')){
		?>
	toastr.options = {
		"closeButton": false,
		"debug": false,
		"newestOnTop": false,
		"progressBar": false,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
	Command: toastr["error"]("<?php echo $this->session->flashdata('error'); ?>")
	<?php
	}
	?>
	</script>
</body>
</html>