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


	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Schedule", $con);
	$row = mysql_fetch_array($query);
	$Id="S" . sprintf("%03d",$row['cnt']);
	

?>
	
	<center>
		<h4>NEW SCHEDULE DETAILS</h4>
	</center>

	<form action="AddScheduleCode.php" method="post" enctype="multipart/form-data">
	<center>
			<table  align="center" border='1' cellspacing='0' style="width:500px" class="table table-bordered table-hover table-striped ">
			<tr>
				<td align="right">Schedule Id:</td> <td><input type="text" name="txtID" value="<?php echo $Id; ?>" Required/></td>
			</tr>
			<tr>
				<td align="right">Package Id:</td>


				<td>
<select name="cboP">
<?php
  $query = mysql_query("Select PackageCode,PackageName From Package", $con);
        
        while($r = mysql_fetch_array($query))
        {
			echo "<option value='" . $r['PackageCode'] . "'>" . $r['PackageCode'] . ":" . $r['PackageName'] . "</option>";
		}
		?>
		</select>
	
				</td>
			</tr>bg
			<tr>
				<td align="right">Transport Id:</td> <td>
				
				<select name="cboT">
<?php
  $query = mysql_query("Select TransportCode,NameOfTransport From Transport", $con);
        
        while($r = mysql_fetch_array($query))
        {
			echo "<option value='" . $r['TransportCode'] . "'>" . $r['TransportCode'] . ":" . $r['NameOfTransport'] . "</option>";
		}
		?>
		</select>
	
				</td>
			</tr>
			<tr>
				<td align="right">Departure Date:</td> <td><input type="text" name="txtDate"  value='<?php echo date('Y-m-d'); ?>' Required /></td>
			</tr>
						<tr>
				<td align="right">Time.:</td> <td><input type="text" name="txtTime" Required/></td>
			</tr>
			
			
			<tr>
			<td align="right">Maximum Members:</td><td><input type='text' name="txtMM" value='' /></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" name="btnSubmit" value="Submit" class="btn_submit" style="width:152px;" /></td>
			</tr>
		</table>
		</center>
		<center>
		<table border='1' cellspacing='0' class="table table-bordered table-hover table-striped table-condensed;">
		
		<tr>
			<th>Schedule Id</th>
			<th>Package Id</th>
			<th>Package Name</th>
			<th>Transport Id</th>
			<th>Transport Name</th>
			<th>Departure Date</th>
			<th>Departure Time</th>
			<th>Maximum Members</th>
							<th>Available</th>
			
		<th>Delete</th>
		</tr>
		
		<?php
		$query= mysql_query("Select A.*,B.PackageName,C.NameOfTransport From Schedule A,Package B,Transport C Where A.PackageCode=B.PackageCode and A.TransportCode=C.TransportCode Order By SNo Desc", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['ScheduleCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['PackageCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['PackageName'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['TransportCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['NameOfTransport'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['DepartureDate'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['DepartureTime'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['MaxMembers'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['Available'] . "</td>";
			echo "<td style='padding-top:40px'  valign='middle'><a href='DeleteSchedule.php?code=" . $row['ScheduleCode'] . "' class='btn_delete'/>Delete</a></td>";
			echo "</tr>";
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>