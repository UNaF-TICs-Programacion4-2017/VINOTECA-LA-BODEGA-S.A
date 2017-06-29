<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..:PAGINA PRINCIPAL:..</title>
</head>

<body bgcolor="#F5A9F2">
	<center><h2>BIENVENIDO</h2></center>
	
	<a href="salir.php"><h4>CERRAR SESSION</h4></a>
</body>
</html>
