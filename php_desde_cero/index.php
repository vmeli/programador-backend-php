<?php 
	
  //Mi primer comentario
  #Otro comentario
  /*
    Un bloque de comentario grande
  */

  # IMPRIMIR STRING 

  print "Hola Mundo".'<br/>';

  echo "Hola Sandor".'<br/>';

  echo "Hola", "mundo".'<br/>';

  echo "<h1>Hola a todos </h1>".'<br/>';
     
  # TIPO DE VARIABLE 
  $nombre = "Sandor";
  $edad = 12;

  echo gettype($nombre).'<br/>';
  var_dump($edad);
  echo '<br/>';

  # DATOS POR REFERENCIA 
  $varReferencia = "valor1";
  $var = &$varReferencia;
  $var = "Sandor";

  echo $varReferencia.'<br/>';

  # CONCATENAR
  $a = 10;
  $a.= 5; // $a = $a ." ". 5;

  echo $a.'<br/>';

  # OPERADORES DE INCREMENTO/DECREMENTO 
  //$c++ asigna y dps incrementa
  //++$c incrementa y dps asigna
  $c = 15;
  echo $c++.'<br/>'; 
  echo $c.'<br/>';

  # ARREGLOS 
  $d = [];
  #echo $d; //echo es para imprimir enteros, cadena(variables escalares)
  var_dump($d);
  echo '<br/>';
  print_r($d);
  echo '<br/>';

  # ARREGLOS INDEXADOS
  $dogs = ['Sandor', 'Negro', 'Negra'];
  var_dump($dogs);
  echo '<br/>';
  print_r($dogs);
  echo '<br/>';
  
  $dogs[] = 'Capulina';
  print_r($dogs);
  echo '<br/>';

  $dogs[33] = 'Koala';
  print_r($dogs);
  echo '<br/>';

  # ARREGLOS ASOCIATIVOS
  $usuario = array('nombre' => 'Sandor', 'edad' => 13, 'sexo' => 'Macho' ); // tbm se puede crear con []
  print_r($usuario);
  echo '<br/>';
  echo $usuario['nombre'].'<br/>';

  # ARREGLOS MULTIDIMENSIONALES
  $helados = array(
      array('fresa', 'arándanos', 'coco'),
      array('papaya', 'mango')
  ); // se puede crear con []

  print_r($helados);
  echo '<br/>';
  echo $helados[1][1];

  $usuarios = array(
      array('nombre' => 'Sandor', 'edad' => 13, 'sexo' => 'Macho' ),
      array('nombre' => 'Negro', 'edad' => 8, 'sexo' => 'Macho' ),
      array('nombre' => 'Capulina', 'edad' => 1, 'sexo' => 'Femenino' )
  );

  print_r($usuarios);
  echo '<br/>'.$usuarios[2]['edad'].'<br/>';

  $usuarios[1]['nota'] = 20;
  print_r($usuarios);

  # ARREGLOS Y SUS FUNCIONES NATIVAS
  $cadena = '';
  $matriz = [];
  $videojuegos = ['FIFA', 'Fortnite', 'Red Dead', 'GTA', 'Call of Dutty'];

  # VACÍO - empty
  echo '<br/>';
  var_dump(empty($cadena)); //true
  echo '<br/>';
  var_dump(empty($matriz)); //true
  echo '<br/>';
  var_dump(empty($videojuegos)); //false

  # EXISTE - isset
  echo '<br/>';
  var_dump(isset($cadena)); //true
  echo '<br/>';
  var_dump(isset($matriz)); //true
  echo '<br/>';
  var_dump(isset($videojuegos[33])); //false
  echo '<br/>';
  var_dump(isset($sandor)); //false
  echo '<br/>';

  # CONTAR ELEMENTOS DEL ARREGLO - count
  echo count($usuarios);
  echo '<br/>';

  # ORDENAR EL ARREGLO DE MANERA ALFABÉTICA - sort
  //sort($videojuegos);
  //var_dump($videojuegos);
  
  # ORDENAR EL ARREGLO SIN PERDER SU ÍNDICE
  //asort($videojuegos);
  //var_dump($videojuegos);
  
  # ORDENAR DE MANERA INVERSA
  //rsort($videojuegos);
  //var_dump($videojuegos);

  # ORDENAR DE MANERA INVERSA SIN PERDER SU ÍNDICE
  //arsort($videojuegos);
  //var_dump($videojuegos);

  # SUMAR VALORES DEL ARREGLO
  $num = [1, 3, 25, 33];
  echo array_sum($num);
  echo '<br/>';

  # ENCONTRAR DIFERENCIA ENTRE ARREGLOS
  $salonA = ['a1' => 'Juan', 'a2' => 'Susana', 'a3' => 'Romero', 'a4' => 'Jaime'];
  $salonB = ['a1' => 'Santiago', 'a2' => 'Susana', 'a3' => 'Diego', 'a4' => 'Jaime'];
  print_r(array_diff($salonA, $salonB));
  echo '<br/>';

  # DIVIDIR UN ARREGLO ESPECIFICANDO SU TAMAÑO
  print_r(array_chunk($videojuegos, 2));
  echo '<br/>';

  # DIVIDIR EL ARREGLO Y ELIMINAR LO ANTERIOR
  print_r(array_slice($videojuegos, 3));
  echo '<br/>';

  # UNIR ARREGLOS
  $frutas = ['fresa', 'platano', 'maracuya'];
  $verduras = ['pepino', 'lechuga', 'tomate'];
  print_r(array_merge($frutas, $verduras));
  echo '<br/>';

  # ELIMINAR EL ÚLTIMO ELEMENTO
  array_pop($frutas);
  print_r($frutas);
  echo '<br/>';

  # ARREGLAR UNO O MÁS ELEMENTOS AL FINAL DEL ARREGLO
  array_push($frutas, 'sandia', 'coco');
  print_r($frutas);
  echo '<br/>';

  # BUSCAR UN ELEMENTO EN EL ARREGLO
  print_r(array_search('sandia', $frutas));
  echo '<br/>';

  # MOSTRAR Y GUARDAR ERRORES PHP 

  # DESACTIVAR TODA NOTIFICACIÓN DE ERROR ---> se desactiva tbm dsd php.init
  //error_reporting(0);
  //error_reporting('E_ERROR'); ---> tipos de errores
  #$n = 'Hola';
  #echo $n;
  #echo $na;

  #E_NOTICE informa de variables no inicializadas o capturar errores en nombres de variables

  #GUARDAR ERRORES EN UN LOG
  ini_set("log_error", 1); // inicializa el log de errores
  ini_set("error_log", "./php-error.log"); //guardando el log de errores
  error_log("Hay un error"); //mandar mensaje cuando encuentre el error

  #ESTRUCTURA DE CONTROL Y FUNCIONES
  
  #CONDICIONALES

  $num = 20;
  if ($num == 1) {
    echo "El número es igual a 1 <br />";
  } elseif($num == 20){ // else if o elseif
    echo "El número es igual a 20 <br />";
  } else {
    echo "Es otro número <br />";
  }

  $r = ($num == 33) ? 33 : 20;
  echo "El número es igual a ". $r ."<br />";

  switch ($num) {
    case 1:
      echo "El número es igual a 1 <br />";
      break;
    case 20:
      echo "El número es igual a 20 <br />";
      break;
    default:
      echo "Es otro número <br />";
      break;
  }

  #OPERADORES LÓGICOS
  // and && - or ||
  $puntaje = 85;
  if ($puntaje > 92) {
    $nota = 'A';
    $mensaje = 'excelente';
  } elseif ($puntaje <= 92 and $puntaje > 83) {
    $nota = 'B';
    $mensaje = 'bien';
  }else {
    $nota = 'F';
    $mensaje = 'reprobado';
  }

  echo 'Hola, saliste '.$mensaje.' en tu examen, la nota final es '.$nota.'<br />';

  $mx = [1,2];
  if (!empty($mx)) {
    echo 'Tiene elementos <br />';
  }else {
    echo 'No tiene elementos <br />';
  }

  #WHILE (mientras)
  $v = 0;
  while ($v <= 10) {
    echo 'El número '.$v.'<br />';
    $v++;
  }

  $frutas = array('fresa', 'platano', 'maracuya', 'palta');

  $salir = 0;
  $k = 0;

  while ($salir !=1) {
    if ($frutas[$k] == 'maracuya') {
      echo '<p>Encontré maracuya</p>';
      $salir = 1;
    }else {
      echo '<p>Encontré '.$frutas[$k].' </p>';
      $k++;
    }
  }


  #DO - WHILE (hacer - mientras)
  $v = 0;
  do {
    echo 'El número '.$v.'<br />';
    $v++;
  } while ( $v<= 10);

  #FOR (para)

  for ($i=0; $i <=10 ; $i++) { 
    echo 'El número '.$i.'<br />';
  }

  for ($m = 0, $j = 10; $m < 50 and $j < 100; $m+=10, $j+=10) { 
    echo 'El número es '.$m.'<br />';
  }

  #FOREACH (para cada) --- solo para array
  $socialMedia = array('facebook', 'twitter', 'instagram', 'whatsapp');
  foreach ($socialMedia AS $value) {
    echo '<p>'.$value.'</p>';
  }

  $socialMedia = array('FB' => 'facebook', 'TW' => 'twitter', 'INS' => 'instagram', 'WS' => 'whatsapp');
  foreach ($socialMedia AS $key => $value) {
    echo '<p>'.$key.' '.$value.'</p>';
  }

  #FUNCIONES
  function suma($a, $b, $imprime=false) {
    $suma = $a + $b;
    if ($imprime == true) {
      echo 'La suma es '.$suma.'<br />';
    } else {
      return $suma;
    }
  }

  $num = 30;
  suma($num, 10, true); // echo suma($num, 10) 

  #FUNCIONES AN{ONIMAS CDAS - FUNCIONES DE CLOSURES
  $sms = function() {
    echo 'Mostrar mensaje';
  };

  $sms();

  function finalizaCurso(Closure $curso, $nombre) {
    return $curso($nombre);
  };

  $php = function($nombre) {
    return '<p>Repaso de '.$nombre.'</p>';
  };

  echo finalizaCurso($php, 'PHP');
 

  ?>