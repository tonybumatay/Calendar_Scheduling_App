<?php
header("Content-Type: application/json");
require 'database.php';
$false_id = $_POST['false_id'];
$newName = $_POST['newName'];
$newDesc = $_POST['newDesc'];

	$stmt = $mysqli->prepare("update events set eventName=?, description=? where false_id=?"); //deal with this;  between ?-?-01 and ?-?-?
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	$stmt->bind_param("sss", $newName, $newDesc, $false_id);

	$stmt->execute();

	echo json_encode(array("success" => true));
	$stmt->close();
	exit;

?>