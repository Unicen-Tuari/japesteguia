<?php

include_once "modelodb.php";
/**
 * La clase ....
 */
class Jugadores extends ModeloDB{
	
	public function load_jbasico(){
		return $this->query("SELECT ip.tipo_jugador,j.nombre,ip.nacionalidad,
									i.ruta
  							FROM informacion_personal ip JOIN jugadores j 
  							ON (j.id_jugador=ip.id_jugador) 
  							JOIN imagenes i 
  							ON(j.id_jugador=i.id_jugador)
						    -- WHERE ip.tipo_jugador= 'Mundial' 
						    group by ip.tipo_jugador, ip.ranking,j.nombre
						    order by j.id_jugador"
						   );
	}

	public function load_tipo(){
			// yuyuiyiu
		return $this->query("
			SELECT * 
			FROM persona 
    		JOIN tipo_persona 
    		on persona.tipo_persona_id = tipo_persona.id where persona.id < 10");
	}

	
}

?>