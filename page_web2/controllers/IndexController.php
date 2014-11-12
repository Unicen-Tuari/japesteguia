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
		if (array_key_exists('user', $_SESSION)) {
			echo "estas logueado !!!!";
			$view->set_usuario($_SESSION['user']);
		}
		// seteo a la vista la info basica de jugadores traidos del modelo
		$view->set_jugadores($j);
		$view->render();
	}

	public function actionLogin(){
		// Aqui hay que reemplazar por un modelo 
		include "./models/modelo_acceso.php";
		$access = new Accesos();
		$usuario= $_POST['user'];	 
		$contraseña=$_POST['pass'];
		$par=$access->buscar_usuario($usuario,$contraseña);
		// $user = 'admin';
		// $pass = 'admin';
		
		// $ar_datos_usuario=$this->comprobar_existencia_usuario($email);
	
		// Acceso
		// if($par)
		// var_dump($par);
		// die();
		if (($par!=null)&&(count($par)>0)){
			if(array_key_exists('existe', $par[0])){
			// if(($usuario==$par[0]['user'])&&($contraseña==$par[0]['pass'])){
				// $_SESSION['sesion_usuario'] = $par[0]['id_usuario'];
				$_SESSION['user'] = $usuario;
				$this->actionIndex();
				// echo "estas logueado";
			}
		}else{
				echo "consulta vacia";
			 }
		//reemplazar por mesaje de error tipo alertify
		// else{
		// 	$this->actionLoginForm();
		// }	
		
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