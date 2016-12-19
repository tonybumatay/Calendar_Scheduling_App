<?php

require 'database.php';
ini_set("session.cookie_httponly", 1); // adding a html Only check
session_start();
$username = $_SESSION['username'];
$date = $_POST['date'];
$name = $_POST['name'];
$description = $_POST['description'];

$stmt = $mysqli->prepare("insert into events (username, date, description, eventName) values (?,?,?,?)");

if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->bind_param('ssss', $username, $date, $description, $name);
$stmt->execute();
//$_SESSION['token'];

$stmt->close();
exit;
?>