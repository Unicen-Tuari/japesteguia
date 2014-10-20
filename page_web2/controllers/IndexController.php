<?php

class IndexController{
	
	public function actionIndex(){
		// traigo todos los datos del modelo y renderizo todos los jugadores,
		// materiales,y cargo lo estatico en la pagina general.
		include "./models/modelo_jugadores.php";
		include "views/IndexView.php";
		$jugadores=new Jugadores();
		$view = new IndexView();
		$j=$jugadores->load();
		// seteo a la vista la info basica de jugadores traidos del modelo
		$view->set_jugadores($j);
		$view->render();
	}
}

?>