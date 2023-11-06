<?php

    if(isset($_GET['status'])){
        if($_GET['status'] == 1){
            echo '<script>alert("registro exitoso")</script>';
        } 
        if($_GET['status'] == 2){
            echo '<script>alert("el usuario ya existe")</script>';
        } 
        if($_GET['status'] == 3){
            echo '<script>alert("acceso denegado")</script>';
        } 
        
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/oscuro.css">
    <link rel="icon" href="img/logo2.png">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <title>Sesión</title>
</head>

<body class="fondo">
    <section class="contenedor">
        <form class="login_login" action="back/login.php" method="POST">
            <div class="caja">
                <h1>Iniciar Sesión</h1>
                <div class="input">
                    <label for="inputnumero_id"> Número de Identificación:
                        <input type="text" id="inputnumero_id" class="entradas" name="id_person">
                    </label>
    
                    <label for="pass">Contraseña:
                        <input type="password" id="pass" class="entradas" name="pass">
                    </label>
                </div>
                
                <div class="olvidar">
                    <a href="#" id="olvidar">¿Olvidó su contraseña?</a>
                </div>

                <button name="login_btn" class="buttons" id="btn" type="submit">Ingresar</button>

                <a href="">
                    <i class="fa-solid fa-circle-left fa-3x"></i>
                </a>
            </div>
        </form>
        <div class="login_registro">
            <div class="caja">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                    <h2>KAWASAKI</h2>
                </div>
                <h3>Bienvenido</h3>
                <p>¿No está registrado?</p>
                <button class="buttons" id="btn" data-toggle="modal"
                data-target="#registerModal" type="button">Registrarse</button>
            </div>

            <div class="oscuro">
                <div id="container">
                    <div class="toggle" id="toggle"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal registro-->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registro de usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="back/register.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputnombres">Nombres</label>
                                <input type="text" class="form-control" name="names" id="inputnombres"
                                    placeholder="Digite sus nombres" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputapellidos">Apellidos</label>
                                <input type="text" class="form-control" name="lastname" id="inputapellidos"
                                    placeholder="Digite sus Apellidos" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputnumero_id">Número de Identificación (usuario)</label>
                                <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputModelo">Modelo de la Moto</label>
                                <input type="number" class="form-control" name="modelo_moto" id="inputModelo" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLinea">Linea de la moto</label>
                                <input type="text" class="form-control" name="linea_moto" id="inputLinea" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputplaca">Placa</label>
                                <input type="text" class="form-control" name="placa" id="inputplaca" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputmotor">Número del motor</label>
                                <input type="text" class="form-control" name="numero_motor" id="inputmotor" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputemail">Correo Electrónico</label>
                                <input type="email" class="form-control" name="email" id="inputemail" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputcontra">Contraseña</label>
                                <input type="password" class="form-control" name="pass" id="inputcontra" required>
                            </div>
                        </div>
                        <button name="register_btn" type="submit" class="btn_register">Registrate</button>
                        <button type="reset" class="btn_register">Limpiar</button>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Registrarse</button>
                </div> -->
            </div>
        </div>
    </div>

    <script src="js/toggle.js"></script>

    
</body>

</html>