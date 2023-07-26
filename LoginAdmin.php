
	<?php
	include('Header.php');
	?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" a href="https://stachpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" a href="Style.css"/>
	</head>
	<body>
      <div class="wrapper">
	<form action="LoginAdminCode.php" method="post">
		<h3>ADMIN</h3>
				Username
				<br><input type="text" name="txtUsername" placeholder=" Username" Style="width:250px;" Required/>
				<br/>
				Password
				<br><input type="password" name="txtPassword" placeholder=" Password" Style="width:250px;" Required/>
				<br>
				<input type="submit" name="btnSubmit" value="Login" class="btn_submit" style="width:250px;"/>
			
	</form>

</body>
</html>