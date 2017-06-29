<?php
//incluimos el archivo para manipular la base de datos
require_once "myDBC.php";

//Recibimos en variables los campos del registro
//Con trim quitamos espacios en blanco al inicio y final
$nombre = trim($_POST['login_nombre']);
$mail = trim($_POST['login_mail']);
$pass = trim($_POST['login_pas']);
$repass = trim($_POST['login_rpas']);
$patron1 = ("/^[a-z]+$/i"); //Expresión regular para solo caracteres


	
		$mydb = new myDBC();
		$pass_oculto = crypt($pass, '_er#.lop');
		$mydb->agregaUsuario($nombre, $apellidos, $correo, $pass_oculto);	


	
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>SERVIDOR</title>
</head>

<?php echo "Registro Exitoso" ?>

	
</body>

</html>
