<?php

include "./models/modelo_acceso.php";
include "./models/modelo_jugadores.php";
include "./models/modelo_calendario.php";
include "views/IndexView.php";
include "./views/ErrorView.php";

class IndexController{

	
	public function actionIndex(){
		// traigo todos los datos del modelo y renderizo todos los jugadores,
		// materiales,y cargo lo estatico en la pagina general.
		
		
		$jugadores=new Jugadores();
		$calendario=new Calendario();
		$view = new IndexView();
		$j=$jugadores->load();

		//nuevo calendario
		// $c=$calendario->load_calendario_inicial();
		if (array_key_exists('user', $_SESSION)) {
			// echo "estas logueado !!!!";
			$usuario=substr($_SESSION['user'], 0, 9);
			$view->set_usuario($usuario);
			// $view->set_email($_SESSION['email']);

		}
		// seteo a la vista la info basica de jugadores traidos del modelo
		$view->set_jugadores($j);
		$mes=31;

		//seteo a la vista el calendario para el usuario correspondiente
		$view->set_calendario_inicial($mes);
		
		$view->render();
	}

	public function actionRegister(){
		$reg = new Accesos();
		$email= $_POST['email'];	 
		$contraseña=$_POST['pass'];
		
		$arr_reg=array();
		$par=$reg->buscar_email($email);

		if($par==null){	
			$arr_reg['name']			= strtolower ($_POST['name']);
			$arr_reg['lastname']		= strtolower ($_POST['lastname']);
			$arr_reg['pass']			= strtolower ($contraseña);
			$arr_reg['email']			= strtolower ($email);
			$arr_reg['tel']				= strtolower ($_POST['tel']);
			
			$reg->register($arr_reg);
			
			$this->actionIndex();
		}
		else
		{
			$existeEmail = $reg->buscar_email($email);
			if($existeEmail)
			{
				$mensaje="Error,el email ingresado ya existe!";
				$error=new ErrorView();
				$error->show_error($mensaje);
			}
		}
	}

	public function actionLogin(){
		
		$access = new Accesos();
		$user= $_POST['user'];	 
		$contraseña=$_POST['pass'];
		
		$par=$access->buscar_usuario($user,$contraseña);
		
		if (($par!=null)&&(count($par)>0)){
			if(array_key_exists('existe', $par[0])){

				$_SESSION['user'] = $user;
				$_SESSION['pass'] = $contraseña;
				
				$this->actionIndex();
				// echo "estas logueado";
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