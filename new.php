<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="register";
try{
	$conn=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "connected";
}
catch(PDOException $e)
{
	echo"connection failed:".$e->getMessage();
	exit;
}
?>