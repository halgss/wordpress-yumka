﻿<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
    
    
    <!-- Main CSS creado-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row">

          <div class="col">
            <img src="<?php bloginfo('template_url'); ?>/img/LogoLetraYUMKA.png" alt="yumka" style="padding: 0px 0px 15px 0px;">
          </div>

          <div class="col">
            <ul class="social-header list-inline text-right">
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

<!-- Generamos un menu con opciones para mobiles -->
<div class="col" style="background-color: #f8f400;">
<nav class="navbar navbar-expand-md navbar-light" style=".bg-color="#f8f400";">
  <!-- <a class="navbar-brand" href="#">Navbar</a>  -->

  <!-- Genera el boton de menu para dispositivos mobiles -->
  <button class="navbar-toggler" id="menu-movil" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
    <span ><i class="fas fa-bars"></i></span>
    <!-- <span class="navbar-toggler-icon"  ></span>
    style="background-image: url('https://mdbootstrap.com/img/svg/hamburger6.svg?color=c02232');" -->
  </button> 
  <!-- /Genera el boton de menu para dispositivos mobiles -->
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="background-color: #f8f400;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Yumka'<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #000000;">Nuestra Ubicación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #000000;">Boletos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #000000;">Transporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #000000;">Agenda tu visita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #000000;">Contáctanos</a>
      </li>
      <!-- Agrega un menu con opciones desplegables -->
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      -->
      <!-- /Agrega un menu con opciones desplegables -->
    </ul>
  </div>
</nav>
</div>
<!-- /Generamos un menu con opciones para mobiles -->

    </header>

    <div id="main">
       <!-- Container bloque que contiene todo el contenido central de la pagina, con el codigo en el style se centra el container, ocupa el 90% del ancho de la pantalla y como maximo utiliza 1200px-->
      <div class="container-fluid" style="margin: 0 auto; width: 90%; max-width: 75rem;">  
        <div id="slider-home" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_url'); ?>/img/selva.png" alt="slide-1" style="width: 100%">

              <div class="carousel-caption">
                
                <img alt="Yumka" src="<?php bloginfo('template_url'); ?>/img/Eslogan.png" style="margin-top: 1rem"">
                
                <img alt="Yumka" src="<?php bloginfo('template_url'); ?>/img/LetraYUMKA.png" style="margin-top: 1rem">
                
                <p><h4 style="font-size: 2vw;">Si eres Tabasqueño pregunta por las promociones que tenemos para tí</h4></p>
                <p align="center"><a href="#" class="btn btn-light">Ver más</a></p>
              </div>

            </div>

            <div class="carousel-item">
              <video class="video-fluid" autoplay loop muted alt="slide-2" style="width: 100%">
                <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
              </video>
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/img/selva.png" alt="slide-3" style="width: 100%">
            </div>
          </div>
        </div>

        <!--  Empieza contenido de la pagina que esta abajo del slider -->
        <div class="row" style="margin-top: 80px;">
          <div class="col">
            <h3><strong>El Yumka'</strong>
              <i class="fas fa-leaf pull-right hidden-xs-down" aria-hidden="true" style="color:#c02232"></i>  
            </h3>
            <p align="justify">El Yumka' es una reserva ecológica, en la modalidad de Centro de lnterpretaci6n de la Naturaleza, ubicada en Villahermosa, Tabasco, México y cuyo fin principal es promover la educación ambiental, la conservación y la protección de las especies dentro del estado de Tabasco. 
            </p>
            <p align="justify">Lleva 25 años al servicio del público, uno de sus objetivos es promover actividades de educación ambiental no formal, es decir trasmitir conocimiento, aptitudes y valores ambientales fuera del sistema educativo institucional, que conlleve la adopción de actitudes positivas hacia el media natural y social.</p>
            <p>Teléfono: 01 (993) 5 96­67­02</p>
            <p>Horario de taquilla: 9am a 3:30pm lunes a domingo.</p>
            <p>Correo electrónico: yumka.informes@gmail.com</p>
          </div>
          <div class="col" >
            <h3>Nuestra ubicación <i class="fas fa-map-marker-alt pull-right hidden-xs-down" aria-hidden="true" style="color:#c02232"></i></h3>
            <p align="justify">Estamos ubicados en la Ranchería Las Barrancas S/N, aun costado del aeropuerto en Villahermosa, Tabasco, México. C.P. 86280.</p>
            <!-- Insertamos el mapa de google map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12731.017196536919!2d-92.80943791576668!3d18.004792778332384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd81e9d7ab27f%3A0xa2e3990ea16723e5!2zWXVta2HCtA!5e0!3m2!1ses!2smx!4v1539452039219" width="100%" height="283" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>           
        </div> 

        <!--Empieza el contenido de los boletos -->
        <div class="row" style="margin-top: 80px;">
          <div class="col">
            <h3><strong>Boletos - Donativos</strong>              
              <i class="fas fa-ticket-alt pull-right hidden-xs-down" aria-hidden="true" style="color:#c02232"></i>  
            </h3>
          </div>
        </div>

        <!-- Carrousel de productos -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="Productos-Carousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#Productos-Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Productos-Carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket Cebra.png" alt="ticket Cebra" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket Elefante.png" alt="ticket Elefante" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket jirafa.png" alt="ticket jirafa" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket Mono.png" alt="ticket Mono" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket roedor.png" alt="ticket roedor" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket Tigre.png" alt="ticket Tigre" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col" style="margin-top: 10px;">
                                        <a href="#">
                                            <img src="<?php bloginfo('template_url'); ?>/img/ticket tortuga.png" alt="ticket tortuga" style="max-width:100%;">
                                        </a>
                                    </div>  
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->


                        <!-- Agregamos los controles laterales para desplazar el carrusel -->
                        <a class="carousel-control-prev" href="#Productos-Carousel" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#Productos-Carousel" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <!-- /Agregamos los controles laterales para desplazar el carrusel -->


                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
        <!-- /Carrousel de productos -->

        <!--Tercer bloque de información -->
        <div class="row" style="margin-top: 80px;">
          <div class="col">
            <h3 style="margin-right: 10px;"><strong>Sitios para tomar el transporte público o privado, para llegar al Yumka'</strong>              
              <i class="fas fa-bus-alt pull-right hidden-xs-down" aria-hidden="true" style="color:#c02232;"></i>  
            </h3>
            <p align="justify">
              Para ofrecerte una mejor experiencia Yumka', te ofrecemos la opción de nuestro servicio de transporte, Camiones Yumka’ o en su dado caso también puedes tomar el transporte público. Ver más. <br>
              <img src="<?php bloginfo('template_url'); ?>/img/Camion_yumka.jpg" alt="Camion yumka"  style="max-width:100%; margin-top: 10px;">
            </p>
          </div>
          <div class="col">
            <h3><strong>Agenda tu visita</strong>
            <i class="far fa-calendar-alt pull-right hidden-xs-down" aria-hidden="true" style="color:#c02232"></i>  
            </h3>
            <p align="justify">
              Si tu agencia de viaje, grupo social, escuela, etc., tiene pensado vivir la aventura del Yumka’ es muy sencillo planear tu visita con nosotros. <br><br>
 
              Solo necesitas enviar un correo dirigido a la "M. en C. Alinka Vanesa Olea y Wagner'', Directora General del Yumka’, en una hoja membretada oficial y si no cuentas con la hoja membretada, puedes enviarla con el sello oficial de tu grupo. Este oficio debe ser escaneado y adjuntado a un correo electrónico y enviarlo al correo siguiente: yumka.informes@gmail.com <br><br>

              Cabe recordar que todo oficio enviado estará pendiente de ser autorizado por parte de la Dirección de Educación y Difusión del Yumka. No se deberá tomar como autorizado por el solo hecho haber sido enviado, deberá tener una respuesta vía correo electrónico donde se indique si fue aprobada. <br><br>
              <a href="#" class="btn btn-primary btn-lg btn-block" >Ver ejemplos y estructura del oficio</a>
            </p>
          </div>
        </div>
        <!-- /Tercer bloque de información -->
      
      <!-- /Container bloque que contiene todo el contenido central de la pagina --> 
    </div>

