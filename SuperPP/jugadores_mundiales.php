
<?php
// error_reporting(E_ALL);
// ini_set("display_errors",1);

?>
<?php
//Configuración
$host 	= "localhost";
$db	= "tetm";
$user	= "root";
$pass	= "";



echo 'Hola mundo2.';

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}

//Consulta

  $sql = "SELECT ip.tipo_jugador,ip.ranking, j.nombre,j.id_jugador as id_jugador 
  FROM informacion_personal ip JOIN jugadores j ON (j.id_jugador=ip.id_jugador) 
  WHERE ip.tipo_jugador= 'Mundial' 
  group by ip.tipo_jugador, ip.ranking,j.nombre
  order by j.id_jugador";
  


//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q) 
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
			<h1> JUGADORES MUNDIALES </h1>  
			 <?php
					  while($r = $q->fetch()){
					?>
				<p><a href="jugador_generico.php?mensaje=<?=$r["id_jugador"]?>"> 
				<img WIDTH=25 HEIGHT=25 src= "images/estilo/pelotita.jpg" ><?= $r["ranking"]?> - <?= $r["nombre"] ?></a></p>
				
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