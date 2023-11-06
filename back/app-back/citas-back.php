<?php

session_start();

include '../../db/conexion.php';
$usuario = $_SESSION['id_person'];

    if(isset($_POST['agendar-btn'])){
        $nombres = $_POST ['name_lastname'];
        $moto_citas = $_POST ['moto_citas'];
        $modelo_citas = $_POST ['modelo_citas'];
        $fecha_citas = $_POST ['fecha_citas'];
        $hora_citas = $_POST ['hora_citas'];
        $motivo_citas = $_POST ['motivo_citas'];
        $comentarios = $_POST ['comentarios_citas'];

        $sql = mysqli_query($conexion, "INSERT INTO citas
        (nombres_citas, moto_citas, modelo_citas, fecha_citas, hora_citas,  motivo_citas, comentario_citas, id_person) values
        ('$nombres', '$moto_citas', '$modelo_citas', '$fecha_citas', '$hora_citas', '$motivo_citas', '$comentarios', '$usuario') ");
        
        header('location: ../../app/citas.php');
    }

?>
