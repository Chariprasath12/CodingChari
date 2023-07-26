 <html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body>

<?php
include('Db.php');
?>



<?php 
session_start();
if(!isset($_SESSION['username']))
{
?>

</div>

<?php
}
else{

?>

<div class="navbar">
  <a href="index.php">Logout</a>
  <a href="home.php">Home</a>
</div>
</div>

<?php
}
?>

<br/>
<br/>

