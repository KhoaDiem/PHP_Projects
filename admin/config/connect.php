<?php
		$hostname = "52.6.114.59";
		$user = "abc";
		$pass = "abc123";
		$db = "abc";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>