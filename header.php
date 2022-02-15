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
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css">

    <?php wp_head(); ?>
    <!-- funcion de wordpress para que pueda agregar codigo de plugin -->

  </head>
  <body>
    <header>
      <div class="menus">
          <nav>
              <span class="span-mobile">
                <img src="<?php echo get_template_directory_uri();; ?>/img/menu-mobile.png" alt="menu-mobile" class="menu-mobile">
              </span>
              <div class="mobile-menu">
                  <ul>
                      <li>
                          <a href="/" class="title">Soy visitante</a>
                      </li>
                      <li>
                          <a href="/" class="title">Soy personal del Yumka'</a>
                      </li>
                      <li>
                          <a href="/" class="title">yumka.gob.mx</a>
                      </li>
                  </ul>   
              </div>

              <div class="navbar-left">
                  <img src="<?php echo get_template_directory_uri();; ?>/img/yumka_blanco.png" alt="logo-menu" class="logo-menu">
                  <ul>
                      <li>
                          <a href="/">Recorrido</a>
                      </li>
                      <li>
                          <a href="/">Horarios</a>
                      </li>
                      <li>
                          <a href="/">Costos</a>
                      </li>
                      <li>
                          <a href="/">Reglamento</a>
                      </li>
                      <li>
                          <a href="/">Buz&oacuten</a>
                      </li>
                  </ul>
              </div>

              <div class="navbar-right">
                  <ul>
                      <li class="navbar-web"><a href="http://yumka.gob.mx">yumka.gob.mx</a></li>
                      <li class="navbar-rs">                      
                        <a href="https://www.facebook.com/ANPYumka/" target="_blank" rel="noopener noreferrer">
                              <i><img src="<?php echo get_template_directory_uri();; ?>/img/logo-face.png" alt="Facebook"></i>
                        </a>                          
                      </li>
                  </ul>                
              </div>
          </nav>
      </div>

      <div class="tucan-izq">
          <img src="<?php echo get_template_directory_uri();; ?>/img/tucan_izq.png" alt="tucan_izq">
      </div>
      

    </header>