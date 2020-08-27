<?php

require('models/admin.php');

class AdminDAO {
	
	public function get(){
		$query = "SELECT * FROM thumber.admin";
		
		$connection = new Connection;
		$con = $connection->Connect();
		
		if ($stmt = $con->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($guid, $name, $email, $password);
			
			while ($stmt->fetch()) {
				$admin = new Admin;
				$admin->name = $name;
				$admin->email = $email;
				$admin->password = $password;
			}
			$stmt->close();	
		}
		$con->close();
		
		return $admin;
    }
}
?>