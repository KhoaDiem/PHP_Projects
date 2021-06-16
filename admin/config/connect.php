<?php
		$hostname = "52.6.114.59";
		$user = "diem";
		$pass = "diem1234";
		$db = "diem";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>