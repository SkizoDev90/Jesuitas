<?php
session_start();
?>
<html>
	<head>
		<title>Visita</title>
		<meta charset="utf-8">
		<meta name="author" content="Francisco M.Carrillo">
		<meta name="description" content="Formulario para que ingresen los Jesuitas">
		<link rel="stylesheet" href="camino.css">
	</head>
	<body>
		<h1>Hola, <?php echo $_SESSION["nombreJ"]?></h1>
		<fieldset class="form">
			<form method="POST" action="guardarVisita_solo_id.php">
			<p>¿Desde donde deseas conectarte?</p>
				<legend>Ciudades</legend>
					<select name="ipLocal"> 
						<?php
							include 'configdb.php'; 
							include'Conexion.php';	
							$lugar="SELECT ip,lugar FROM lugar;";
							$resultado=$conexion->query($lugar);	
							while($fila=$resultado->fetch_array()){
								echo "<option value='".$fila["ip"]."'>".$fila["lugar"]."</option>";
							}
							$conexion->close();
						?>
					</select><br><br>
				<input type="submit">
			</form>
		</fieldset>
	</body>
</html>
