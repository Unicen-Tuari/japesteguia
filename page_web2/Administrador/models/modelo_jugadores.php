<?php

include_once "modelodb.php";
/**
 * La clase 
 */
class Jugadores extends ModeloDB{
	//funcion load original modificada
	public function load(){
		return $this->query("SELECT ip.tipo_jugador,j.nombre,ip.nacionalidad,
									i.ruta,j.id_jugador
  							FROM informacion_personal ip JOIN jugadores j 
  							ON (j.id_jugador=ip.id_jugador) 
  							JOIN imagenes i 
  							ON(j.id_jugador=i.id_jugador)
						    -- WHERE ip.tipo_jugador= 'Mundial' 
						    group by ip.tipo_jugador, ip.ranking,j.nombre
						    order by j.id_jugador"
						   );
	}

	// carga de modal
	public function load_personal_information($id_jugador){
		return $this->query("SELECT *
  							FROM jugadores j JOIN informacion_personal ip
  							ON (j.id_jugador=ip.id_jugador)
  							WHERE (ip.id_jugador = $id_jugador)");
	}

	public function load_videos($id_jugador){
		return $this->query("SELECT id_jugador,id_video,ruta
  							FROM videos
							WHERE (id_jugador = $id_jugador)
							group by id_jugador,id_video,ruta ");
	}

	public function load_big_images($id_jugador){
		return $this->query("SELECT id_jugador,ruta_grande
  							FROM imagenes 
  							WHERE (id_jugador = $id_jugador)");
	}

	
	//fin carga de modal

	public function load_jugadores($nacionalidad){
		return $this->query("SELECT *
  							FROM informacion_personal ip JOIN jugadores j 
  							ON (j.id_jugador=ip.id_jugador) 
  							JOIN imagenes i 
  							ON(j.id_jugador=i.id_jugador)
						    WHERE ip.tipo_jugador= '$nacionalidad' 
						    group by ip.tipo_jugador, ip.ranking,j.nombre
						    order by j.id_jugador"
						   );
	}

 

	
}

?>