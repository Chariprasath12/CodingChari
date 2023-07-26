<?php
session_start();
$Id = "";
  foreach($_POST as $name => $content){
    $Id = $name;
	
    }
	$_SESSION['BookingCode'] =$_REQUEST['code'];
	$Id=$_SESSION['BookingCode'] ;
	//$_SESSION['BookingCode'] =$Id;
  /*
if(!isset($_SESSION['ScheduleCode']))
{
    foreach($_POST as $name => $content){
    $Id = $name;
	
    }
	
	$_SESSION['ScheduleCode'] =$Id;
}
else
{
	$Id=$_SESSION['ScheduleCode'];
	
}*/
if($_SESSION['usertype']=="admin")
{
	
}
else
{
	header('location:LoginAdmin.php');
}	

	
	
	
?>
<html>
<head>
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

  
  
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
  
</head>
<body>
<?php
include('HeaderAdmin.php');
include('Db.php');	

/*
	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Transport", $con);
	$row = mysql_fetch_array($query);
	$Id="T" . sprintf("%03d",$row['cnt']);
	
*/
?>
	
	<center>
		<h4>APPROVE BOOKING</h4>
	</center>

	<form action="AddPaymentCode.php" method="post" enctype="multipart/form-data">
	
		<center>
	<table border='1' cellspacing='0' style='width:50%' class="table table-bordered table-hover table-striped table-condensed;">
		<!--
		<tr>
			<th>Package Id</th>
			<th>Package Name</th>
			<th>Places of Vist</th>
			<th>Duration</th>
			<th>Fare</th>
			<th>Description</th>
				<th>Includes Food</th>
			<th>Image</th>
		<th>Delete</th>
		</tr>
		-->
		<?php
		echo "<tr><td>Booking Id</td><td>" . 	$_SESSION['BookingCode'] . "</td>";
		echo "<tr><td>Status</td><td><select name='cboStatus'>";
		echo "<option>Approved</option>";
		echo "<option>Rejected</option>";
		echo "</select></td></tr>";
		
		$pay= $_REQUEST['pay'];
		echo "<tr><td>Payment Amount</td><td><input type='text' name='txtAmount' value=" . 	$pay . "></td></tr>";
echo "<tr><td>Mode</td><td><select name='cboMode'>";
		echo "<option>Cash</option>";
		echo "<option>Cheque</option>";
		echo "</select>";
		echo "</td></tr>";
		
		echo "<tr><td>Description</td><td><textarea name='txtDesc' rows='4' cols='30'></textarea></td></tr>";
		echo "<tr><td colspan='2' align='center'><input type='submit' value='Save'/></td></tr>";
	?>
		
		</table>
		</center>
	</form>


</body>
</html>