<?php

include_once "modelodb.php";
/**
 * La clase 
 */
class Accesos extends ModeloDB{
	
	public function load(){
	}
	public function buscar_usuario($user,$pass){

		return $this->query("SELECT 1 as existe
  							FROM login
  							WHERE (LOWER(user) = LOWER('$user')) and (LOWER(pass) = LOWER('$pass'))");
	}
	

	// carga de modal
	public function load_personal_information($id_jugador){
		return $this->query("SELECT *
  							FROM jugadores j JOIN informacion_personal ip
  							ON (j.id_jugador=ip.id_jugador)
  							WHERE (ip.id_jugador = $id_jugador)");
	}

	public function load_videos($id_jugador){
		return $this->query("SELECT id_jugador,ruta
  							FROM videos
							WHERE (id_jugador = $id_jugador)
							group by id_jugador,ruta ");
	}

	public function load_big_images($id_jugador){
		return $this->query("SELECT id_jugador,ruta_grande
  							FROM imagenes 
  							WHERE (id_jugador = $id_jugador)");
	}

	
	//fin carga de modal


 

	
}

?>