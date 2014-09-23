
<?php

//Configuración
$host 	= "localhost";
$db	= "tetm";
$user	= "root";
$pass	= "";

//TODO: verificar que mensaje este seteado 
$idMensaje = $_GET["mensaje"];

//Conexión
try{
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}
?>
<?php
//Consultas
$sql = "SELECT nombre
  FROM jugadores  
  WHERE (id_jugador = :id)";
$sql2 = "SELECT *
  FROM imagenes 
  WHERE (id_jugador = :id)";
 $sql3 = "SELECT *
  FROM informacion_personal
  WHERE (id_jugador = :id)";
 $sql4 = "SELECT id_jugador,ruta
  FROM videos
  WHERE (id_jugador = :id)
  group by id_jugador,ruta ";
  


//Ejecucion
$q = $conn->prepare($sql);
$q->execute(array(':id'=>$idMensaje));
$q2 = $conn->prepare($sql2);
$q2->execute(array(':id'=>$idMensaje));
$q3 = $conn->prepare($sql3);
$q3->execute(array(':id'=>$idMensaje));
$q4 = $conn->prepare($sql4);
$q4->execute(array(':id'=>$idMensaje));

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if(!$q2)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if(!$q3)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if(!$q4)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
?>
  

<!DOCTYPE html>

<html>
<head>
	<title>Ttm</title>
	<link rel="stylesheet" type="text/css" href="css/estilotm.css"/> 
	<script type="text/javascript" src="js/fecha.js"></script>
</head>
<body>
	<header>
		 <script type="text/javascript">
  			document.write(retornarFecha());
         </script>
	</header>
	<nav>
			<ul id="contenedorMenu">
				<li><a href="home.php">Inicio</a></li>
				<li><a href="historia.php">Historia</a></li>
				<li><a href="reglamento.php">Reglamento</a></li>
				<li><a>Materiales</a>			
                    <ul>
						<li><a href="gomas.php">Gomas</a></li>
						<li><a href="maderas.php">Maderas</a></li>
					</ul>
				</li>
				<li><a>Jugadores</a>
					<ul>
						<li><a href="jugadores_mundiales.php">Mundiales</a></li>
						<li><a href="jugadores_nacionales.php">Nacionales</a></li>
					</ul>	

				</li>
			</ul>
	</nav>
	
	<section class = "informacion">	
			<?php
				$r = $q->fetch();
			?>
			<h1> <?= $r["nombre"]?> </h1>
			<?php
				$r1 = $q2->fetch();
			?>
			<center><img WIDTH=255 HEIGHT=207 src= "<?= $r1["ruta"] ?>" ></center>
			
            
			    
				<?php
				$r2 = $q3->fetch();
			    ?>
			    <table>
		  				<tr>
					  		<th>Nacionalidad:
		  					<td><?= $r2["nacionalidad"]?>
		  				</tr>
		  				<tr>
		    				<th>Fecha de nacimiento:
		    			    <td><?= $r2["fecha_nacimiento"]?>
		    			</tr>
		    			<tr>
		    				<th>Altura(cm):
		    			    <td><?= $r2["altura"]?>
		    			</tr>
		    			<tr>
		    				<th>Peso(kg):
		    			    <td><?= $r2["peso"]?>
		    			</tr>
		    			<tr>
		    				<th>Agarre:
		    			    <td><?= $r2["agarre"]?>
		    			</tr>
		    			<tr>
		    				<th>Equipamiento:
		    			    <td><?= $r2["equipamiento"]?>
		    			</tr>
		    			<tr>
		    				<th>Actual r&aacutenking:
		    			    <td><?= $r2["ranking"]?>
		    			</tr>
		    			<tr>
		    				<th>Profesional desde:
		    			    <td><?= $r2["inicios"]?>
		    			</tr>
		    	
		  			
		 		</table>
				
               
                
                	<center><p><strong>Videos</strong></p></center>
					<?php
					  while($r3 = $q4->fetch()){
					?>
					
					
					<video width="280" height="200" src=" <?= $r3["ruta"]?>" controls></video>
                    <?php
							}
						?>	
						
	</section>
			   	
		 		
	
<footer>
		<p>
			 &copy 2014 Argentina-Tandil cp7000 -All rights reserved by John-
		</p>
</footer>

</body>
</html>