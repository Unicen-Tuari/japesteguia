<?php

	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);

	// $_REQUEST=array asociativo que contiene todos los valores de $_POST, $_GET y $_COOKIE 
	// (aunque $_COOKIES está fuera de $_REQUEST en algunas configuraciones de PHP). 
	// Funcionan igual que estás, como variable "superglobal", que se encuentra accesible 
	// desde cualquier punto del código PHP.
	// En el PHP.ini podrás encontrar la directiva de configuración PHP variables_order que te sirve
	// para definir lo que hay o no hay en ese array $_REQUEST y el orden de los elementos.

	if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='index')
	{
		include "./controllers/IndexController.php";
		$controller = new IndexController();
		$controller->actionIndex();		
	}
	else if($_REQUEST['action']=='mostrarJugador')
	{
		if(array_key_exists('id_jugador', $_GET)){
			if (isset($_GET['id_jugador'])) {
			include "./controllers/JugadorController.php";
			// print_r($_GET) ;
			$controller_j = new JugadorController();
			$controller_j->actionMostrarJugador($_GET['id_jugador']);
			}
		else {
			echo "Error de Parametros";
		}

		}	
	}
	else if($_REQUEST['action']=='listarMateriales')
	{
		if(array_key_exists('id_mat', $_GET)){
			if (isset($_GET['id_mat'])) {
				include "./controllers/MaterialController.php";
				$mat = new MaterialController();
				$mat->actionMostrarMaterial($_GET['id_mat']);
			}
		}
		else {
			echo "Error de Parametros";
		}
	}
	else if($_REQUEST['action']=='jugar')
	{


	}
	else 
	{
		echo "ERROR ACCION NO VALIDA";
	}

	

	


?>