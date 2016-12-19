<?php
$mysqli = new mysqli('localhost', 'calendarMan', 'calendarMan','calendar');
if($mysqli->connect_errno){
	printf("Connection failed: %s\n", $mysqli->connect_error);
	exit;
}
?>