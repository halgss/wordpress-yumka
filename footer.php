<?php 
/**
* The template for displaying the footer
**/
?>
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
    
    <?php wp_footer(); ?>
    <!-- funcion de wordpress para que pueda agregar codigo de plugin -->

  </body>
</html>