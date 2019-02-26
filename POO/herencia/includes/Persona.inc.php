<?php 

	#azúcar sintáctica trait -> herencia múltiple
	trait Compra {
		private $compra;
		function validarCompra() {
			return "Compra exitosa";
		}
	}

	class Persona {

		use Compra; #Podemos agregar más traits separándolos por comas

		const MONEDA = 'USD';

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email) {
			
			$this->nombre   = $nombre;
			$this->apellido = $apellido;
			$this->email    = $email;

			$this->validaNombre($this->nombre);
			$this->correoValido($this->email); //si es valido debe recién dejarnos de instanciar($this->email)
			/*
				try { //Intentar, i.e., trata de hacer algo

					//Código podría causar una excepción o un error

				} catch (Exception $error) {
					
					//Código que se ejecuta si hay una excepción
					//Si algo no puedes hacer entonces captúrame
				
				}
			*/

			/*try {  //cuando nombre viene vacío
				if ( empty($this->nombre) ) {
					throw new Exception("Debes ingresar tu nombre");
				} else {
					$this->nombre = $nombre;
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}*/

		}

		public function validaNombre($nombre) {

		}

		public function correoValido($email) {
			#Usando filtros--> son regex propio de PHP
			#filter_var
			#FILTER_NOMBRE_VALIDACION
			try {
				#nombre@dominio.terminacion
				if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
					#122, hola mundo, demo@.com
					throw new Exception('Correo no válido');
				}
			} catch (Exception $e) {
				echo $e->getMessage();	
			}
		}

		public function bienvenida() {
			$this->validaNombre($this->nombre);
			return "Bienvenida {$this->nombre} al curso";
			//return "Bienvenida ".$this->nombre." al curso";
		}

		final public function despedida() { //palabra reservada final para no sobreescribir el método
			return "Hasta pronto {$this->nombre}";
		}
	}

?>