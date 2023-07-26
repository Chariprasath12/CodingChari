<?PHP
session_start();
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
include('HeaderCustomer.php');
include('Db.php');	


	$query= mysql_query("SELECT coalesce(max(sno),0)+1  as cnt FROM Transport", $con);
	$row = mysql_fetch_array($query);
	$Id="T" . sprintf("%03d",$row['cnt']);
	

?>
	
	<center>
		<h4>CUSTOMER DETAILS</h4>
	</center>

	<form action="" method="post" enctype="multipart/form-data">
	
		<center>
		<table border='1' cellspacing='0' class="table table-bordered table-hover table-striped table-condensed;">
		
		<tr>
			<th>Customer Id</th>
			<th>Customer Name</th>
			<th>Address </th>
			<th>Contact No.</th>
			<th>Mail Id</th>
		
		</tr>
		
		<?php
		$query= mysql_query("Select * From CustomerTable Where CustomerCode='" . $_SESSION['customerid']  . "'", $con);
		while ($row = mysql_fetch_array($query))
		{
			echo "<tr>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['CustomerCode'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['CustomerName'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['Address'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['ContactNo'] . "</td>";
			echo "<td style='padding-top:40px' valign='middle'>" . $row['EmailId'] . "</td>";
			echo "</tr>";
		}
		
	?>
		
		</table>
		</center>
	</form>


</body>
</html>