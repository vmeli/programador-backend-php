#CLASES

<?php
	class Curso { // las clases deben ser llamados de forma singular y  con la 1er letra en mayúscula
		public $nombre;
		public $duracion;
		public $costo;
		public $moneda;
		public $profesor;
		public $disponible;

		public function imprimirInfo() { //es una function pero en POO se llama método
			return "Curso ".$this->nombre." dictado por el profesor ".$this->profesor."</br>";
		}

		public function validaDisponibilidad() {
			$respuesta ="";
			if ($this->disponible == true) {
				$respuesta = "Curso disponible </br>";
			}else {
				$respuesta = "Curso no disponible </br>";
			}
			return $respuesta;
		}
	}

	$php = new Curso;

	$php->nombre = 'POO en PHP';
	$php->duracion = '3 sesiones';
	$php->profesor = 'Sandor';
	$php->disponible = true;

	echo $php->imprimirInfo();
	echo $php->validaDisponibilidad();
?>