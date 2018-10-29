<?php
$host="localhost";
$username="root";
$passwd="";
$db="web";
$conn = new mysqli($host,$username,$passwd,$db);

if($conn->connect_error)
	die("connection failed:".$conn->connect_error);
?>