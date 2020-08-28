<?php
// Include router class

require('domain/photo-service.php');


// use Infrastructure\Route;
// require('Models/Pictures.php');

// use Picture;
 use Infrastructure\Route;

Route::add('/Thumber/pics',function(){
    $photoService = new photoService;
	header('Content-Type: application/json');
	echo json_encode($photoService->get());
});

Route::add('/Thumber/upload', function() {
	session_start();
    if (!isset($_SESSION['LOGGED'])) {
		header("Location: /Thumber/login");
		exit;
	}

	if (count($_FILES) > 0)
		if (is_uploaded_file($_FILES['images']['tmp_name'])) {
			$imgData = addslashes(file_get_contents($_FILES['images']['tmp_name']));
			$photoService = new photoService;
			$photoService->add(com_create_guid(), $imgData, "Title", file_get_contents('https://loripsum.net/api/plaintext'));
		}

	header("Location: /Thumber/admin");
}, 'post');


?>