<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invocación de clases y objetos</title>
</head>
<body>
	
	<?php
		define('INC', '/includes/');
		require_once __DIR__.INC.'Curso.inc.php';

		$curso = new Curso('POO', 'Sandor', '3 sesiones', 10, true);
		$curso2 = new Curso('Js', 'Sandor', '1 sesiones', 13, true);

		echo '<p>'.$curso->obtenerTitulo().'</p>';
		echo '<p>'.$curso->obtenerProfesor().'</p>';
		echo '<p>'.$curso->asignarTitulo('POO en PHP').'</p>';
		echo '<p>'.$curso->obtenerTitulo().'</p>';

		echo '<p>Requerimientos</p>';
		$curso->asignarRequerimiento(['PHP dsd cero', 'Ganas de aprender', 'Práctica']);
		echo '<p>'.$curso->obtenerRequerimiento().'</p>';

		#para acceder variables de tipo estático, no necesitamos instanciarlo
		echo '<p>'.Curso::$moneda.'</p>'; 
		echo '<p>'.Curso::obtenerDenominacion().'</p>';

	?> 


</body>
</html>