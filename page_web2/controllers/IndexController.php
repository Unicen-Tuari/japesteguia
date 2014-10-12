<?php


// include "./models/modelo_tipo.php";
// include "./views/ViewPersonas.php";

class IndexController{
	
	public function actionIndex(){
		// traigo todos los datos del modelo y renderizo todos los jugadores,
		// materiales,y cargo lo estatico en la pagina general.
		include "./models/modelo_jugadores.php";
		// include "./models/modelo_materiales.php";
		// include modelo jugadores
		include "views/IndexView.php";
		// $j = traer j
		$jugadores=new Jugadores();
		$view = new IndexView;
		$j=$jugadores->load_jbasico();
		// echo '<pre>';
		// print_r($j);
		// echo '</pre>';
		// seteo a la vista la info basica de jugadores traidos del modelo
		$view->set_jugadores($j);
		// $view->set_materiales($m);
		// $view->setJugadores = $j
		// $view->setJugadores($j);
		$view->render();
	}
	// echo '<pre>';
		// print_r($j);
		// echo '</pre>';
	
}

?>