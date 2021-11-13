<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/assetGambar/favicon.png') ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/animate.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/aos.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/jquery.timepicker.css">

	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/css/style.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color: #3B5897 !important; color: #FFFFFF;">
		<div class="container">
			<!-- <i class="flaticon-university"></i> -->
			<a class="navbar-brand text-light" href="<?= base_url('FrontController') ?>">SMP N 33 Rejang Lebong</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?= (in_array(current_url(), [base_url('/'), base_url('/')])) ? 'active' : '' ?>"><a href="<?= base_url('/') ?>" class="nav-link text-light">Beranda</a></li>

					<li class="nav-item <?= (current_url() == base_url('FrontController/profile')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/profile') ?>" class="nav-link text-light">Profile</a></li>

					<li class="nav-item <?= (in_array(current_url(), [base_url('FrontController/guru'), (base_url('FrontController/guru/') . $start)])) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/guru') ?>" class="nav-link text-light">Guru</a></li>

					<li class="nav-item <?= (current_url() == base_url('FrontController/siswa')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/siswa') ?>" class="nav-link text-light">Siswa</a></li>

					<li class="nav-item <?= (current_url() == base_url('FrontController/kegiatan')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/kegiatan') ?>" class="nav-link text-light">Kegiatan</a></li>

					<li class="nav-item <?= (current_url() == base_url('FrontController/informasi')) ? 'active' : '' ?>"><a href="<?= base_url('FrontController/informasi') ?>" class="nav-link text-light">Informasi</a></li>

					<li class="nav-item cta"><a href="<?= base_url('AuthController') ?>" target="blank" class="btn btn-info" style="background: #50A3B9; color:white; border:none;"><span class="mx-3">Log In</span></a></li>

				</ul>
			</div>
			<div class="time ml-2">
				<div class="col pt-3 col-pt-0">
					<p><?= date('d-M-Y'); ?></p>
				</div>
			</div>
		</div>
	</nav>
	<!-- END nav -->
