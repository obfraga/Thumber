<?php
//include('controllers/MainController.php');
require('infrastructure/connection.php');
include('infrastructure/routing.php');
use Infrastructure\Route;
include('controllers/main-controller.php');
include('controllers/admin-controller.php');
include('controllers/photo-controller.php');

Route::run('/');
?>