<?php
require 'database.php';
$fID = $_POST['false_id'];

$stmt = $mysqli->prepare("delete from events where false_id=?");	//delete from events where .. matches ...
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->bind_param('s', $fID);
if($stmt->execute()){
	echo json_encode(array("success" => true));
	$stmt->close();
	exit;
} else {
		echo json_encode(array(
		"success" => false, "message" => "That event does not exist"
		));
	$stmt->close();
	exit;
}
//$_SESSION['token'];


?>