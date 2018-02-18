<?php
session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!=1){
	header("location: index.html");
}
?>
<a href="autori.php.php">Autori</a>
<a href="dela.php.">Dela</a>
<a href="slike.php.">Slike</a>
<a href="logout.php">Logout</a>