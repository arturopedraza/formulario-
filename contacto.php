<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ACEJ</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/materialize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="shortcut icon" type="text/css" href="IMG/logo.png">
     <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

  <nav class="#0d47a1 blue darken-4" style="height: 58px">
    <div class="nav-wrapper">
      <a href="index.html" style="margin: 0px 8px" class="brand-logo">ACEJ</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">INICIO</a></li>
        <li><a href="badges.html">PAGOS</a></li>
        <li><a href="collapsible.html">ENVIOS</a></li>
        <li><a href="mobile.html">INICIAR SESIÓN</a></li>
          <a href="contacto.html" data-activates="slide-out" class="btn"><i class="material-icons" style="margin: -4px 2px">CONTACTO</i></a>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
        <a href="contacto.html" data-activates="slide-out" class="btn"><i class="material-icons">CONTACTO</i></a>
      </ul>
    </div>
  </nav>
  
   
  
  
  <!--este es la parte del código del carousel -->
  
    <div class="carousel">
    <a class="carousel-item" href="toner.html"><strong>CONSUMIBLES</strong><img src="IMG/consumibles-hp.png"></a>
    <a class="carousel-item" href="#two!">EQUIPOS<img src="IMG/equipos.png"></a>
    <a class="carousel-item" href="#three!">LAPTOPS<img src="IMG/laptop.png"></a>
    <a class="carousel-item" href="#four!">IMPRESORAS<img src="IMG/impresora.png"></a>
    <a class="carousel-item" href="#five!">LOGITECH<img src="IMG/logitech.jpg"></a>
  </div>
 
  
  
  <!--este es la parte del código del ccontacto -->
  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="IMG/background%20para%20contacto.jpg">
      </div>
      <a href="#"><img class="circle" src="IMG/curriculum.jpg"></a>
      <span class="white-text name">Arturo Pedraza</span>
      <a href="#!email"><span class="white-text email">arturopedraza05@gmail.com</span></a>
    </div></li>
    <li><div class="divider"></div></li>
    
    <li><img src="IMG/03.jpg" alt=""></li>
    <li><div class="divider"></div></li>
    <ul id="ul">
        <li><a class="grey-text text-lighten-3" href="mailto:arturopedraza05@gmail.com?"><img id="mail" src="IMG/001-email.png" alt=""></a></li>
        <li><a class="grey-text text-lighten-3" href="https://api.whatsapp.com/send?phone=5215561797030&text=Me%20gustaría%20saber%20el%20precio%20del"><img id="whatss" src="IMG/004-social-media.png" alt=""></a></li>
        <li> <a class="grey-text text-lighten-3" href="https://www.facebook.com/ACEJ-1624012024356452/"><img id="face" src="IMG/005-facebook.png" alt=""></a></li>
    </ul>
    
    <li><div class="divider"></div></li>
    <li><a class="subheader">DIRECCIÓN</a></li>
    <p>Plaza de la tecnología republica de uruguay No. 13, oficina 8 segundo piso, colonia centri cuauhtemoc, CDMX C.P. 0600.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5725839792144!2d-99.14272338552561!3d19.430864886885367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed49b35324f%3A0x4fa57208eff2b77f!2sRep%C3%BAblica+de+Uruguay+13%2C+Centro+Hist%C3%B3rico%2C+Centro%2C+06000+Ejido+del+Centro%2C+CDMX!5e0!3m2!1ses!2smx!4v1519253906103" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </ul>
  
  

  <div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="boton" value="Enviar Correo">
		</form>
	</div>
 
  
  
  
 

  
  
 
<!--este es la parte del footer -->
    <footer id="footer" class="page-footer,#0d47a1 blue darken-4">
          <div id="foote" class="container">
            <div class="row">
              <div class="col l6 s6">
                <p class="white-text , tamanio">Servicio a Clientes: LUNES A VIERNES 10:00 AM A 7:00 PM VENTAS MAYOREO ACEJ © 2015 Todos los derechos reservados</p>
                <p class="grey-text text-lighten-4">Página creada por: <a class="white-text" href="https://www.facebook.com/arturofabian.pedrazaflores"> © Arturo Pedraza</a></p>
                <p class="white-text , tamanio">ATENCIÓN A CLIENTES <br>5561797030</p>
                
              </div>
              <div class="col l6 s6">
                 <p class="white-text , tamanio">Plaza de la tecnología republica de uruguay No. 13, oficina 8 segundo piso, colonia centro cuauhtemoc, CDMX C.P. 0600.
                 </p>
                  <a class="grey-text text-lighten-3" href="https://www.facebook.com/ACEJ-1624012024356452/"><img id="facebook" src="IMG/005-facebook.png" alt=""></a>
                  
                 <a class="grey-text text-lighten-3" href="https://api.whatsapp.com/send?phone=5215561797030&text=Me%20gustaría%20saber%20el%20precio%20del"><img id="whatssap" src="IMG/004-social-media.png" alt=""></a>
                 
                 <a class="grey-text text-lighten-3" href="mailto:arturopedraza05@gmail.com?"><img id="email" src="IMG/001-email.png" alt=""></a>
              </div>
            </div>
          </div>   
    </footer>

   
    
</body>

<script src="JS/jquery-3.2.1.min.js"></script>
<script src="JS/materialize.min.js"></script>
<script src="JS/app.js"></script>
</html>