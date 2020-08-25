<?php
require('DAL/AdminDAO.php');


class Admin {
	private $id;
	private $nome;


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

	public function validate() {
		$adminDAO = new AdminDAO;
		return $adminDAO->get();
	}

	/**
	 * ...
	 * outros métodos de abstração de banco
	 * ...
	 *
	 */
}

?>
