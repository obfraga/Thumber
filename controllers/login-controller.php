<?php
// Include router class

require('Models/Admin.php');

 // include('infrastructure/routing.php');

use Infrastructure\Route;


Route::add('/Thumber/lsogin/([a-zA-Z0-9]*)/([a-zA-Z0-9]*)/log', function($user, $pass){
	$admin = new Admin;
    $admin->validate($user, $pass);
	
	if (
});



?>