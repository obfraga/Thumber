<?php
// Include router class

include('infrastructure/routing.php');

use Infrastructure\Route;

Route::add('/Thumber/pics',function(){
    require 'bio.html';
});

?>