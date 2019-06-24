<?php require_once('inc/connection.php'); ?>
<?php

	$first_name = 'Achi';
	$last_name = 'Senevirathna';
	$email = 'darshanaseuok@gmail.com';
	$password = 'anotherpassword3';
	$is_deleted = 0;

	$hashed_password = sha1($password);

	//echo "Hashed password: {$hashed_password}";

	$query = "INSERT INTO user (first_name, last_name, email, password, is_deleted) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', {$is_deleted})";

	$result = mysqli_query($connection, $query);

	if ($result) {

		echo "1 record added";

	}else{

		echo "Database query failed";
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>