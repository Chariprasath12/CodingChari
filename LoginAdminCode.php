<?php
session_start();
    include('Header.php');
	
	$Username = $_POST["txtUsername"];
	$Password = $_POST["txtPassword"];
	
	$query= mysql_query("Select Count(*) as data From AdminTable Where Username = '". $Username ."' and Password = '". $Password ."' ", $con);
	$row = mysql_fetch_array($query);
	if($row['data']==1){
		$_SESSION["username"] = $Username;
		$_SESSION["usertype"] = "admin";
        header('location:HomeAdmin.php');
	}
	else{
        header('location:LoginAdmin.php');
	}
	
	mysql_close($con);
?>