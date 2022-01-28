<?php
	$conn = new mysql("localhost","ndbadmin","valya0322","new_db");
		if($ conn -> connect_error){
		die("ERROR: Unable to connect:" .$conn->connect_error);
		}
		echo 'OK! Connect to the database';
		$conn-> close();

?>
