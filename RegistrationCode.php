<?php
	include('Header.php');
	
	$query= mysql_query("Select Count(*)+1 as data From CustomerTable", $con);
	$row = mysql_fetch_array($query);
	$Id="C" . sprintf("%03d",$row['data']);

	$Name=$_POST["txtName"];
	$Address=$_POST["txtAddress"];
	$ContactNo=$_POST["txtContactNo"];
	$MailId=$_POST["txtMailId"];
	$Password=$_POST["txtPassword"];
		
	$qry="Insert Into CustomerTable Values('". $Id ."','". $Name ."','". $Address ."','". $ContactNo ."','". $MailId ."','". $Password ."')";
	mysql_query($qry,$con) or die(mysql_error());
	echo "<br/><br/>Registration Successfull! <br/>";
	echo "<a href='LoginCustomer.php'>Click Here For Login</a>";
	mysql_close($con);
?>