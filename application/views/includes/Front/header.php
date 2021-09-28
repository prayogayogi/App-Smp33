<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>assetGambar/favicon.png" type="image/x-icon">

	<!-- Font awesome -->
	<link href="<?= base_url('assets/') ?>FrontAssets/assets/css/font-awesome.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="<?= base_url('assets/') ?>FrontAssets/assets/css/bootstrap.css" rel="stylesheet">
	<!-- Slick slider -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>FrontAssets/assets/css/slick.css">
	<!-- Fancybox slider -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>FrontAssets/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
	<!-- Theme color -->
	<link id="switcher" href="<?= base_url('assets/') ?>FrontAssets/assets/css/theme-color/default-theme.css" rel="stylesheet">
	<!-- Calender -->
	<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js'></script>
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css" rel="stylesheet">
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				initialView: 'dayGridMonth'
			});
			calendar.render();
		});
	</script>
	<!-- Main style sheet -->
	<link href="<?= base_url('assets/') ?>FrontAssets/assets/css/style.css" rel="stylesheet">


	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

</head>

<body>

	<!--START SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- END SCROLL TOP BUTTON -->
	<!-- Start header  -->
	<header id="mu-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="mu-header-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="mu-header-top-left">
									<div class="mu-top-email">
										<i class="fa fa-envelope"></i>
										<span>info@markups.io</span>
									</div>
									<div class="mu-top-phone">
										<i class="fa fa-phone"></i>
										<span>(568) 986 652</span>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="mu-header-top-right">
									<nav>
										<ul class="mu-top-social-nav">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
											<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
											<li><a href="#"><span class="fa fa-youtube"></span></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End header  -->
	<!-- Start menu -->
	<section id="mu-menu">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- LOGO -->
					<!-- TEXT BASED LOGO -->
					<a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>
					<!-- IMG BASED LOGO  -->
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
						<li class="active"><a href="<?= base_url('FrontController'); ?>">Home</a></li>
						<li><a href="<?= base_url('FrontController/profile'); ?>">Profile</a> </li>
						<li><a href="gallery.html">Data Siswa</a></li>
						<li><a href="gallery.html">Organisasi</a></li>
						<li><a href="gallery.html">Kegiatan</a></li>
						<li><a href="gallery.html">Informasi</a></li>
						<li><a href="<?= base_url('AuthController') ?>" target="blank">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- End menu -->
	<!-- Start search box -->
	<div id="mu-search">
		<div class="mu-search-area">
			<button class="mu-search-close"><span class="fa fa-close"></span></button>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form class="mu-search-form">
							<input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
