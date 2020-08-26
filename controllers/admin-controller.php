<?php
// Include router class

require('Models/Admin.php');

 // include('infrastructure/routing.php');

use Infrastructure\Route;

Route::add('/Thumber/validate/([a-zA-Z0-9=]*)/([a-zA-Z0-9=]*)', function($user, $pass) {
	$admin = new Admin;
	$valid = $admin->validate(base64_decode($user), base64_decode($pass));

	if ($valid) {
		setcookie('LOGGED', true, time() + (86400 * 30)); // 86400 = 1 day
		header("HTTP/1.1 200 OK");
	}
	else header("HTTP/1.1 400 Bad Request");
});

Route::add('/Thumber/login', function() {
    require 'login.html';
});

Route::add('/Thumber/admin', function() {
	if (isset($_COOKIE['LOGGED']))
		header("Location: /Thumber/login");
	else require 'admin.html';
});

Route::add('/Thumber/upload', function() {
	print_r($_POST['data']);
	//--- TODO -> Inser data and description in database
	// header("HTTP/1.1 200 OK");
	// header("HTTP/1.1 400 Bad Request");
}, 'post');

?>