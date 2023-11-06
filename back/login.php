<?php
    session_start();

    include '../db/conexion.php';

    if(isset($_POST['login_btn'])){

        $id = $_POST['id_person'];
        $pass = $_POST['pass'];
        $passCode = base64_encode($pass);

        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_person = '$id' AND pass = '$passCode'");

        $exist = mysqli_num_rows($consulta);

        if($exist == 1){
            while($datos = mysqli_fetch_array($consulta)){
                $_SESSION['nombre'] = $datos['names'];
                $_SESSION['apellido'] = $datos['lastname'];
                $_SESSION['nacimiento'] = $datos['birth'];
                $_SESSION['id_person'] = $datos['id_person'];
                $_SESSION['linea_moto'] = $datos['linea_moto'];
                $_SESSION['modelo_moto'] = $datos['modelo_moto'];
                $_SESSION['placa'] = $datos['placa'];
                $_SESSION['numero_motor'] = $datos['numero_motor'];
                $_SESSION['email'] = $datos['email'];
            }
            
            header('location:../app/app.php');
            exit();

        } else {
            header('location:../index.php?status=3');
        }


    }

?>