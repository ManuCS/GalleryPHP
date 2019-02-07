<?php
    include "../../common/config.php";
    include "../../common/utils.php";
    include "../../common/mysql.php";


    // debug($_POST);
    // debug($_FILES);


    $id = $_POST['id'];
    $author_id = $_POST['author_id'];
    $name = $_POST['name'];
    $text = $_POST['text'];

    if(isset($_POST['enabled'])){
        $enabled = 1;
    }
    else{
        $enabled = 0;
    }


    //Conecto a la BBDD
    $c = Connect($config['database']);


    //Si subimos fichero -> modificamos
    if ( $_FILES['fichero']['name'] != "")
    {
        move_uploaded_file( $_FILES["fichero"]["tmp_name"], "../../images/" . $_FILES["fichero"]["name"]);

        $fichero = $_FILES["fichero"]["name"];
        $size = $_FILES["fichero"]["size"];

        $sql = "update images set author_id = ".$author_id.", name = '".$name."', text = '".$text."', file = '".$fichero."', size = '".$size."', enabled = ".$enabled." where id = " . $id;
    }
    else //si no -> lo dejamos tal cual
    {
        $sql = "update images set author_id = ".$author_id.", name = '".$name."', text = '".$text."', enabled = ".$enabled." where id = " . $id;
    }

    $return = Execute($sql, $c);

    Close($c);

    header("location: ../home.php?page=listado");
?>