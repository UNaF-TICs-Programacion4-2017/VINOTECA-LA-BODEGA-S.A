<!DOCTYPE HTML>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/layout.css">
    
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/carrito.js"></script>
        
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700,900' rel='stylesheet' type='text/css'>
    
    
 <title>Iniciar Sesion | Vinoteca La Bodega S.A</title>
<META name="description" content="Imponente variedad de etiquetas nacionales, destilados, cristalería y habanos. Asesoramiento Personalizado. Servicio de atención empresarial, venta telefónica, todas Las tarjetas, envíos a domicilio.">
<META name="keywords" content="vinos,vino,vinoteca,frappe,champagnes,champagne,licor,licores,cursos,degustaciones,habanos,venta,telefonica,empresas,vinotecas,destilados,cristalería,bar,restaurante,nacionales,etiquetas,malbec,vino buenos aires,comprar vino buenos aires">
<META name="language" content="es">
    <meta name="robot" content="index, follow">
    <link href="validacion/parsley.css" rel="stylesheet">
            <script type="text/javascript" src="validacion/parsley.js"></script>
            <script type="text/javascript">
            $(document).ready(function () {
          eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(\'#2\').1(\'0\',3(){$(\'#4\').6().5();7()});',8,8,'click|on|botonEnviar|function|formContacto|validate|parsley|validateFront'.split('|'),0,{}))
                  eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('9 8=7(){a(f===$(\'#e\').d().c()){$(\'.2-0-3\').6(\'1\');$(\'.2-0-5\').4(\'1\')}b{$(\'.2-0-3\').4(\'1\');$(\'.2-0-5\').6(\'1\')}};',16,16,'callout|hidden|bs|info|addClass|warning|removeClass|function|validateFront|var|if|else|isValid|parsley|formContacto|true'.split('|'),0,{}))
                    $('#formContacto').submit(function(e) { 
                      e.preventDefault();
                      if ( $('#formContacto').parsley().isValid() ) {
                          $("#botonEnviar").hide(); 
                          $("#aguarde").show(); 
                          $.post("js/contacto.php", $('#formContacto').serialize()  , function(response){
                                    ga('send', 'event', 'WEB', 'Contacto');
                                    $("#formContacto").hide();
                                        $("#gracias-contact").show();
                                });     
                      }
                    });
                });
            </script>
</head>

<body>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78766608-7', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="js/script.js"></script>
<div class="container">
    <header>
        <div class="row" id="sticky">
            <div class="container">
            <div class="isologo">
                <a href="index.php">
                    <img src="img/logo.png">
                </a>
            </div>
            <div class="menu">
                
                <input type="checkbox" id="toogle" />
                <label class="menubtn" for="toogle"><i class="fa fa-bars"></i></label>
                <menu>
                    
                        
                <li>
                        <li><a href="productos.php" id="tienda">productos</a></li>
                        <li><a href="login.php" id="tienda">Ingresar</a></li>
                        <div class="productos-menu despliega" style="display:none;">
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php?rubro=01&p=Vinos">
                                        Vinos
                                    </a>
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=011&n=Vinos Tintos">
                                        Vinos Tintos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=012&n=Vinos%20Blancos">
                                        Vinos Blancos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=014&n=Vinos%20Dulces">
                                        Vinos Dulces
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=013&n=Vinos%20Rosados">
                                        Vinos Rosados
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=015&n=Estuches%20Especiales">
                                        Estuches especiales
                                    </a>
                                </li>
                                 <h2>
                                    <a href="categoria.php?rubro=08&p=Delicatessen">
                                        Delicatessen
                                    </a>            
                                    
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=08&idt=081&n=Aceite%20de%20Oliva">
                                        Aceite de Oliva
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=08&idt=082&n=Chocolate">
                                        Chocolates
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=08&idt=083&n=Delicatesen%20Otros">
                                        Otros
                                    </a>
                                </li>
                            </ul>
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php?rubro=02&p=Espumantes">
                                        Espumantes
                                    </a>
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=022&n=Espumantes%20Importados">
                                        Importados
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=021&n=Espumantes%20Nacionales">
                                        Nacionales
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=051&n=Estucher%EF%BF%BDa">
                                        Estucheria
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=015&n=Estuches%20Especiales">
                                        Estuches especiales
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=031&n=Destilados">
                                        Destilados
                                    </a>
                                </li>
                                <h2>                                    
                                    <a href="categoria.php?rubro=05&p=Accesorios">
                                        Accesorios
                                    </a>
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=05&idt=102&n=Accesorios%20para%20Vinos">
                                        Para vinos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=05&idt=053&n=Cristaler%EF%BF%BDa">
                                        Cristaleria
                                    </a>
                                </li>
                               
                                
                            </ul>
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php?rubro=03&p=Espirituosas">
                                        Espirituosas
                                    </a>                                    
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=03&idt=032&n=Aperitivos">
                                        Aperitivos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=03&idt=031&n=Destilados">
                                        Destilados
                                    </a>
                                </li>
                                
                                
                                <li>
                                    <a href="tipo.php?rubro=04&idt=041&n=Cervezas">
                                        Cervezas
                                    </a>
                                </li>
                              
                            </ul>
                            <ul class="responsivesi" style="display:none;">
                                
                                <li>
                                    <a href="categoria.php?rubro=01&p=Vinos">
                                        Vinos
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php?rubro=02&p=Espumantes">
                                        Espumantes
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php?rubro=03&p=Espirituosas">
                                        Espirituosas
                                    </a> 
                                </li>
                                
                                <li>
                                    <a href="categoria.php?rubro=04&p=Cervezas-Sidras">
                                        Cervezas y Sidras
                                    </a> 
                                </li>
                                <li>                            
                                    <a href="categoria.php?rubro=05&p=Accesorios">
                                        Accesorios
                                    </a>
                              
                                </li>
                            </ul>
                        </div>
                        
                    
                        <li><a href="contacto.php" id="contacto">contacto</a></li>
                    </ul>
                </menu>
            </div>
            
               
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="index.php" class="logo">
                    <img src="img/logo.png">
                </a>
            </div>      
        </div>
    </header>
