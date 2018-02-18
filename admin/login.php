<?php
require "../conf.php";
if(!isset($_POST['tbUsername'])||!isset($_POST['tbPassword'])){
	die("invalid parameters");
}	
$username = $_POST['tbUsername'];
$password = $_POST['tbPassword'];  
$username = str_replace("'","",$username);
$username = str_replace("-","",$username);
$password = str_replace("'","",$password);
$password = str_replace("-","",$password);

$conn = Database::getInstance(); 
$q = $conn->query("select * from user where username='{$username}' and password='{$password}' limit 1");
$res = $q->fetch(PDO::FETCH_OBJ);
if($res){
	session_start();
	$_SESSION['status'] = $res->status;
	header("location: index.php");
} else {
	echo "Invalid user";
}
//print_r($user);