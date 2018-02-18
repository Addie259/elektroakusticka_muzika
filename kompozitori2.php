<?php
include "conf.php";
$conn = Database::getInstance();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Elektroakustička muzika u Vojvodini: Autori</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">
            <?php
		include "menu.php";
            ?>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Vojvođanski kompozitori elektroakustičke muzike</h2>
					<ul class="actions">
						<li><a href="#one" class="button big scrolly">Spisak autora</a></li>
					</ul>
				</div>
			</section>
                <section id="one" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>Autori:</h2>
                                                <?php
                                                include "classes/Autor.php";
                                                ?>
                                                
					</header>
		
		
		
		
			<footer id="footer">
				<!--<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
				</ul>
				<ul class="menu">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->
				<span class="copyright">
					&copy; Copyright. All rights<?php
