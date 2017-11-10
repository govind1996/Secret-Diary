<?php
	session_start();
	
	include("connection.php");

	$diary=mysqli_real_escape_string($link,$_POST['diary']);
	$sessionid=$_SESSION['id'];
	$query="UPDATE example SET diary='$diary' WHERE id='$sessionid' LIMIT 1";
	mysqli_query($link,$query);
?>
