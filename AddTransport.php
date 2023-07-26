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


	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Transport", $con);
	$row = mysql_fetch_array($query);
	$Id="T" . sprintf("%03d",$row['cnt']);
	

?>
	
	<center>
		<h4>NEW TRANSPORT DETAILS</h4>
	</center>

	<form action="AddTransportCode.php" method="post" enctype="multipart/form-data">
	<center>
			<table  align="center" border='1' cellspacing='0' style="width:500px" class="table table-bordered table-hover table-striped ">
			<tr>
				<td align="right">Transport Id:</td> <td><input type="text" name="txtID" value="<?php echo $Id; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Transport Name:</td> <td><input type="text" name="txtTN" Required/></td>
			</tr>
			<tr>
				<td align="right">Registration No.:</td> <td><input type="text" name="txtRN" Required/></td>
			</tr>
			<tr>
				<td align="right">Mfg Year.:</td> <td><input type="text" name="txtMY" Required/></td>
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
			<th>Transport Id</th>
			<th>Transport Name</th>
			<th>Registration No.</th>
			<th>Manufacturing Year</th>
			<th>Image</th>
		<th>Delete</th>
		</tr>
		
		<?php
		$query= mysql_query("Select * From Transport", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['TransportCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['NameOfTransport'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['Registration'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['MFGYear'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'><a href='image/transport/" . $row['Image'] . "'><img src='image/transport/" . $row['Image'] . "' width='100' height='100'/></a></td>";
			echo "<td style='padding-top:40px'  valign='middle'><a href='DeleteTransport.php?code=" . $row['TransportCode'] . "' class='btn_delete'/>Delete</a></td>";
			echo "</tr>";
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>