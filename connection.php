<?php

	//$connection = mysqli_connect(dbseerver, dbuser, dbpass, dbname); 

	$connection = mysqli_connect('localhost', 'root', '', 'userdb');

	//mysqli_connect_erros(); mysqli_connect();

	//checking the connection
	if (mysqli_connect_errno()) {

		die('Database connection failed'.mysqli_connect_error());

	}else{

		//echo "Connection successful.";
	}



 ?>