<?php
include "conf.php";
$conn = Database::getInstance();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Elektroakustička muzika u Vojvodini: Dela</title>
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
					<h2>Dela</h2>
					<ul class="actions">
						<li><a href="#one" class="button big scrolly">Elektroakustičke kompozicije vojvođanskih autora</a></li>
					</ul>
				</div>
			</section>
                <section id="one" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>Spisak dela:</h2>
                                                <?php
                                                include "delo.php";
                                                
                                              /*  $autori = $conn->query('SELECT autor_id, ime, prezime FROM autor'); 
						$autoriArr = []; 
						while($a = $autori->fetch(PDO::FETCH_OBJ)){
							$autoriArr [$a->autor_id] = $a;
							$a->dela = []; 
						} 
						$dela = $conn->query('select * from delo order by delo_id asc');
						
						while($d = $dela->fetch(PDO::FETCH_OBJ)){ 
							$autoriArr[$d->autor_id]->dela[] = $d;
						} 
                                                foreach ($autoriArr as $row)
                                                {
                                                 ?>
                                                <ul style="list-style: none;">
                                                    <li><a href=''><h4><?php echo $row->ime . " "; echo $row->prezime?></h4></a>
						    	<ul style="list-style: none;">
						    		<?php
								foreach($row->dela as $delo){
									?>
                                                            <li><i><b><?php echo $delo->naziv; ?></i></b></li>
                                                            <li><?php echo $delo->godina; ?></i></b></li>
                                                            <li><?php echo $delo->sastav; ?></i></b></li>
                                                            <li><?php echo $delo->opis; ?></i></b></li>
									<?php
								}
								?>
						    	</ul>
						    </li> 
                                                </ul>
                                                 <?php
                                                 }*/
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
					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a> 
				</span>
			</footer>

	</body>
</html>