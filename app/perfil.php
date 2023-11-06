<?php

    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $linea_moto = $_SESSION['linea_moto'];
    $modelo = $_SESSION['modelo_moto'];
    $placa = $_SESSION['placa'];
    $numero_motor = $_SESSION['numero_motor'];
    $correo = $_SESSION['email'];

    $usuario = $_SESSION['id_person'];

    $query_perfil = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_person = $usuario");

    $nombreCompleto = $nombre . ' ' . $apellido;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app-styles/profile.css">
    <link rel="stylesheet" href="../css/app-styles/menu.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo2.png">


    <title>Profile</title>
</head>
<body>
    <menu-main></menu-main>

    <section class="perfil">
        <div class="perfil-usuario">
        
        <?php
        echo '
        <ul>
            
            <img src="https://thispersondoesnotexist.com/" alt="Persona generada aleatoriamente" class="profile-img">
            <li>'. $nombreCompleto .'</li>
            <li>'. $correo .'</li>
            <li>'. $usuario .'</li>

        </ul>

        <a href="../db/logout.php" class="salir">
            <i class="fa-solid fa-right-from-bracket fa-3x"></i>
        </a>
        </div>

        <div class="moto">
            <img src="../img/h2r-1.png" alt="moto" class="moto-img">
            <h1>Moto: '. $linea_moto .'</h1>
            <p>Modelo: '. $modelo .'</p>
            <p>Placa: '. $placa .'</p>
            <p>Numero motor: '. $numero_motor .'</p>
        </div>';
        ?>

        
    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/app_menu.js"></script>
</body>
</html>