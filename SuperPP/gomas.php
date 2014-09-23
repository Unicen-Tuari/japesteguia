

<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
//Configuración
$host 	= "localhost";
$db	= "tetm";
$user	= "root";
$pass	= "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
/*$conn2 = new PDO("mysql:host=$host;dbname=$db",$user,$pass);*/
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}

//Consulta

//$sql = "SELECT * FROM gomas WHERE distribuidor = 'Butterfly'";
//$sql2 = "SELECT * FROM gomas WHERE distribuidor ='DHS'";
$sql = "select *
from gomas g join distribuidores d on(g.id_distribuidor=d.id_distribuidor)
where distribuidor = 'Butterfly'";
$sql2 = "select *
from gomas g join distribuidores d on(g.id_distribuidor=d.id_distribuidor)
where distribuidor = 'DHS'";

//Ejecucion
$q	 = $conn->query($sql);
$q2	 = $conn->query($sql2);

//Si es null, hubo un error
if(!$q) 
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}
if(!$q2) 
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

?>

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
						<li><a href="jugadores_nacionales.php">Regionales</a></li>
					</ul>	

				</li>
			</ul>
	</nav>
	 
	<section class = "informacion">
			<h1> GOMAS </h1>
			    <table>
					
						<tr>
		    				<th>Butterfly
		    				<th>Esponja
		    				<th>Dureza
		    				<th>Tipo
		    				<th>Velocidad
		    				<th>Efecto
		                </tr>
				   <?php
					  $q = $conn->query($sql);
					  while($r = $q->fetch()){
					?>
		  				 <tr>
							<td><?= $r["nombre"]?>
		    				<td><?= $r["esponja"]?>
		    				<td><?=	$r["dureza"] ?>
		    				<td><?=	$r["tipo_juego"] ?>
		    				<td><?=	$r["velocidad"] ?>
		    				<td><?=	$r["efecto"] ?>
		  				</tr>
					<?php
							}
						?>	
						
						<tr>
		    				<th>DHS
		    				<th>Esponja
		    				<th>Dureza
		    				<th>Tipo
		    				<th>Velocidad
		    				<th>Efecto
		                </tr>
				    <?php
					  $q2 = $conn->query($sql2);
					  while($r = $q2->fetch()){
					?>
		  				 <tr>
							<td><?= $r["nombre"]?>
		    				<td><?= $r["esponja"]?>
		    				<td><?=	$r["dureza"] ?>
		    				<td><?=	$r["tipo_juego"] ?>
		    				<td><?=	$r["velocidad"] ?>
		    				<td><?=	$r["efecto"] ?>
		  				</tr>
					<?php
							}
						?>	
		  					
		  
		 		 </table>
    </section>




 		
<footer>
		<p>
			&copy 2014 Argentina-Tandil cp7000 -All rights reserved by John-
		</p>
</footer>


</body>
</html>
