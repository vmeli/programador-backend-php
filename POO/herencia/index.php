<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invocación de clases y objetos</title>
</head>
<body>
	
	<?php
		
		#Incluído mi archivo global, todas mis clases.
		require_once __DIR__.'/includes/Global.inc.php';

		#Instanciar un estudiante
		$estudiante = new Estudiante('Geek', 'Women', 'geek@gmail.com');
		//print_r($estudiante);
		echo '<p> '.$estudiante->bienvenida().' </p>';
		echo '<p> '.$estudiante->validarCompra().' </p>';
		echo '<p> '.$estudiante::MONEDA.' </p>';

		#Instanciar un profesor
		$profesor = new Profesor('Sandor', 'Medrano', 'sandor@gmail.com');		
		//print_r($profesor);
		echo '<p> '.$profesor->bienvenida().' </p>';
		echo '<p> '.$estudiante::MONEDA.' </p>';
		
	?> 


</body>
</html>