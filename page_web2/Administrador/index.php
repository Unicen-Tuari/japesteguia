<?php

	session_start();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	// acciones
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
	elseif($_REQUEST['action']=='editarMaterial')
	{	
		include "./controllers/MaterialController.php";
		
		$mat = new MaterialController();
		$mat->actionEditarMaterial();
				
	}
	elseif($_REQUEST['action']=='register')
	{	
		include "./controllers/IndexController.php";
		$controller_r = new IndexController();
		$controller_r->actionRegister();		
	}
	elseif($_REQUEST['action']=='login')
	{	
		include "./controllers/IndexController.php";
		$controller_l = new IndexController();
		$controller_l->actionLogin();		
	}
	elseif($_REQUEST['action']=='logout')
	{	
		// echo "string";
		include "./controllers/IndexController.php";
		$controller_l = new IndexController();
		$controller_l->actionLogout();		
	}
	else if($_REQUEST['action']=='jugar')
	{


	}
	else 
	{
		echo "ERROR ACCION NO VALIDA";
	}

	

	


?>