<!-- /Cuarto bloque menu inferior -->
    <div class="row" style="background-color: #4a6f22; padding-top: 10px;">  
      <div class="col-3" align="right">   
        <img src="<?php bloginfo('template_url'); ?>/img/Tortuga.png" alt="Tortuga"  style="max-width:100%; margin-top: 10px; margin-right: -20px;">     
      </div>
      <div class="col-4" style="color: #ffffff;">
        <h5>Acerca de nosotros </h5>
          <p align="justify" style="font-size: 12px; margin-top: -10px;">Yumka' es una reserva ecólogica, en la modalidad de Centro de Interpretación y Convivencia con la Naturaleza, ubicada en Villahermosa, Tabasco, México y cuyo fin principal es promover la educación ambiental, la conservación y la protección de las especies dentro del estado de Tabasco.</p>

          <ul class="social-header list-inline text-left">
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
            </ul>


      </div>      
      <div class="col-2" style="color: #ffffff;">
        <h5>Información relevante</h5>
          <ul align="left" style="font-size: 12px; margin-top: -10px;">  
              <li>¿Cómo agendar tu visita escolar?</li>
              <li>Blog Yumka'</li>
              <li>Bolsa de Trabajo</li>
          </ul>
      </div>
            
      <div class="col-2" style="color: #ffffff;">
        <h5>Contáctanos</h5>
        <p align="justify" style="font-size: 12px; margin-top: -10px; margin-left: -10px;">
          Dirección: Ranchería Las Barrancas S/N, Villahermosa, Tabasco, México.
          CP 86280.<br>
          Teléfono: 01 (993) 596 67 04<br>
          Horario de taquilla:<br>
          9am a 3:30pm Lunes a Domingo<br>
          Correo electrónico:<br>
          yumka.informes@gmail.com<br>
        </p>
      </div>

      <div class="col">        
      </div>               
    </div> 


    <footer>
      <div class="container">
        <div class="row">
          <div class="col">
            <strong>Yumka'</strong> &copy; 2018 - Todos los derechos reservados, Sitio diseñado por <a href="#">Henry Alcaraz</a>
          </div>
          <div class="col text-right">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Aviso legal</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Cookies</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contácto</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/general.js" type="text/javascript"></script>
  </body>
</html>