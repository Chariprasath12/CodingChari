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


	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Package", $con);
	$row = mysql_fetch_array($query);
	$Id="P" . sprintf("%03d",$row['cnt']);
	

?>
	
	<center>
		<h4>NEW PACKAGE DETAILS</h4>
	</center>

	<form action="AddPackageCode.php" method="post" enctype="multipart/form-data">
	<center>
			<table  align="center" border='1' cellspacing='0' style="width:500px" class="table table-bordered table-hover table-striped ">
			<tr>
				<td align="right">Package Id:</td> <td><input type="text" name="txtID" value="<?php echo $Id; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Package Name:</td> <td><input type="text" name="txtPN" Required/></td>
			</tr>
			<tr>
				<td align="right">Places of Visit.:</td> <td><textarea rows='5' cols='30' name="txtPV" Required></textarea></td>
			</tr>
			<tr>
				<td align="right">Duration.:</td> <td><input type="text" name="txtDuration" Required></textarea></td>
			</tr>
						<tr>
				<td align="right">Fare.:</td> <td><input type="text" name="txtFare" Required /></td>
			</tr>
			
			<tr>
				<td align="right">Description/Offers:</td> <td><textarea rows='5' cols='30' name="txtDesc" Required></textarea></td>
			</tr>
			<tr>
			<td align="right">Includes Food</td><td><input type='checkbox' name="cb1" value='Yes'></td>
			</tr>
			<tr>
				<td align="right">Image:</td> <td><input type="file" name="fileUploader" id="fileUploader" Required/></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
		</center>
		<center>
		<table border='1' cellspacing='0' class="table table-bordered table-hover table-striped table-condensed;">
		
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
		
		<?php
		$query= mysql_query("Select * From Package", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['PackageCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['PackageName'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['PlacesOfVisit'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['TripDuration'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['Fare'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['Description'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['IncludeFood'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'><a href='image/package/" . $row['Image'] . "'><img src='image/package/" . $row['Image'] . "' width='100' height='100'/></a></td>";
			echo "<td style='padding-top:40px'  valign='middle'><a href='DeletePackage.php?code=" . $row['PackageCode'] . "' class='btn_delete'/>Delete</a></td>";
			echo "</tr>";
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>