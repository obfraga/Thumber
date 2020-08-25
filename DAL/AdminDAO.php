<?php

require('infrastructure/connection.php');

class AdminDAO {
	
	public function get(){
		$query = "SELECT * FROM thumber.admin";
		
		$connection = new Connection;
		$con = $connection->Connect();
		
		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($field1, $field2, $field3, $field4);
			
			while ($stmt->fetch()) {
				printf("%s, %s, %s, %s\n", $field1, $field2, $field3, $field4);
			}
			$stmt->close();
		}
    }
}
?>