<?php

include "./models/modelo_acceso.php";
include "./models/modelo_jugadores.php";
include "views/IndexView.php";
include "./views/ErrorView.php";

class IndexController{

	
	public function actionIndex(){
		// traigo todos los datos del modelo y renderizo todos los jugadores,
		// materiales,y cargo lo estatico en la pagina general.
		
	
		$view = new IndexView();
		
		if (array_key_exists('user', $_SESSION)) {
			// echo "estas logueado !!!!";
			$usuario=substr($_SESSION['user'], 0, 9);
			$view->set_usuario($usuario);
			// $view->set_email($_SESSION['email']);
		}
		$view->render();
	}

	public function actionListarJugadores(){
		// traigo todos los datos del modelo y renderizo todos los jugadores,
		// materiales,y cargo lo estatico en la pagina general.
		
		
		$jugadores=new Jugadores();
		$view = new IndexView();
		$j=$jugadores->load();
		if (array_key_exists('user', $_SESSION)) {
			// echo "estas logueado !!!!";
			$usuario=substr($_SESSION['user'], 0, 9);
			$view->set_usuario($usuario);
			// $view->set_email($_SESSION['email']);

		}
		// seteo a la vista la info basica de jugadores traidos del modelo
		// $view->set_jugadores($j);
		$view->render();
	}
	

	public function actionLogin(){
		
		$access = new Accesos();
		$user= $_POST['user'];	 
		$contraseña=$_POST['pass'];
		
		$par=$access->buscar_usuario($user,$contraseña);
		
		if (($par!=null)&&(count($par)>0)){
			if(array_key_exists('existe', $par[0])){
				$par_admin=$access->buscar_usuario_admin($user,$contraseña);
				if (($par_admin!=null)&&(count($par_admin)>0)){
					if(array_key_exists('existe', $par_admin[0])){
						$_SESSION['user'] = $user;
						$_SESSION['pass'] = $contraseña;
						
						$this->actionIndex();
				// echo "estas logueado";
					}	
				}else{
						$mensaje="Error,la cuenta no tiene permiso de administrador!";
						$error=new ErrorView();
						$error->show_error($mensaje);
					}
			}
		
		}else{
				// echo "consulta vacia";
				$mensaje="Error,verifique que los datos ingresados sean los correctos!";
				$error=new ErrorView();
				$error->show_error($mensaje);
			 }	
	}
	public function actionLogout(){
		session_destroy();
		header("Location:index.php");
		
	}
}


?>