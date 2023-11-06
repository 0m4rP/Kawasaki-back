<?php

    /* es la conexion de a la base de datos */

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "kawasaki";

    $conexion = new mysqli($server, $user, $pass, $db);

    if($conexion->connect_errno){
        echo "error en la conexion";
        exit();
    };

?>
