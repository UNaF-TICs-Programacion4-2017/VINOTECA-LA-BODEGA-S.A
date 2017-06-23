<?php 
include "conexion.php";




$vinonombre= $_POST['registro_nombre']; 
$fecha= $_POST['registro_fecha'];
$edad= $_POST['registro_edad'];
$vinoemail= $_POST['registro_email']; 





$query= "INSERT INTO registro (registro_nombre,registro_fecha,registro_edad,registro_email) VALUES('$vinonombre','$fecha','$edad','$vinoemail')";
$resultado= $conexion->query($query); 
if ($resultado) {
	
	echo("No pudo Registrar");
}
else
echo "</p>Registro Exitoso</p>";





 ?>

<a href="contacto.php" class="btn btn-lg btn-success">ATRAS..</a>