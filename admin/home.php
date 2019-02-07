<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

    <!-- Mi CSS -->
    <link href="../assets/css/estilos.css" rel="stylesheet">


  </head>

  <body>

    <?php
        include "includes/menu.inc.php";
        //Página que se mostrará
        $page = $_GET['page'];

        switch($page){
            case 'listado':
                include "actions/listado.act.php";
                include "includes/listado.inc.php";
                break;
            case 'autores':
                include "includes/listado_autores.inc.php";
                break;
            case 'new':
                include "includes/new_foto.inc.php";
                break;
            case 'edit':
                include "includes/edit_foto.inc.php";
            default:

                break;
        }   

    ?>


  
    <hr>

    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
