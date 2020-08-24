<?php
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
		// logica para listar toodos os clientes do banco
	}

	/**
	 * ...
	 * outros métodos de abstração de banco
	 * ...
	 *
	 */
}

?>
