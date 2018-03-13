<?php
session_start();
if(!isset($_POST['username'])) {
	$_SESSION['error'] = "Login required";
	header('Location: login.php');
	die();
}
$pdo = new PDO('mysql:host=localhost;dbname=wpwp', 'test', 'test');

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$result = $pdo->query('SELECT * FROM users WHERE username="' . $username . '" AND password=sha1("' . $password . '")');

if($result->rowCount() > 0) {
	$_SESSION['username'] = $username;
	header('Location: news.php');
	die();
}
else {
	$_SESSION['error'] = "Username/Password wrong";
	$_SESSION['temp_username'] = $username;
	header('Location: login.php');
	die();
}

?>