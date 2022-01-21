<?php 
	$mysqli = new mysqli("localhost","root","","web_do-an");
	mysqli_set_charset($mysqli,"utf8");
	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>