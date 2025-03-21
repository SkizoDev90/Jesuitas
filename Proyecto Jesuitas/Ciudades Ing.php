<?php
session_start();
?>
<html>
	<head>
		<title>Visit</title>
		<meta charset="utf-8">
		<meta name="author" content="Francisco M.Carrillo">
		<meta name="description" content="Formulario para que ingresen los Jesuitas">
		<link rel="stylesheet" href="camino.css">
	</head>
	<body>
		<h1>Hello, <?php session_start(); echo $_SESSION["nombreJ"]?></h1>
		<fieldset class="form">
			<form method="POST" action="guardarVisita_solo_id.php">
			<h3>Where do you want to connect from?</h3>
				<legend>Cities</legend>
					<select name="ipLocal"> 
						<?php
							include 'configdb.php'; 
							include 'Conexion.php';
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