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

	public function load_big_image($id_jugador){
		return $this->query("SELECT id_jugador,ruta_grande
  							FROM imagenes 
  							WHERE (id_jugador = $id_jugador)");
	}

	public function load_image($id_jugador){
		return $this->query("SELECT id_jugador,ruta
  							FROM imagenes 
  							WHERE (id_jugador = $id_jugador)");
	}


	// public function load_nombre_jugadores($id_jugador){
	// 	return $this->query("SELECT nombre
 //  							FROM jugadores 
 //  							WHERE (id_jugador = $id_jugador)");
	// }

	
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
	public function actualizar_jugador_basico($id,$tipo_jugador,$nacionalidad,$fecha,
        		$altura,$peso,$agarre,$equipamiento,$ranking,$inicios)
	{
		return $this->query("
			UPDATE informacion_personal
			SET tipo_jugador = '$tipo_jugador',nacionalidad = '$nacionalidad',
			fecha_nacimiento = '$fecha', altura= '$altura', peso= '$peso', agarre= '$agarre',
			 equipamiento= '$equipamiento', ranking= '$ranking', inicios= '$inicios'
            WHERE (id_jugador = $id)
		");
	}

	public function actualizar_jugador_imagenes($id,$img_chica,$img_grande)
	{
		return $this->query("
			UPDATE imagenes
			SET id_jugador = '$id',ruta = '$img_chica',
			ruta_grande = '$img_grande'
            WHERE (id_jugador = $id)
		");
	}
	public function actualizar_jugador_video($id_video,$video)
	{
		return $this->query("
			UPDATE videos
			SET ruta = '$video'
            WHERE (id_video =$id_video)
		");
	}
	
	public function agregar_jugador_basico($id,$tipo_jugador,$nacionalidad,$fecha,
        		$altura,$peso,$agarre,$equipamiento,$ranking,$inicios)
	{
		return $this->query("
			INSERT INTO informacion_personal (id_jugador,tipo_jugador,nacionalidad,fecha_nacimiento,
        		altura,peso,agarre,equipamiento,ranking,inicios)
			VALUES ('$id','$tipo_jugador','$nacionalidad','$fecha','$altura',
        		'$peso','$agarre','$equipamiento','$ranking','$inicios')
		");
	}

	public function obtenerId()
	{
		$datos =  $this->query("
			SELECT id_jugador
					FROM informacion_personal
					ORDER BY id_jugador ASC
		");

		$id = array_pop ($datos); //Obtiene el ultimo dato del arreglo.....
		return $id['id_jugador'];
	}

	
	public function agregar_jugador_jugadores($id,$nombre)
	{
		return $this->query("
			INSERT INTO jugadores (id_jugador,nombre)
			VALUES ('$id','$nombre')
		");
	}

	public function agregar_jugador_imagenes($id,$img_chica,$img_grande)
	{
		return $this->query("
			INSERT INTO imagenes (id_jugador,ruta,ruta_grande)
			VALUES ('$id','$img_chica','$img_grande')
		");
	}
	
	public function agregar_jugador_video($id,$video)
	{
		return $this->query("
			INSERT INTO videos (id_jugador,ruta)
			VALUES ('$id','$video')
		");
	}

	//eliminacion jugador
	public function eliminar_goma($id)
	{
		return $this->query("
			DELETE FROM gomas
            WHERE (id_goma = $id)
		");
	}

	public function eliminar_jugador_basico($id)
	{
		return $this->query("
			DELETE FROM informacion_personal 
			WHERE (id_jugador = $id)
		");
	}

	public function eliminar_jugador_jugadores($id)
	{
		return $this->query("
			DELETE FROM jugadores 
			WHERE (id_jugador = $id)
		");
	}

	public function eliminar_jugador_imagenes($id)
	{
		return $this->query("
			DELETE FROM imagenes 
			WHERE (id_jugador = $id)
		");
	}
	
	public function eliminar_jugador_video($id)
	{
		return $this->query("
			DELETE FROM videos 
			WHERE (id_jugador = $id)
		");
	}
 

	
}

?>