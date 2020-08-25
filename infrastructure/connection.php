<?php
class Connection {
	public function connect() {
		$host="localhost";
		$port=3306;
		$socket="";
		$user="root";
		$password="txroip";
		$dbname="thumber";

		$con = new mysqli('localhost', 'root', 'txroip', 'thumber')
			or die ('Could not connect to the database server' . mysqli_connect_error());
			
		return $con;
	}
}
?>