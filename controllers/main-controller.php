<?php
// Include router class

// include('infrastructure/routing.php');

// use Infrastructure\Route;

use Infrastructure\Route;


Route::add('/Thumber/bio',function(){
    require 'bio.html';
});

Route::add('/Thumber/contact',function(){
    require 'contact.html';
});

Route::add('/Thumber/',function(){
    require 'main.html';
});

Route::add('/Thumber/photos',function(){
    require 'photos.html';
});

Route::add('/Thumber/Admin',function(){
    require 'login.html';
});






// Route::add('/Thumber/jabiraca',function(){
    // echo 'Hello from jabiraca';
// });

// // Post route example
// Route::add('/Thumber/contact-form',function(){
    // echo 'Hello again!';
// }, 'get');

// // Post route example
// Route::add('/Thumber/contact-form',function(){
    // echo 'Hey! The form has been sent:<br/>';
    // print_r($_POST);
// }, 'post');

// Route::add('/Thumber/contact-form',function(){
    // echo 'Hey! The form has been sent from delete:<br/>';
    // print_r($_POST);
// }, 'delete');

// Route::add('/Thumber/contact-form',function(){
    // echo 'Hey! The form has been sent from put:<br/>';
    // print_r($_POST);
// }, 'put');

// // Accept only numbers as parameter. Other characters will result in a 404 error
// Route::add('/Thumber/foo/([0-9]*)/bar',function($var1){
    // echo $var1.' is a great number!';
// });



?>