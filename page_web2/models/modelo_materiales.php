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
	
	
}

?>