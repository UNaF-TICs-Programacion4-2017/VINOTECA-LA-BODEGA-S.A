<?php
    

    if($_POST["email"]!=""&&$_POST["pass"]!=""){

        include "../../conexion.php";
        $usuario   = $_POST['email'];
        $password =  $_POST['pass'];

        //VERIFICAMOS EN LA BD SI EXISTE
        /*$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}*/

        $sql = "SELECT * FROM `login` WHERE login_correo ='$usuario' AND login_password = '$password'";    
        $query = $conexion->query($sql);
        //recorremos y buscamos al usuario en la tabla login que armo el CAPO DAVID
        while ($r=$query->fetch_array()) {
			$user_id=$r["id"];
			break;
		}

        if($user_id==null){
				
                header('Location:login.php?estado=incorrecto');
		}else{

            session_start();
			$_SESSION["user_id"]=$user_id;

            header('Location:principal.php');

		}


        
    }

    
?>