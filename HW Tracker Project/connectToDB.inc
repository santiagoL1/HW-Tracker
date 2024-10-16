<?php

function connectDB(){
	$dbConnection = mysqli_connect("homework-tracker.epizy.com
", "epiz_33149170", "AX799Ih3wPlhJc", "epiz_33149170_students");
	if (mysqli_connect_errno()){
		die(mysqli_connect_error());
	}
	echo "Database connected successfully . . . <br>";
	return $dbConnection;
}


?>                                                             