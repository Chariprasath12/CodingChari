
<?php
	
	include('Header.php');
	
	$Id='';
	foreach($_POST as $name => $content){
    $Id = $name;
	echo $Id;
    }
	
	if($Id!='')
	{
	$_SESSION['ScheduleCode'] =$Id;
	}
	?>
	
	
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" a href="https://stachpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" a href="Style.css"/>
	</head>
	<body>
      <div class="wrapper">
<form action="LoginCustomerCode.php" method="post">

      
      <h2>Sign In</h2>
      <label>
          <span>Email</span>
          <input type="text" name="txtMailId" style="width:95%;" pattern=".+@gmail\.com" Required/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="txtPassword" style="width:95%;" minlength="5" maxlength="8" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{8,}$" Required/>
        </label>
       <input type="submit" value="Submit" class="submit-btn">
      
    </div>
	</body>
</form>
</html>

	
	