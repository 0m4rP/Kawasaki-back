<?php
    session_start();
    include '../db/conexion.php';

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $linea_moto = $_SESSION['linea_moto'];
    $usuario = $_SESSION['id_person'];
    

    if(isset($_GET['status'])){
        if($_GET['status'] == 1){
            echo '<script>alert("registro exitoso")</script>';
        }
    }

    $query_moto = mysqli_query($conexion, "SELECT * FROM registro_moto WHERE id_person = $usuario");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app-styles/menu.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/app-styles/mantenimiento/mantenimiento.css">
    <link rel="stylesheet" href="../css/app-styles/mantenimiento/registro-mantenimiento.css">
    <link rel="icon" href="../img/logo2.png">

    <title>Mantenimiento</title>
</head>
<body>
    <menu-main></menu-main>

    <section class="section-2">
        <div class="image-moto">
            <h2 class="titulo-moto"> <?php echo $linea_moto; ?></h2>
            <img src="../img/h2r-1.png" alt="">
        </div>
        <div class="contenedor">

            <div class="informacion">
                <div class="caja">

                        <?php
                            while ($datos = mysqli_fetch_array($query_moto)){
                                $nombre_moto = $datos['nombre_moto'];
                                $motivo_mantenimiento = $datos['motivo_mantenimiento'];
                                $fecha_mantenimiento = $datos['fecha_mantenimiento'];
                                $numero_factura = $datos['numero_factura'];
                                $valor_mantenimiento = $datos['valor_mantenimiento'];

                                switch($motivo_mantenimiento){
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

                                echo
                                '<hr>
                                <h2>Mantenimiento de: '. $nombre_moto .' </h2>
                    
                                <p>'. $motivo .'</p>
                                <p>'. $fecha_mantenimiento .'</p>
                                <p>número de factura:'. $numero_factura .'</p>
                                <p>valor: '. $valor_mantenimiento .'</p>
                                <hr>
                                ';
                        }?>

                    
                </div>
            </div>
            <div class="boton">
                <button class="registro"  onclick="mostrarFormulario()">Registrar mantenimiento</button>
            </div>
        </div>
    </section>

    <div id="overlay">
        <div id="popup">
        <h2>Registro de mantenimiento</h2>
        <form id="registroForm" action="../back/app-back/mantenimiento-back.php" method="POST">
            <label class="label-registro" for="moto" >Linea de Moto:</label>
            <input class="cajitas-registro" type="text" id="moto" name="moto" placeholder="Ejemplo: Z900" required>

            <label class="label-registro" for="motivo" >Motivo:</label>
                <select class="cajitas-registro" id="motivo" name="motivo" required>
                    <option value="">Seleccionar</option>
                    <option value="1">Cambio de aceite</option>
                    <option value="2">Llantas</option>
                    <option value="3">Cambio de frenos</option>
                    <option value="4">Filtro de aceite</option>
                    <option value="5">Compra de accesorio</option>
                    <option value="6">Compra de repuesto</option>
            </select>

            <label class="label-registro" for="date">Fecha:</label>
            <input class="cajitas-registro" type="date" id="date" name="fecha" required>

            <label class="label-registro" for="factura">Número de Factura:</label>
            <input class="cajitas-registro" type="text" id="factura" name="factura" placeholder="Ejemplo: 12984789as" required>

            <label class="label-registro" for="valor">Valor:</label>
            <input class="cajitas-registro" type="number" id="valor" name="valor" placeholder="Ejemplo: 500.000" required>

            <button type="submit" class="register-button" name="register-mantenimiento">Registrar</button>
            <button type="button" class="register-button" onclick="ocultarFormulario()">Cerrar</button>
        </form>
        </div>
    </div>

    <script src="../js/registro-mantenimiento.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/app_menu.js"></script>
</body>
</html>