<?php 

	class Persona {
		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email) {
			$this->nombre   = $nombre;
			$this->apellido = $apellido;
			$this->email    = $email;

		}

		public function bienvenida() {
			return "Bienvenida {$this->nombre} al curso";
			//return "Bienvenida ".$this->nombre." al curso";
		}

		final public function despedida() { //palabra reservada final para no sobreescribir el método
			return "Hasta pronto {$this->nombre}";
		}
	}

?>