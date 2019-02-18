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

		echo '<p>'.$curso->obtenerTitulo().'</p>';
		echo '<p>'.$curso->obtenerProfesor().'</p>';
		echo '<p>'.$curso->asignarTitulo('POO en PHP').'</p>';
		echo '<p>'.$curso->obtenerTitulo().'</p>';

	?> 


</body>
</html>