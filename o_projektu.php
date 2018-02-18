<?php
require "conf.php";
$conn = Database::getInstance();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>O projektu</title>
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
					<h2>Elektroakustička muzika u Vojvodini</h2>
					<p>Projekat realizuju: Matica Srpska i Akademija umetnosti u Novom Sadu</p>
					<ul class="actions">
						<li><a href="#one" class="button big scrolly">Saznaj više</a></li>
					</ul>
				</div>
			</section>
                <section id="one" class="wrapper style1">
                    
				<div class="container">
					<header class="major">
						<h2>Opis </h2>
						<p>Predmet istraživanja projekta Elektroakustička muzika u Vojvodini – prikupljanje i sistematizacija arhivske građe jesu audio snimci i druge vrste zapisa muzike stvarane uz pomoć elektro-akustičkih instrumenata na teritoriji Vojvodine od 1945. do 1990. godine. Korpus sadržaja koji je u fokusu ovog projekta obuhvata umetničku muziku (studijske i live-electronic kompozicije), različite vidove primenjene muzike (TV, film, radio, pozorište, konceptualna umetnost) i dela pop žanrova u kojima elektro-akustički instrumenti imaju centralno mesto u zvučnom sadržaju.	     
</p>
                                                }
					</header>
		
		
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
				
				<span class="copyright">
					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a> 
				</span>
			</footer>

	</body>
</html>