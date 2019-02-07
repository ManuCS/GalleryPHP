<?php
    include "../../common/config.php";
    include "../../common/mysql.php";
    include "../../common/utils.php";


    // debug($_POST);
    // debug($_FILES);

    //Recojo los parámetros por POST
    $author_id = $_POST['author_id'];
    $name = $_POST['name'];
    $text = $_POST['text'];

    if(isset($_POST['enabled'])){
        $enabled = 1;
    }
    else{
        $enabled = 0;
    }

    //Muevo el archivo subido hasta la carpeta files, cojo el fichero con ese nombre temporal y lo paso a la carpeta images con su nombre real
    move_uploaded_file($_FILES["fichero"]["tmp_name"], "../../images/".$_FILES["fichero"]["name"]);


    //Cojo el nombre y el tamaño del archivo y lo guardo en la BBDD
    $file = $_FILES["fichero"]["name"];
    $size = $_FILES["fichero"]["size"];

    //Conectamos a la BBDD
    $connection = Connect($config['database']);


    //Creamos sentencia sql
    $sql = "INSERT INTO images (author_id, name, file, size, text, enabled) VALUES ($author_id, '$name', '$file',$size, '$text', $enabled)";

    //Ejecutamos la sentencia
    $ejecuta = Execute($sql, $connection);

    //Cerramos la conexión
    Close($connection);

    header("location: ../home.php?page=listado");

?>