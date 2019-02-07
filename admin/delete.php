<?php
    include "../common/config.php";
    include "../common/utils.php";
    include "../common/mysql.php";

    $page = $_GET['page'];
    //Conecto a la BBDD
    $c = Connect($config['database']);


    if($page == "listado"){
        //Sentencia de borrado de imagen
        $sql = "DELETE FROM images WHERE id = ".$_GET['id'];
    }
    else{
        $sql = "DELETE FROM authors WHERE id = ".$_GET['id'];
    }


   
    $return = Execute($sql, $c);

    Close($c);

    header("location: home.php?page=$page"); 