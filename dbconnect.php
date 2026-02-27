?<php

	$host = "localhost";
	$username = "root";
	$password = "";
	$db ="mpis";

	$con = mysqli_connect($host,$username,$password,$db);

	if(!$con)
	{
		die("Error in Connection");
	}

?>