<?php
session_start();
	$_SESSION["nombreJ"] = $_POST["njesuita"];
    $_SESSION["codigo"] = $_POST["codigo"];
////////////////////////////////////////////////////Conecta con la base de datos ($conexión)
    include 'configdb.php'; 
	include 'Conexion.php';
////////////////////////////////////////////////////Consulta para saber si coincide
	$sql = "SELECT * FROM jesuita WHERE nombre = '" . $_SESSION["nombreJ"] . "' AND codigo = '" . $_SESSION["codigo"] . "';";	
////////////////////////////////////////////////////Cadena de caracteres de la consulta sql listar todos los jesuitas
	//Ejecuta la consulta
	$conexion->query($sql);
	if($conexion->affected_rows>0)
		echo '<h3><a href="Ciudades.php">Acceso concedido. Haz clic aquí para continuar.</a></h3>';
		
	else{
		echo '<h3><a href="Formulario Jesuitas.html">Error de insercion de datos compruebe los datos introducidos</a></h3>';
	}
////////////////////////////////////////////////////Cierra la conexión
	$conexion->close();
?>