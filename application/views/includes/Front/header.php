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


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!--START SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- END SCROLL TOP BUTTON -->
