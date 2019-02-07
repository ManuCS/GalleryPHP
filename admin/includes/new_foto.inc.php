<?php
    include "../common/config.php";
    include "../common/mysql.php";
    include "../common/utils.php";


    //Conecto a la BBDD
    $c = Connect($config['database']);

    $sql = "SELECT * FROM authors order by name asc";

    $rows = ExecuteQuery($sql, $c);

    // debug($rows);
    Close($c);

?>

<div class="container">
    <div class="row">

      <div class="col-lg-12 text-lett">
        <h2 class="mt-5">Nueva foto</h2>
      </div>
  
    </div>
    <div class="row form_new">
      <div class="col-lg-2 text-left"></div>
      <div class="col-lg-10 text-left">
       
        <form role="form" action="actions/new_foto.act.php" method="post" enctype="multipart/form-data">

          <div class="form-group row">
            <label for="author_id" class="col-lg-2 col-form-label">Autor</label>
             
              <div class="col-lg-4 text-lett">
                
                <select  class="form-control" name=author_id id=author_id>
                    <?php
                      foreach ( $rows as $row) 
                      {
                        echo "<option value= ".$row[0].">".$row[1]."</option>";
                      }

                    ?>

                </select>

            </div>
           
          </div>

          <div class="form-group row">
            <label for="name" class="col-lg-2 col-form-label">Nombre</label>
             
              <div class="col-lg-4 text-lett">
                <input type="text" class="form-control" id="name" name="name" placeholder="">
            </div>
           
          </div>

          <div class="form-group row">
            <label for="fichero" class="col-lg-2 col-form-label">Fichero</label>
             
              <div class="col-lg-4 text-lett">
                <input type="file" class="form-control" id="fichero" name="fichero" placeholder="">
            </div>
           
          </div>


          <div class="form-group row">
            <label for="size" class="col-lg-2 col-form-label">Texto</label>
             
              <div class="col-lg-4 text-lett">
                <textarea rows="5" cols="60" id="text" name="text"></textarea>
            </div>
           
          </div>

          <div class="form-group row">
            <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
             
              <div class="col-lg-3 text-lett">
                <input type="checkbox"  id="enabled" name="enabled">
            </div>
            
          </div>



          <br><br>
          <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <br><br>
      </div>
      <div class="col-lg-2 text-left"></div>
    </div>

  </div>