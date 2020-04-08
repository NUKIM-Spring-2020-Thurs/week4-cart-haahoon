<?php
ob_start(); 
session_start();

$uid="hahoon";
$upwd="12345";  
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="S";
	$_SESSION["ID"]=$id;
	header('Location:catalog.php');
	
}else{
	header('Location:login.php');
}

?>

