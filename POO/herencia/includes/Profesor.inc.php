<?php
	#Implementación de herencia
	class Profesor extends Persona {

		#Sobreescribir
		public function bienvenida() {
			return "Bienvenida profesor {$this->nombre}";
		}

	}

?>