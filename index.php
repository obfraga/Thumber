<?php
//include('controllers/MainController.php');
include('infrastructure/routing.php');
use Infrastructure\Route;
include('controllers/main-controller.php');
include('controllers/login-controller.php');
include('controllers/photo-controller.php');

Route::run('/');
?>