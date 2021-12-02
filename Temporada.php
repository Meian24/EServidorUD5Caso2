<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TemporadaBaloncesto</title>
</head>

<body>

	<?php  

	/*Llamamos al archivo donde está la clase equipo y jugador*/
	require_once "Equipos.php";
	require_once "Jugadores.php";

	/*Creamos el objeto Equipo*/
	$Malaga_basquet = new Equipo();

	/*Creamos un bucle for para crear los 9 jugadores y los añadimos al equipo creado*/
	for ($i=1; $i < 10; $i++) { 
		
		$jugador = new Jugador($i);
		$Malaga_basquet->addJug($jugador);


	/*Le añadimos una puntuación entre 20 y 100 a cada jugador*/
	$Malaga_basquet->getJug($i)->addPuntos(rand(20, 100));

	echo "Jugador nº ".$i." -> ".$jugador->getPuntos()." puntos"."<br>";
	}

	/*Obtenemos y enseñamos por pantalla la puntuación total del equipo*/
	$resultado = $Malaga_basquet->getTotal();
	
	echo "Total puntos temporada "."$resultado";

	?>

</body>
</html>