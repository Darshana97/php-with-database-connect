<?php require_once('inc/connection.php'); ?>

<?php
	
		$query = "DELETE FROM user WHERE id = 3 LIMIT 1";

		 $result_set = mysqli_query($connection, $query);

		 //mysqli_affected_rows() = returns number of rows affected

		 if ($result_set) {

		 	echo mysqli_affected_rows($connection) . " Records Deleted.";
		 }else{
		 	echo "Database query failed.";
		 }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>