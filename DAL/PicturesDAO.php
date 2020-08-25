<?php

require('infrastructure/connection.php');

class PicturesDAO {
	
	public function get(){
		$query = "SELECT * FROM thumber.picture";

		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($field1, $field2);
			while ($stmt->fetch()) {
				printf("%s, %s\n", $field1, $field2);
			}
			$stmt->close();
		}

		$con->close();
    }
}
?>