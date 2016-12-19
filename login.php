<?php

require 'database.php';

//header("Content-Type: application/json"); //what is this?

$username= $_POST['username'];
$password=$_POST['password'];


if( !preg_match('/^[\w_\.\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

if( !preg_match('/^[\w_\.\-]+$/', $password) ){
	echo "Invalid password";
	exit;
}
$stmt = $mysqli->prepare("select password from users where username=?");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
$stmt->bind_param("s", $username);

$stmt->execute();
 
$stmt->bind_result($hashed);
$stmt->fetch();

if(password_verify($password, $hashed)){
	ini_set("session.cookie_httponly", 1); // adding a html Only check
	session_start();
	$_SESSION['username'] = $username;
	$token = $_SESSION['token']=substr(md5(rand()), 0,10);

	echo json_encode(array("success" => true, "token" => $token));
	$stmt->close();
	exit;
} else {
	echo json_encode(array(
		"success" => false, "message" => "The wrong pass was entered."
		));
	$stmt->close();
	exit;
}
?>