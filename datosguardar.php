<?php 
include "conexion.php";
include "contacto.php";



$vinonombre= $_POST['vinoteca_nombre']; 
$vinoemail= $_POST['vinoteca_email']; 
$mensaje= $_POST['vinoteca_consulta'];



$query= "INSERT INTO bodega (vinoteca_nombre,vinoteca_email,vinoteca_consulta) VALUES('$vinonombre','$vinoemail','$mensaje')";
$resultado= $conexion->query($query); 
if ($resultado) {
	
	header("location: contacto.php");
}
else
echo "</p>insercion fallida</p>";





 ?>

