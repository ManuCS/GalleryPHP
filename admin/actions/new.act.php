<?php

    include("../../common/utils.php");
    include("../../common/mysql.php");
    include("../../common/config.php");

    // debug($_POST);

    //Recogemos los parámetros que se pasan por POST
    $display_name = $_POST['display_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //Si existe enabled = 1, sino 0
    if(isset($_POST['enabled'])){
        $enabled = 1;
    }
    else{
        $enabled = 0;
    }

    //Conectamos a la BBDD
    $connection = Connect($config['database']);


    //Creamos sentencia sql
    $sql = "INSERT INTO authors (name, email, password, enabled) VALUES ('$display_name', '$email', '$password',$enabled)";


    //Ejecutamos la sentencia
    $ejecuta = Execute($sql, $connection);

    //Cerramos la conexión
    Close($connection);


    //redireccionamos a la página home
    header("location: ../home.php");