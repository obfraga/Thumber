<?php
if (session_status() == PHP_SESSION_NONE)
	session_start();
if (!isset($_SESSION['LOGGED'])) {
	header("location: /Thumber/login");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Thumber &mdash; Colorlib Website Template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
		<link rel="stylesheet" href="fonts/icomoon/style.css">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<link rel="stylesheet" href="css/bootstrap-datepicker.css">

		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

		<link rel="stylesheet" href="css/aos.css">
		<link rel="stylesheet" href="css/jquery.scrollbar.css">
		<link rel="stylesheet" href="css/fancybox.min.css">
		<link rel="stylesheet" href="css/swiper.min.css">

		<link rel="stylesheet" href="css/admin.css">

	</head>
	<body>
		<div class="frame">
			<form enctype="multipart/form-data" action="/Thumber/upload" method="post" target="_self">
				<div class="center">
					<div class="title">
						<h1 id="selected-files">Drop file to upload</h1>
					</div>
					
					<div class="dropzone">
						<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
						<input type="file" accept="image/png, image/jpeg" name="images" id="files-selector" class="upload-input" multiple />
					</div>

					<input type="submit" class="btn" value="Upload file" name="uploadbutton" />

				</div>
			</form>
		</div>
<!-- original pen: https://codepen.io/roydigerhund/pen/ZQdbeN  -->

<!-- NO JS ADDED YET -->

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/aos.js"></script>

		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/jquery.scrollbar.js"></script>
		<script src="js/main.js"></script>
		<script src="js/admin.js"></script>



	</body>
</html>
