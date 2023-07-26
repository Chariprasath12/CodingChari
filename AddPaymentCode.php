<?php
session_start();
	include('HeaderAdmin.php');
	
	
	/*$Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	if($Id!="")
	{
		echo $Id;
		
	}
	
	return;*/
	$query= mysql_query("SELECT coalesce(max(sno),0)+1 as cnt FROM Payment", $con);
	$row = mysql_fetch_array($query);
	$Id="P" . sprintf("%03d",$row['cnt']);
	$BC= $_SESSION['BookingCode'];
	$Dat =  date('Y-m-d');

	$Status=$_POST["cboStatus"];
	$Mode=$_POST["cboMode"];
	$Desc=$_POST["txtDesc"];
$Amt=$_POST["txtAmount"];
	$qry="Insert Into Payment(BookingCode,EntryDate,Status,Mode,Amount,Description) Values('". $BC ."','". $Dat . "','" . $Status ."','". $Mode ."','". $Amt ."','" . $Desc ."')";
	mysql_query($qry,$con) or die(mysql_error());
	
	$qry2="Update Booking Set Status='Approved' Where BookingCode='"  . $BC . "'";
	mysql_query($qry2,$con) or die(mysql_error());
	
	$query= mysql_query("SELECT ScheduleCode,SeatsRequired  FROM Booking Where BookingCode='"  . $BC . "'", $con);
	$row = mysql_fetch_array($query);
	$SR= $row['SeatsRequired'];
	$SC= $row['ScheduleCode'];
	$qry3="Update Schedule Set Available=Available-" . $SR . " Where ScheduleCode='" . $SC . "'";
	mysql_query($qry3,$con) or die(mysql_error());
	
	
	
   	//header('location:AddPackage.php');
	echo "<h2>Payment Details Saved.</h2>";
	echo "<a href='ViewBookingsByAdmin.php'>Back to Payment</a>";
	mysql_close($con);
?>