<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body>

<?php
include('Db.php');
?>

<div>
<h1>HOLIDAY TRIPS AND TOUR MANAGEMENT SYSTEM</h1>

<div class="navbar">
  <a href="AddTransport.php">Add Transport</a>
   <a href="AddPackage.php">Add Package</a>
	  <a href="AddSchedule.php">Add Schedule</a>
	  <a href="ViewCustomer.php">View Customers</a>
	  <a href="ViewBookingsByAdmin.php">Bookings</a>
	  <a href="ViewPayment.php">View Payments</a>
	  <a href="ViewRatingsByAdmin.php">View Ratings</a>
	  
	  <button onclick="window.location.href = 'HomeAdmin.php';">
        Home
		</button>
		<button onclick="window.location.href = 'Logout.php';">
        Logout
		</button>
</div>

</div>

<br/>
<br/>

