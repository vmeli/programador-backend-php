<?php 
	
	class Curso {
		private $titulo;
		private $profesor;
		private $duracion;
		private $costo;
		private $disponible;

		#Creando nuestro constructor
		public function __construct($titulo, $profesor, $duracion, $costo, $disponible) {
			$this->titulo = $titulo;
			$this->profesor = $profesor;
			$this->duracion = $duracion;
			$this->costo = $costo;
			$this->disponible = $disponible;
		}

		#ENCAPSULACIÓN ---> GETTER - SETTER
		
		#GETTER
		public function obtenerTitulo() {
			return $this->titulo;
		}

		public function obtenerProfesor() {
			return $this->profesor;
		}

		#SETTER
		public function asignarTitulo($titulo) {
			$this->titulo = $titulo; 
		}
	}

?>