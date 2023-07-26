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
	$query= mysql_query("SELECT coalesce(max(sno),0)+1 as cnt FROM Booking", $con);
	$row = mysql_fetch_array($query);
	$Id="B" . sprintf("%03d",$row['cnt']);

	$Dat=$_POST["txtEntryDate"];
	$SR=$_POST["cboSR"];
	

	$qry="Insert Into Booking(BookingCode,ScheduleCode,CustomerCode,EntryDate,SeatsRequired,Status) Values('". $Id ."','". $_SESSION['ScheduleCode'] . "','" . $_SESSION['username'] ."','". $Dat ."','". $SR ."','Pending')";
	mysql_query($qry,$con) or die(mysql_error());
   	//header('location:AddPackage.php');
	echo "<h2>Seats Booked. Please Check Later for Approval Status.</h2>";
	echo "<a href='ViewBookings.php'>View Bookings</a>";
	mysql_close($con);
?>