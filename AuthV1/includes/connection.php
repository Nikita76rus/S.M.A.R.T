<?php
	$DB_SERVER = "localhost";
    $DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "userlistdb";
	$con = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME) 
    or die("Ошибка " . mysqli_error($link));
	?>