<?php
ini_set("session.cookie_httponly", 1); // adding a html Only check
session_start();
// if($_POST['token'] != $_SESSION['token']){
// 	die("Request forgery detected");
// }
if(isset($_SESSION['username'])){
	echo json_encode(array("success" => true, "username" => $_SESSION['username']));
} else {
	echo json_encode(array("success" => false));
}
exit;

?>