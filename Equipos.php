<?php  

/*Llamamos al archivo donde está la clase Jugador*/
require_once "Jugadores.php";

class Equipo {

	/*Declaramos la propiedad, en este caso es un array*/
	private array $jugadores;
	
	/*Creamos el método constructor*/
	public function __construct() { }

	/*Creamos el método añadir jugador, se crean de forma consecutiva y no habrá números repetidos*/
	public function addJug(Jugador $jugador):void {
		$this->jugadores[$jugador->getNumeroJug()] = $jugador;
	}

	/*Creamos el método getJug para que nos devuelva el número de jugador*/
	public function getJug(int $numJugador): Jugador {
		return $this->jugadores[$numJugador];
	}

	/*Creamos el método getTotal, que recorrerá el array y sumará la puntuación total de los jugadores*/
	public function getTotal(): int {
		
		$totalPuntos = 0;
		foreach ($this->jugadores as $jugador) {
			$totalPuntos += $jugador->getPuntos();
		}
		return $totalPuntos;
	}

}


?>