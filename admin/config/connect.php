<?php
		$hostname = "34.206.113.91";
		$user = "khoadiem";
		$pass = "khoadiem@123";
		$db = "demo";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>