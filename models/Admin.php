<?php
require('DAL/AdminDAO.php');


class Admin {
	private $guid;
	private $name;
	private $email;
	private $password;


	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}

		return $this;
	}

	public function validate($user, $pass) {
		$adminDAO = new AdminDAO;
		$admin = $adminDAO->get();
		
		$guid = $admin->guid;
		$name = $admin->name;
		$email = $admin->email;
		$password = $admin->password;
					
		if ($admin->email == $user && password_verify($pass, $admin->password))
			return true;
		return false;
	}

	/**
	 * ...
	 * outros métodos de abstração de banco
	 * ...
	 *
	 */
}

?>
