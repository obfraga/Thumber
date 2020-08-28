<?php

require('models/photo.php');

class PhotosDAO {
	
	public function get(){
		$query = "SELECT * FROM thumber.photo";

		$connection = new Connection;
		$con = $connection->Connect();


		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($guid, $data, $description, $title);

			$photos = [];
			$i = 0;
			while ($stmt->fetch())
				$photos[$i++] = (object) [
					'guid' => $guid,
					'data' => $data,
					'title' => $title,
					'description' => $description
				];
			$stmt->close();
		}
		$con->close();

		return $photos;
    }
	
	public function add($guid, $data, $title, $description) {
		echo $data;

		$query = "INSERT INTO thumber.photo VALUES ('{$guid}', '{$data}', '{$description}', '{$title}')";

		$connection = new Connection;
		$con = $connection->Connect();

		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
		}

		$con->close();
    }
}
?>