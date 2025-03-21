<?php
session_start();
	$codigoJ = $_POST["codigo"];
    $njes = $_POST["nJesuita"];
	$nAlu = $_POST["nAlumno"];
	$firmaES = $_POST["firmaES"];
	$firmaIng = $_POST["firmaIngles"];
////////////////////////////////////////////////////Conecta con la base de datos ($conexión)
    include 'configdb.php'; 
	include 'Conexion.php';
////////////////////////////////////////////////////Consulta para añadir jesuitas
	$sql="INSERT INTO jesuita (codigo,nombre,nombreAlumno,firma,firmaIngles)VALUES('".$codigoJ."','".$njes."','".$nAlu."','".$firmaES."','".$firmaIng."')";

	//Ejecuta la consulta
	$conexion->query($sql);
	if($conexion->affected_rows>0)
		echo '<h3>Enhorabuena el registro se ha realizado con exito</h3>';
		
	else{
		echo '<h3><a href="AñadirJesuitas.html">Error de insercion de datos compruebe los datos introducidos</a></h3>';
	}
////////////////////////////////////////////////////Cierra la conexión
	$conexion->close();
?>