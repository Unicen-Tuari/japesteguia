<?php

include_once "modelodb.php";
/**
 * La clase 
 */
class Calendario extends ModeloDB{
	
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
	public function load_calendario_inicial(){
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
	
	
	//fin carga de modal
	//funciones  calendario

 

	
}

?>