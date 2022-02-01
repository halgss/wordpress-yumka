<?php 
/**
* The template for displaying the header
**/
?>
<!doctype html>
<html <?php language_attributes();?>   > <!-- funcion de wordpress para evitar errores de idiomas -->
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

    <?php wp_head(); ?>
    <!-- funcion de wordpress para que pueda agregar codigo de plugin -->

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