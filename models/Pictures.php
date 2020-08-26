<?php
require('DAL/PicturesDAO.php');

use PicturesDAO;

class Picture {
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

	public function get() {
		return PicturesDAO->get();
	}

	/**
	 * ...
	 * outros métodos de abstração de banco
	 * ...
	 *
	 */
}

?>