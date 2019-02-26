<?php
	#Implementación de herencia
	class Estudiante extends Persona {

		public function __construct($nombre, $apellido, $email) {

			parent::__construct($nombre, $apellido, $email);

		}

		#Sobreescribir el método de la base (poliformismo--->varias formas)
		public function bienvenida() {
			return "Bienvenida {$this->nombre}, tenemos nuevos cursos para ti";
		}

	}

?>