</div>
<script>
$(document).ready(function() {
    var stickyNavTop = $('#sticky').offset().top;

    var stickyNav = function() {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('#sticky').addClass('stick');
        } else {
            $('#sticky').removeClass('stick');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });
});
</script>
    
    <script type="text/javascript">
    $(document).ready(function() {
        $('#contacto').addClass('active');
    });
    </script>
            
    <section class="content contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Iniciar Sesion</h1>
                   
                </div>
            </div>
            <div class="row">
        <form name="loginform" method="post" action="login_procesar.php"">
        <form class="form-signin" method="POST" action="login_procesar.php">        
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass">
        <button class="btn btn-lg btn-primary" type="submit" name="btnLogin">Ingresar</button>
        <a href="registro.php" class="btn btn-lg btn-success">Registrar</a>
      </form>

            </div>
                </form>
                   <h3 id="gracias-contact" style="display:none;"> Bienvenido!!<form name="contactform" method="post" action="email.php"> </h3>
           
            </div>
        </section>
    </div>
    <div class="container">
    <footer>
        <div class="servicios">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Horarios</h1>
                    <p><a>8:00 a 12:00 <br>
                    16:00 a 20:00</a></p>
                                    </div>
                <div class="col-sm-3">
                    <h1>Venta telefónica</h1>
                    <p><a>3704-641201</a></p>
                </div>
                <div class="col-sm-3">
                    <h1>Envío gratuito</h1>
                    <p>En Formosa, comprando <br> a través del call center.</p>
                </div>
                <div class="col-sm-3">
                    <h1>Preguntas</h1>
                    <p><a href="contacto.php">Escribinos, estamos <br> para ayudarte</a></p>
                </div>
            </div>
        </div>
        <div class="links">
            <div class="row">           
                <div class="col-sm-3 hidden-xs">
                    <h1>Tienda</h1>
                    <ul>
                        <li><a  href="categoria.php?rubro=01&p=Vinos">Vinos </a></li>
                        <li><a  href="categoria.php?rubro=02&p=Espumantes-Sidras">Espumantes y sidras </a></li>
                        <li><a  href="categoria.php?rubro=03&p=Espirituosas">Espirituosas </a></li>
                        <li><a  href="categoria.php?rubro=04&p=Cervezas">Cervezas </a></li>
                        <li><a  href="categoria.php?rubro=05&p=Accesorios">Accesorios </a></li>
                        <li><a  href="categoria.php?rubro=08&p=Delicatessen">Delicatessen </a></li>
                        <li><a  href="tipo.php?rubro=07&idt=071&n=Cavas Climatizadas">Cavas Climatizadas </a></li>
                    </ul>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <h1>LA BODEGA</h1>
                    <ul>
                     <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="legales.php">Legales</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-3 col-sm-4">
                    
                            <p>LA BODEGA S.A<br>
                            2017 © All rights reserved.</p>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
