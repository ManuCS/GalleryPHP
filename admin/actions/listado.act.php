<?php

    include "../common/config.php";
    include "../common/mysql.php";
    include "../common/utils.php";

    //Creo la conexión
    $c = Connect($config['database']);

    //Selecciono las imágenes por orden en el que fueron introducidas
    $sql = "select a.*, b.name as autor from images as a inner join authors as b On a.author_id = b.id order by a.id desc";

    $rows = ExecuteQuery($sql, $c);

    // debug($rows);
    Close($c);
