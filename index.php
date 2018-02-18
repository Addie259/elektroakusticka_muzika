<?php
include "conf.php";
$conn = Database::getInstance();
?>
<!DOCTYPE HTML>

<html>
	<head>
                <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
		<title> Elektroakustička muzika u Vojvodini </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
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
					<p>U susret šezdesetoj godišnjici</p>
					<ul class="actions">
						<li><a href="#one" class="button big scrolly">Saznaj više</a></li>
					</ul>
				</div>
			</section>
                <section id="one" class="wrapper style1">
				<div class="container">
					<header class="major">
                                            <h2><i>Šumovi su uglavnom shvatani kao nejasni. To nije tačno</i></h2>
						<p>Pjer Šefer</p>
		<section id="three" class="wrapper style1">
				<div class="container">
					<header class="major">
                                            <h2><i>Te elektronske spravice provocirale su naše ideje i dovele našu muziku u pravce koje smo morali neminovno dotaći.</i></h2>
						<p>Slavko Šuklar</p>
					</header>
			
		<!-- Two 
			<section id="two" class="wrapper style2">
				<div class="container">
					<div class="row uniform">
						<div class="4u 6u(2) 12u$(3)">
							<section class="feature fa-briefcase">
								<h3>Natoque phasellus</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
						<div class="4u 6u$(2) 12u$(3)">
							<section class="feature fa-code">
								<h3>Ultricies dolore</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
						<div class="4u$ 6u(2) 12u$(3)">
							<section class="feature fa-save">
								<h3>Magna lacinia</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
						<div class="4u 6u$(2) 12u$(3)">
							<section class="feature fa-desktop">
								<h3>Praesent lacinia</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
						<div class="4u 6u(2) 12u$(3)">
							<section class="feature fa-camera-retro">
								<h3>Morbi semper</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
						<div class="4u$ 6u$(2) 12u$(3)">
							<section class="feature fa-cog">
								<h3>Arcu consequat</h3>
								<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
							</section>
						</div>
					</div>
				</div>
			</section>
			-->
		<?php
                include "three.php";
                
                ?>
			
		<!-- CTA 
			<section id="cta" class="wrapper style3">
				<h2>Sed faucibus et consequat</h2>
				<ul class="actions">
					<li><a href="#" class="button big">Get Started</a></li>
				</ul>
			</section> -->
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
				</ul>
				
				<span class="copyright">
					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a> 
				</span>
			</footer>

	</body>
</html>