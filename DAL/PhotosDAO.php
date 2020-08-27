<?php

require('models/photo.php');

class PhotosDAO {
	
	public function get(){
		$query = "SELECT * FROM thumber.picture";

		$connection = new Connection;
		$con = $connection->Connect();


		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($guid, $data, $description);

			$photos = [];
			$i = 0;
			while ($stmt->fetch()) {
				$photo = new Photo;
				$photo->guid = $guid;
				$photo->data = $data;
				$photo->description = $description;
				$photos[$i++] = $photo;
			}
			$stmt->close();
		}
		$con->close();

		return $photos;
    }
	
	public function add($guid, $data, $description) {
		$query = "INSERT INTO thumber.picture VALUES ('{$guid}', '{$data}', '{$description}')";

		$connection = new Connection;
		$con = $connection->Connect();

		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
		}

		$con->close();
    }
}
?>