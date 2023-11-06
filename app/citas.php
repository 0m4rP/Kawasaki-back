<?php

    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $linea_moto = $_SESSION['linea_moto'];
    $usuario = $_SESSION['id_person'];

    $query_citas = mysqli_query($conexion, "SELECT * FROM citas WHERE id_person = '$usuario'");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app-styles/menu.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo2.png">

    <link rel="stylesheet" href="../css/app-styles/citas.css">
    <title>Agendamientos de citas</title>
</head>
<body>
    <menu-main></menu-main>

    <section class="section-3">
        <div class="contenedor">
            <div class="caja1">
                <div class="cubos">
                <h2>Citas</h2>
                <?php

                while($datos = mysqli_fetch_array($query_citas)){
                    $nombres = $datos['nombres_citas'];
                    $moto_citas = $datos['moto_citas'];
                    $fecha_citas = $datos['fecha_citas'];
                    $hora_citas = $datos['hora_citas'];
                    $motivo_citas = $datos['motivo_citas'];
                    $comentarios = $datos['comentario_citas'];

                    switch($motivo_citas){
                        case 1:
                            $motivo = "Cambio de aceite";
                            break;
                        case 2:
                            $motivo = "Llantas";
                            break;
                        case 3:
                            $motivo = "Cambio de frenos";
                            break;
                        case 4:
                            $motivo = "Filtro de aceite";
                            break;
                        case 5:
                            $motivo = "Compra de accesorio";
                            break;
                        case 6:
                            $motivo = "Compra de repuesto";
                            break;                                    
                        default:
                            $motivo = "";
                    }

                    echo '
                    <h3>Cita de '. $motivo .'</h3>
                    <p>moto: '. $moto_citas .'</p>
                    <p>fecha: '. $fecha_citas .'</p>
                    <p>hora: '. $hora_citas .'</p>
                    <p>Dueño: '. $nombres .'</p>
                    <p>Comentario: '. $comentarios .'</p>';

                    
                }


                ?>
                </div>
            </div>
            <div class="caja2">
                <form action="../back/app-back/citas-back.php" method="POST">

                
                <h3 class="titulo-agendar">Agendar ahora</h3>

                <label for="name" name="name_lastname">Nombres y apellidos</label>
                <input type="text" id="name" name="name_lastname">
                <div class="moto">
                    <label for="name-moto">Moto</label>
                    <input type="text" id="name-moto" name="moto_citas">
                    
                    <label for="modelo">Modelo</label>
                    <input type="number" id="modelo" name="modelo_citas">
                </div>
                <div class="tiempo">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha_citas">
    
                    <label for="hora">Hora</label>
                    <input type="time" id="hora" name="hora_citas">
                </div>

                <label for="motivo">Motivo</label>
                <select id="motivo_citas" name="motivo_citas">
                    <option value="">Seleccionar</option>
                    <option value="1">Cambio de aceite</option>
                    <option value="2">Llantas</option>
                    <option value="3">Cambio de frenos</option>
                    <option value="4">Filtro de aceite</option>
                    <option value="5">Compra de accesorio</option>
                    <option value="6">Compra de repuesto</option>
                </select>

                <label for="comentario">Comentario</label>
                <textarea id="comentario" cols="5" rows="8" name="comentarios_citas"></textarea>

                <button id="btn" type="submit" name="agendar-btn">Agendar</button>

                </form>
            </div>
        </div>
    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/app_menu.js"></script>
</body>
</html>