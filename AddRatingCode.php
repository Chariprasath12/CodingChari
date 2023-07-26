<?php
session_start();
	include('HeaderCustomer.php');
	
	
	/*$Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	if($Id!="")
	{
		echo $Id;
		
	}
	
	return;*/
	
	
	
	$query= mysql_query("SELECT coalesce(max(sno),0)+1 as cnt FROM Rating", $con);
	$row = mysql_fetch_array($query);
	$Id=$row['cnt'];

	$Dat=$_POST["txtEntryDate"];
	$Rating=$_POST["cboRating"];
	$Desc=$_POST["txtDesc"];
	
	

	$qry="Insert Into Rating(EntryDate,CustomerCode,Rating,Description) Values('". $Dat ."','". $_SESSION['username']  ."','". $Rating ."','". $Desc ."')";
	mysql_query($qry,$con) or die(mysql_error());
   	header('location:AddRating.php');
	mysql_close($con);
?>