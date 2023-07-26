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
include('HeaderCustomer.php');
include('Db.php');	


	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Transport", $con);
	$row = mysql_fetch_array($query);
	$Id="T" . sprintf("%03d",$row['cnt']);
	

?>
	
	<center>
		<h4>SCHEDULE DETAILS</h4>
	</center>

	<form action="AddBooking.php" method="post" enctype="multipart/form-data">
	
		<center>
	<table border='1' cellspacing='0' class="table table-bordered table-hover table-striped table-condensed;">
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
		$query= mysql_query("Select A.*,B.PackageName,B.TripDuration,B.Fare,C.NameOfTransport From Schedule A,Package B,Transport C Where A.PackageCode=B.PackageCode and A.TransportCode=C.TransportCode Order By A.SNo Desc", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<table class='table table-hover table-bordered table-striped' style='width:60%'>";
		//	echo "<tr><td rowspan='10' style='padding-top:40px;width:200px' valign='middle'><a href='image/package/" . $row['Image'] . "'><img src='image/package/" . $row['Image'] . "' width='100' height='100'/></a></td></tr>";
			
			
			echo "<tr>";
			echo "<tr><td style='width:250px' align='left'>Code</td><td align='left' valign='middle'>" . $row['ScheduleCode'] . "</td></tr>";
			echo "<tr style='font-size:22px'><td align='left'>Package Code/Name</td><td align='left'  valign='middle'>" . $row['PackageCode'] . " " . $row['PackageName'] . "</td></tr>";
			
			
			echo "<tr><td align='left'>Transport Name</td><td align='left' valign='middle'>" . $row['NameOfTransport'] . "</td></tr>";
			echo "<tr><td align='left'>Departure Date </td><td align='left'  valign='middle'>" . $row['DepartureDate'] . "</td></tr>";
			echo "<tr><td align='left'>Time</td><td align='left' valign='middle'>" . $row['DepartureTime'] . "</td></tr>";
				echo "<tr><td align='left'>Duration</td><td align='left'  valign='middle'>" . $row['TripDuration'] . "</td></tr>";
			echo "<tr><td align='left'>Fare/Person</td><td align='left'  valign='middle'>" . $row['Fare'] . "</td></tr>";
			
			echo "<tr><td align='left'>Max. Members</td><td align='left'  valign='middle'>" . $row['MaxMembers'] . "</td></tr>";
			echo "<tr><td align='left'>Available</td><td align='left'  valign='middle'>" . $row['Available'] . "</td></tr>";
			echo "<tr><td colspan='2'><input type='submit' name='" . $row['ScheduleCode'] . "' value='Book >>' class='btn_submit' /></td></tr>";
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>