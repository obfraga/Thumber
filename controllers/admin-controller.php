<?php
// Include router class

require('domain/admin-service.php');

 // include('infrastructure/routing.php');

use Infrastructure\Route;

Route::add('/Thumber/validate/([a-zA-Z0-9=]*)/([a-zA-Z0-9=]*)', function($user, $pass) {
	$adminService = new adminService;
	$valid = $adminService->validate(base64_decode($user), base64_decode($pass));

	if ($valid) {
		session_start();
		$_SESSION['LOGGED'] = true;
		header("HTTP/1.1 200 OK");
	}
	else header("HTTP/1.1 400 Bad Request");
});

Route::add('/Thumber/login', function() {
	session_start();
    if (isset($_SESSION['LOGGED']))
		header("Location: /Thumber/admin");
	else require 'loginView.html';
});

Route::add('/Thumber/admin', function() {
	session_start();
	if (!isset($_SESSION['LOGGED']))
		header("Location: /Thumber/login");
	else require 'adminView.php';
});

?>