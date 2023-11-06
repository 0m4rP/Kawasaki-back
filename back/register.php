<?php

    include '../db/conexion.php';

    if(isset($_POST['register_btn'])){
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $birth = $_POST['birth'];
        $id_person = $_POST['id_person'];
        $modelo_moto = $_POST['modelo_moto'];
        $linea_moto = $_POST['linea_moto'];
        $placa = $_POST['placa'];
        $numero_motor = $_POST['numero_motor'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $pass_en = base64_encode($pass);

        $validation = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_person = '$id_person'");
        $cant = mysqli_num_rows($validation);

        if($cant == 1){
            header ('location:../index.php?status=2');
        } else {
            $sql = mysqli_query($conexion, "INSERT INTO usuarios
            (names, lastname, birth, id_person, linea_moto, modelo_moto, placa, numero_motor, email, pass) VALUES
            ('$names', '$lastname', '$birth', '$id_person', '$linea_moto', '$modelo_moto', '$placa', '$numero_motor', '$email', '$pass_en')");

            header('location:../index.php?status=1');
        }

    }

?>
