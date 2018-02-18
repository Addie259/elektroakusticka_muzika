<?php
require "conf.php";
$conn = Database::getInstance();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Galerija</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
                <script src="galleria/galleria-1.5.7.min.js"></script>
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
                <style>
                .galleria{ max-width: 700px; height: 400px; background: #000 }
                </style>
	</head>
        
	<body class="landing">
            <?php
		include "menu.php";
            ?>
           
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Galerija</h2>
					<p>Elektroakustička muzika u Vojvodini</p>
					<ul class="actions">
						<li><a href="#one" class="button big scrolly">Saznaj više</a></li>
					</ul>
				</div>
			</section>
                <section id="one" class="wrapper style1">
				<div class="container">
					<header class="major">
						<div class="galleria">
                            <?php
                             $q = $conn->query('SELECT slika.slika_id, naziv, opis FROM elektroakustika.slika;');
                                        $r = array();
                                        while($res = $q->fetch(PDO::FETCH_OBJ)){
							$r[$res->naziv] = $res;
                                                        $res->preview = [];
                                        }
                                        foreach ($r as $result){
                                                ?>
                                                                                                     
                                                    <div class="galleria">
                                                     <img src="images/<?php echo $result->naziv;?>">
  
                                                    </div>
                                                    
                                                    

                                            <?php
                                            }
                                            ?>
                                            </div>
                                            <script>

    
    (function() { 
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    Galleria.run('.galleria');
    (function(){ 
	G.init();
}());
}());
</script>
                                            </header>
		
		
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
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
				</ul>
				<span class="copyright">
					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a> 
				</span>
			</footer>

	</body>
</html>