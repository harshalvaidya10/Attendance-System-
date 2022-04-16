<?php
	$conn = new mysqli('remotemysql.com', 'vj7a50ab0v', 'ZnM7B4GZcW', 'vj7a50ab0v') or die(mysqli_error());
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	  }
	  else {
		  echo "Connected";
	  }
?>