<?php

include_once "modelodb.php";

class Materiales extends ModeloDB{
	
	public function load(){
		
	}

	public function load_gomas(){
		return $this->query("SELECT *
		FROM gomas g join distribuidores d ON
		(g.id_distribuidor=d.id_distribuidor)
		ORDER BY(g.id_distribuidor)");
	}

	public function load_maderas(){
		return $this->query("SELECT *
		FROM maderas m join distribuidores d ON
		(m.id_distribuidor=d.id_distribuidor)
		ORDER BY(m.id_distribuidor)");
	}

	public function load_goma($id_goma){
		return $this->query("SELECT *
		FROM gomas 
		WHERE(id_goma = $id_goma)") ;
		
	}

	public function actualizar_goma($id,$distribuidor,$nombre,$esponja,$dureza,
        		$tipo_juego,$velocidad,$efecto)
	{
		return $this->query("
			UPDATE gomas
			SET id_distribuidor = '$distribuidor',nombre = '$nombre',
			esponja = '$esponja', dureza= '$dureza', tipo_juego= '$tipo_juego',
			velocidad= '$velocidad', efecto= '$efecto'
            WHERE (id_goma = $id)
		");
	}
	public function eliminar_goma($id)
	{
		return $this->query("
			DELETE FROM gomas
            WHERE (id_goma = $id)
		");
	}


	
}

?>