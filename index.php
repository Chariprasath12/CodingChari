<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css"></link>
</head>

<body id="bdy-main">

	
	<?php
	session_start();
	$_SESSION = array();
	session_destroy();
    header('location:Home.php');
	?>
	
	
</body>

</html>