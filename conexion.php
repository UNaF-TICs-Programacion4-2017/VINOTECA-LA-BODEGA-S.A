<?php

 
$conexion = new mysqli("localhost", "root", "", "vinoteca");
 
if (mysqli_connect_errno()) {
    printf("Imposible conectarse: %s\n", mysqli_connect_error());
    exit();
}

?>