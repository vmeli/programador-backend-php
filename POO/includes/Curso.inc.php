<?php 
	
	#INTERFACES -> interface -> implements

	interface Requerimiento {
		public function asignarRequerimiento($listado);
		public function obtenerRequerimiento();
	}

	interface Conocimiento {
		public function asignarConocimiento($listado);
		public function obtenerConocimiento();
	}

	class Curso implements Requerimiento, Conocimiento{
		private $titulo;
		private $profesor;
		private $duracion;
		private $costo;
		private $disponible;
		private $listado; // asignamos por medio de la interface

		#Atributo estático
		public static $moneda = 'USD';

		#Creando nuestro constructor
		public function __construct($titulo, $profesor, $duracion, $costo, $disponible) {
			$this->titulo = $titulo;
			$this->profesor = $profesor;
			$this->duracion = $duracion;
			$this->costo = $costo;
			$this->disponible = $disponible;
		}

		#DESTRUCTOR ---> las clases se queda en memoria hasta q cierres sesión, ayuda a libera memoria ya q los obj pueden tener herencia, polimorfismo entre otras cosas(aplicaciones grandes es recomendable crear un destructor,que va destruir los objetos q fueron instanciado)
		public function __destruct() {
			echo '<p>Destruyendo '.$this->titulo.'</p>';
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

		#IMPLEMENTAR LAS FUNCIONES DE ESAS INTERFACES
		public function asignarRequerimiento($listado) {
			$this->listado = $listado;
		}
		public function obtenerRequerimiento() {
			if(!empty($this->listado)) {
				foreach ($this->listado as $lista) {
					echo '<p>'.$lista.'</p>';
				}
			}
		}
		public function asignarConocimiento($listado) {}
		public function obtenerConocimiento() {}

		// :: operador de resolución de ámbito, anteponiendo la palabra reservada self por estar la variable en la misma clase o es heredada 
		static function obtenerDenominacion() {
			return self::$moneda;
		}
	}
?>