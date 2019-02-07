<?php

    include "../common/config.php";
    include "../common/utils.php";
    include "../common/mysql.php";

    //Creo la conexión
    $c = Connect($config['database']);

    //Autores por orden
    $sql = "SELECT * FROM authors ORDER BY name ASC";

    $rows = ExecuteQuery($sql, $c);

    Close($c);
?>

<script type="text/javascript">
  
  function delete_post( id)
  {
    var ok = confirm( "¿ Seguro de borrar este autor ? ");
    if ( !ok)
    {
      return false;
    }
    else
    {
      location.href = "delete.php?page=autores&id=" + id;
    }
  }

</script>
<!-- Page Content -->
  <div class="container">
    <div class="row">

      <div class="col-lg-12 text-lett">
        <h2 class="mt-5">Listado de autores</h2>
      </div>
  
    </div>
    
    <div class="row cuadro_listado_fotos">
      <div class="col-lg-12">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Creado</th>
              <th scope="col">Activo</th>
              <th scope="col">Eliminar</th>
            </tr>
            </tr>
          </thead>
          <tbody>
            <?php

              foreach ( $rows as $row) 
              {

                if ( $row['enabled'] == "1")
                {
                  $enabled = "<img src='../assets/img/activo.png'  width=20px>";
                }
                else
                {
                  $enabled = "<img src='../assets/img/no_activo.png' width=20px>";
                }


                echo '
                  <td>'.$row['id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.date( "d/m/Y H:s:i", strtotime( $row['created'])).'</td>
                  <td>'.$enabled.'</td>
                  
                  <td><a href="#" OnClick="delete_post('.$row['id'].')"><img src="../assets/img/delete_2.png"  width=20px></a></td>
                  </tr>
                ';  
              }
            ?>


          </tbody>
        </table>

      </div>
    </div>

  </div>