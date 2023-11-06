<?php
session_start();

include '../../db/conexion.php';
$usuario = $_SESSION['id_person'];
    
    if(isset($_POST['register-mantenimiento'])){
        $nombre_moto = $_POST['moto'];
        $motivo = $_POST['motivo'];
        $fecha = $_POST['fecha'];
        $factura = $_POST['factura'];
        $valor = $_POST['valor'];
        
    $sql = mysqli_query($conexion, "INSERT INTO registro_moto
    (nombre_moto, motivo_mantenimiento, fecha_mantenimiento, numero_factura, valor_mantenimiento, id_person) VALUES
    ('$nombre_moto', '$motivo', '$fecha', '$factura', '$valor', '$usuario')");

    header('location:../../app/mantenimiento.php?status=1');
            
    }

?>