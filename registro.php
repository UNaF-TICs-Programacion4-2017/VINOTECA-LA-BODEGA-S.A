<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR</title>
</head>
<?php echo '<H3>INGRESAR DATOS PERSONALES PARA EL REGISTRO:</p>'; ?>
<body>
<center>
<form action = "datosguardar.php" method="POST" >
 <p> APELLIDO Y NOMBRE: <input type="text" name="registro_nombre" /></p>
 <p> Fecha de Nacimiento: <input type="date"  name="registro_fecha" /></p>
  <p> EDAD: <input type="text"  name="registro_edad" /></p>
   <p> E-Mail: <input type="text" name="registro_email" /></p>
  <p><input type="submit"  name="Registrar"/></p>
</form>
</center>









</body>
</html>