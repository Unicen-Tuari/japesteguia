<?php

include_once "modelodb.php";
/**
 * La clase 
 */
class Accesos extends ModeloDB{
	
	public function load(){
	}

	public function buscar_email($email){

		return $this->query("SELECT 1 as existe
  							FROM usuarios
  							WHERE (LOWER(email) = LOWER('$email')) ");
	}

	public function buscar_usuario($user,$pass){
		return $this->query("SELECT 1 as existe
  							FROM usuarios
  							WHERE (LOWER(email) = LOWER('$user')) 
  							AND (LOWER(pass) = LOWER('$pass'))
  							AND (admin=1)");
	}



	public function register($arr_reg)
	{
			
			$nombre			=	$arr_reg["name"];
			$apellido		=	$arr_reg["lastname"];
			$pass			=	$arr_reg["pass"];
			$email			=	$arr_reg["email"];
			$telefono		=	$arr_reg["tel"];
			

			$sql = "INSERT INTO usuarios(
						
					nombre				,
					apellido			, 
					pass			    ,
					email               ,
					telefono            
					)
			VALUES( 
					
					:nombre				, 
					:apellido			,				
					:pass               ,
					:email              ,
					:telefono           
			 	  )";


			$q=$this->connection(); 
			$preparado=$q->prepare($sql);

			$preparado->execute(
								array
									(		
																						
										':nombre'				=>$nombre				, 
										':apellido'				=>$apellido				,				
										':pass'					=>$pass					,
										':email'				=>$email	            ,
								 		':telefono'				=>$telefono			     
								 		
					 				 )
								);


		}
	

	


 

	
}

?>