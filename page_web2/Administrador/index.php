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
	else if($_REQUEST['action']=='listarJugadores')
	{
		if(array_key_exists('nac', $_GET)){
			if (isset($_GET['nac'])) {
				include "./controllers/JugadorController.php";
				$jug = new JugadorController();
				$jug->actionMostrarJugador($_GET['nac']);
			}
		}
		else {
			echo "Error de Parametros listar jugadores";
		}
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
			echo "Error de Parametros Materiales";
		}
	}
	elseif($_REQUEST['action']=='editarMaterial')
	{	
		include "./controllers/MaterialController.php";

		$mat = new MaterialController();
		$mat->actionEditarMaterial();
				
	}
	elseif($_REQUEST['action']=='eliminarMaterial')
	{	
		include "./controllers/MaterialController.php";

		$mat = new MaterialController();
		$mat->actionEliminarMaterial();
				
	}
	elseif($_REQUEST['action']=='actualizarMaterial')
	{	
		include "./controllers/MaterialController.php";
		
		$mat = new MaterialController();
		$mat->actionActualizarMaterial();		
	}
	elseif($_REQUEST['action']=='agregarMaterial')
	{	
		include "./controllers/MaterialController.php";
		
		$mat = new MaterialController();
		$mat->actionAgregarMaterial();
				
	}
	elseif($_REQUEST['action']=='agregarMaterialForm')
	{	
		include "./controllers/MaterialController.php";
		
		$mat = new MaterialController();
		$mat->actionAgregarMaterialForm();
				
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
	
	else 
	{
		echo "ERROR ACCION NO VALIDA";
	}

	

	


?>