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
		<h4>PACKAGE DETAILS</h4>
	</center>

	<form action="" method="post" enctype="multipart/form-data">
	
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
		$query= mysql_query("Select * From Package", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<table class='table table-hover table-bordered table-striped' style='width:60%'>";
			echo "<tr><td rowspan='8' style='padding-top:40px;width:200px;padding-top:50px' valign='middle'><a href='image/package/" . $row['Image'] . "'><img style='border-radius:10px' src='image/package/" . $row['Image'] . "' width='150' height='150'/></a></td></tr>";
			
			
			
			echo "<tr><td style='width:100px' align='left'>Code</td><td align='left' valign='middle'>" . $row['PackageCode'] . "</td></tr>";
			echo "<tr><td align='left'>Name</td><td align='left' valign='middle'>" . $row['PackageName'] . "</td></tr>";
			echo "<tr><td align='left'>Places</td><td align='left'  valign='middle'>" . $row['PlacesOfVisit'] . "</td></tr>";
			echo "<tr><td align='left'>Duration</td><td align='left' valign='middle'>" . $row['TripDuration'] . "</td></tr>";
			echo "<tr><td align='left'>Fare</td><td align='left'  valign='middle'>" . $row['Fare'] . "</td></tr>";
			echo "<tr><td align='left'>Description</td><td align='left' valign='middle'>" . $row['Description'] . "</td></tr>";
			echo "<tr><td align='left'>Food</td><td align='left' valign='middle'>" . $row['IncludeFood'] . "</td></tr>";
			
			
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>