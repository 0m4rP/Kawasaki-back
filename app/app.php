<?php
    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $linea_moto = $_SESSION['linea_moto'];
    $usuario = $_SESSION['id_person'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app-styles/menu.css">
    <link rel="stylesheet" href="../css/app-styles/principal.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo2.png">
    <title>Moto Registro</title>
</head>
<body>
    <menu-main></menu-main>

    <video autoplay muted loop>
    <source src="../img/video.mp4" type="video/mp4">
        Tu navegador no soporta el elemento de video.
    </video>

    <section class="section-1">
        <img class="image-fondo" src="../img/logo1.png" alt="">
        <h1>Bienvenido <?php echo $nombre; ?>,</h1>
        <p>Tu moto <?php echo $linea_moto; ?> le faltan 2000km para el próximo mantenimiento</p>
        <a class="btn" href="../app/citas.php">Agendar mantenimiento</a>
    </section>
    <script src="../js/menu.js"></script>
    <script src="../js/app_menu.js"></script>
</body>
</html>

<!-- idea principal:

    es cuando el usurio ingrese pueda ver los cambios de aceite, frenos, filtros que le ha hecho a la moto, grafico donde se vea la fecha y el cambio de
    aceite, agendamiento de citas, también que tenga y le muestre al usuario lo que ha gastado gráficos teniendo por el momento 3 gráficso

    en la primera seccion de mantenimientos va a mostrar la moto a un lado izquierdo donde estará particionado el lado derecho habrá
    resgitros mostrando los mantenimientos y especificando lo que se le ha hecho a la moto

    en la seugnda seccion tendrá 
-->