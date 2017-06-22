<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <form class="form-signin" method="POST" action="datosguardar.php">
        <h2 class="form-signin-heading">Iniciar Sesion</h2>        
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass">
        <button class="btn btn-lg btn-primary" type="submit" name="btnLogin">Ingresar</button>
        <a href="index.php" class="btn btn-lg btn-success">Página Principal</a>
      </form>
    </div> <!-- /container -->

    <hr>

        <!-- Footer -->
        <footer>
            </div>
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-3 col-sm-4">
                    
                            <p>LA BODEGA S.A<br>
                            2017 © Derechos Reservados.</p>
                            <a href="davidlerea.com/" target="_blank" class="link-web360" title="Agencia de Marketing Digital y Diseño web">DAVID LEREA - Programacion IV</a>
                        </div>
            <!-- /.row -->
        </footer>



  </body>
</html>
