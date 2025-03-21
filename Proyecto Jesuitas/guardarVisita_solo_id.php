<?php
session_start();
//Recoge la información del formulario
	$iplocal=$_POST["ipLocal"];
	
//////////////////////////////////////////////////////////////////Conecta con la base de datos ($conexión)
    include 'configdb.php'; 
	include 'Conexion.php';
	//////////////////////////////////////////////////////////////consulta para sacar la el id jesuita
	$sql="SELECT idJesuita From jesuita WHERE nombre='".$_SESSION["nombreJ"]."';";
	$resultado=$conexion->query($sql);
	
	$fila = $resultado->fetch_array();
	$idJ = $fila["idJesuita"];
	
	///////////////////////////////////////////////////////////////insert
	$sql="INSERT INTO visita (idJesuita, ip)VALUES('".$idJ."','".$iplocal."')";	
	
//Ejecuta la consulta
	$conexion->query($sql);
	if($conexion->affected_rows>0)
		echo "<h2>Visita realizada</h2>";
	else{
		echo "<h2>La visita no se ha realizado</h2>";
		echo '<h3><a href="Ciudades.php"> Vuelve a intentarlo</a></h3>';
	}
	
//Cierra la conexión
	$conexion->close();
?>