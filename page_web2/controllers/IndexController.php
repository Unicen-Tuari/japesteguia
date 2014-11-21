<?php

include "./models/modelo_acceso.php";
include "./models/modelo_jugadores.php";
include "views/IndexView.php";
class IndexController{

	
	public function actionIndex(){
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
		$view->set_jugadores($j);
		$view->render();
	}

	

	public function actionLogin(){
		
		$access = new Accesos();
		$usuario= $_POST['user'];	 
		$contraseña=$_POST['pass'];
		
		$par=$access->buscar_usuario($usuario,$contraseña);
		
		if (($par!=null)&&(count($par)>0)){
			if(array_key_exists('existe', $par[0])){

				$_SESSION['user'] = $usuario;
				$_SESSION['pass'] = $contraseña;
				
				$this->actionIndex();
				// echo "estas logueado";
			}
		}else{
				// echo "consulta vacia";
				include "./views/ErrorView.php";
				$error=new ErrorView();
				$error->show_error();
			 }	
		
	}

	public function actionLogout(){
		session_destroy();
		header("Location:index.php");
		// $this->actionIndex();

		// $this->actionLoginForm();
	}
}

// public function login()
// 			{
				

// 			function crypt_blowfish_bydinvaders($contraseña, $digito = 7)
// 				{
// 					$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// 					$salt = sprintf('$2a$%02d$', $digito);
// 					for($i = 0; $i < 22; $i++)
// 						{
// 							$salt .= $set_salt[mt_rand(0, 22)];
// 						}
// 					return crypt($contraseña, $salt);
// 				}
// 								/*datos del form login*/
				
// 				$email= $_POST['email_login'];	 
// 				$contraseña=$_POST['pass_login'];
// 				$ar_datos_usuario=$this->comprobar_existencia_usuario($email);/*choca los 2 capos contra la base*/

// 				if( crypt($contraseña, $ar_datos_usuario['pass']) == $ar_datos_usuario['pass'])
// 					{

// 						$_SESSION['sesionUsuario']=$ar_datos_usuario['id'];
// 						$_SESSION['emailUsuario']=$_POST['email_login'];	
// 				    	$this->Home();//le pasa los datos a la funcion home definida en este controlador
// 					}
// 				else
// 				   { 
// 				   	include_once("./View/View_error_login.php");
// 				    $error=new View_error_login();
// 				    $error->error_login();
// 				   }
// 			}

?>