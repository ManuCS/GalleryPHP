<?php
    
    include("../../common/utils.php");
    include("../../common/mysql.php");
    include("../../common/config.php");

    // debug($_POST);

    //Recogemos los datos
    $email_login = $_POST["email_login"];
    $login_password = md5($_POST["login_password"]);


    //Creamos conexión con bbdd
    $c = Connect($config['database']);
    
    $sql = "SELECT * FROM AUTHORS WHERE email = '".$email_login."' AND password = '".$login_password."'";

    $rows = ExecuteQuery($sql, $c);

    Close($c);

    // debug($rows);

    //si lo que devuelve está vacio -> da error
    if(empty($rows)){
        header("location: ../error.php?error=1");
    }
    else{
        session_start();
        $_SESSION['id'] = $rows[0]['id'];
        $_SESSION['email'] = $rows[0]['email'];
        $_SESSION['session_id'] = session_id();
		header ("location: ../home.php?page=listado");
    }

    


?>
