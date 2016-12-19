<?php
require 'database.php';	

$username = $_POST['username'];
$password = $_POST['password'];
$verify = $_POST['verify'];


if(!preg_match('/^[\w_\.\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

if( !preg_match('/^[\w_\.\-]+$/', $password) ){
	echo "Invalid password";
	exit;
}

if($password == $verify){
	$hashed = password_hash($password, PASSWORD_DEFAULT);
	$stmt = $mysqli->prepare("insert into users (username, password) values (?,?)");
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	$stmt->bind_param('ss', $username, $hashed);
	if($stmt->execute()){
	ini_set("session.cookie_httponly", 1); // adding a html Only check
	session_start();
	$_SESSION['username'] = $username;
	$token = $_SESSION['token']=substr(md5(rand()), 0,10);

	echo json_encode(array("success" => true, "token" => $token));
	$stmt->close();
	exit;
	} else {
	echo json_encode(array(
		"success" => false, "message" => "That username was taken"
		));
	$stmt->close();
	exit;
	}

} else {
		echo json_encode(array(
		"success" => false, "message" => "The passwords did not match"
		));
		$stmt->close();
	exit;
}
?>