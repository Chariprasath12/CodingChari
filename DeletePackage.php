<?php
	include('Db.php');

	/*
    $Id = "";
    foreach($_POST as $name => $content){
    $Id = $name;
    }
	*/
	$code= $_REQUEST['code'];
	//$Id = array_keys($_POST)[0];
	$qry="Delete From Package Where PackageCode= '". $code ."' ";
	mysql_query($qry,$con) or die(mysql_error());
	header('location:AddPackage.php');
	
?>