#ACCESO A MÉTODOS
<?php
	
	class Curso {
		
		public $publico = "Público"; // se accede de cq parte

		private $privado = "Privado"; // accedido por los miembros de la clase

		protected $protegido = "Protegido"; // accedido por los miembros de la clase y clases heredadas
		function obtenerMensajePrivado() {
			return $this->privado;
		}
	}

	$prueba = new Curso();

	echo "<p>".$prueba ->publico."</p>";
	echo "<p>".$prueba ->obtenerMensajePrivado()."</p>";
	#echo "<p>".$prueba ->privado."</p>";
	#echo "<p>".$prueba ->protegido."</p>";

?>