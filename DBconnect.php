<?php
   
   	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "csqure";
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,"3308");
   
	if (mysqli_connect_errno()) {
		die("Database connection Failed" .mysqli_connect_error());
	}
	else{
		//echo "Database Connection OK";
	}
	
	?>