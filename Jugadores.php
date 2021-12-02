<?php 

/* Creamos la clase jugador*/
class Jugador {

	/*Declaramos las propiedades*/
	private int $numeroJug;
	private int $puntos;

	/*Creamos el método constructor*/
	public function __construct($numeroJug) {
		$this->numeroJug = $numeroJug;
		$this->puntos = 0;
	}

	/*Creamos los getters*/
	public function getNumeroJug(): int {
		return $this->numeroJug;
	}

	public function getPuntos(): int {
		return $this->puntos;
	}

	/*Creamos el método añadir puntos*/
	public function addPuntos(int $puntos): void{
		$this->puntos += ($puntos>0) ? $puntos : 0;
	}


}

?>
