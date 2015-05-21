<?php
		$username = "root";
		$password = "Ling109114";
		$hostname = "hotelbooking.c9fax6yipqib.us-west-2.rds.amazonaws.com";
		$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
		mysql_select_db("hotel_booking") or die("could not find db!");
?>
