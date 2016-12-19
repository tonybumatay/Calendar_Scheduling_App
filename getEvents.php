<?php
header("Content-Type: application/json");
require 'database.php';
ini_set("session.cookie_httponly", 1); // adding a html Only check
session_start();
$currentMonth = $_POST['currentMonth'];
$currentYear = $_POST['currentYear'];
$d = mktime(0,0,0,$currentMonth, 01, $currentYear);
$firstDay = Date("Y/m/d" , $d);

$monthDays = array(31,28,31,30,31,30,31,31,30,31,30,31);
$lastDay;
if($currentYear%4 == 0 && $currentMonth == 1){ //leap day logic: if a year divisible by 4 and february:
	if($currentYear%100 == 0){	//if year divisible by 100 then not leap year
		if($currentYear%400 == 0){	//if year is also divisible by 400 then actually is leap year
			$lastDay = mktime(0,0,0,$currentMonth, $monthDays[$currentMonth-1]+1, $currentYear);
		} else {
			$lastDay = mktime(0,0,0,$currentMonth, $monthDays[$currentMonth-1], $currentYear);		
		}
	} else {
		$lastDay = mktime(0,0,0,$currentMonth, $monthDays[$currentMonth-1]+1, $currentYear);
	}
} else {
	$lastDay = mktime(0,0,0,$currentMonth, $monthDays[$currentMonth-1], $currentYear);
}		//leap day logic ends here

$lastDayUse = Date("Y/m/d", $lastDay);
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$stmt = $mysqli->prepare("select date, description, eventName, false_id from events where username=? and date between ? and ?"); //deal with this;  between ?-?-01 and ?-?-?

	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	$stmt->bind_param("sss", $username, $firstDay, $lastDayUse);

	$stmt->execute();

	$stmt->bind_result($date, $description, $eventName, $false_id);

	$events = array();
	while($stmt->fetch()){
		$events[] = array('name' => htmlentities($eventName), 'dateTime' => htmlentities($date), 'description' => htmlentities($description), 'false_id' => htmlentities($false_id)); //encodes events[0] as the first events and continues from there
	}
	echo json_encode(array("success" => true, "events"=>$events));
	$stmt->close();
	exit;
} else {
	echo json_encode(array("success" => false, "message" => "No user"));
	exit;
}



?>