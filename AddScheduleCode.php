
<?php
	include('HeaderAdmin.php');
	
	
	/*$Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	if($Id!="")
	{
		echo $Id;
		
	}
	
	return;
	*/
	
	
	$query= mysql_query("Select Count(*)+1 as data From Schedule", $con);
	$row = mysql_fetch_array($query);
	$Id="S" . sprintf("%03d",$row['data']);

	$P=$_POST["cboP"];
	$T=$_POST["cboT"];
	$Dat=$_POST["txtDate"];
	$Tim=$_POST["txtTime"];
	$MM=$_POST["txtMM"];

	
	$qry="Insert Into Schedule(ScheduleCode,PackageCode,TransportCode,DepartureDate,DepartureTime,MaxMembers,Available) Values('". $Id ."','". $P ."','". $T ."','". $Dat ."','". $Tim ."','". $MM ."','". $MM ."')";
	mysql_query($qry,$con) or die(mysql_error());
   	header('location:AddSchedule.php');
	mysql_close($con);
?>