<?php require_once('inc/connection.php'); ?>

<?php
	
		$query = "UPDATE user SET first_name = 'Brayan' WHERE id = 5";

		 $result_set = mysqli_query($connection, $query);

		 //mysqli_affected_rows() = returns number of rows affected

		 if ($result_set) {

		 	echo mysqli_affected_rows($connection) . " Records updated.";
		 }else{
		 	echo "Database query failed.";
		 }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>