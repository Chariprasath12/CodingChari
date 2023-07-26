
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

<link rel="stylesheet" type="text/css" href="Style.css"></link>

</head>

<body>

<?php
include('Db.php');
?>

<div>
<h1>HOLIDAY TRIPS AND TOUR MANAGEMENT SYSTEM</h1>

<div class="navbar">
  <a href="ViewTransport.php">View Transports</a>
   <a href="ViewPackage.php">Check Packages</a>
	  <a href="ViewSchedule.php">Book Schedules</a>
	  
	  <a href="ViewBookings.php">Bookings</a>
	  <a href="ViewPaymentByCustomer.php">Payment</a>
	  <a href="AddRating.php">Rating</a>
	  
	  <button onclick="window.location.href = 'HomeCustomer.php';">
        Home
	  </button>
	  <button onclick="window.location.href = 'Logout.php';">
        Logout
	  </button>
  
</div>
</div>


<br/>
<br/>

