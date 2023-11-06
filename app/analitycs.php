<?php
  
  session_start();
  include '../db/conexion.php';

  $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $linea_moto = $_SESSION['linea_moto'];
    $usuario = $_SESSION['id_person'];
  
  $query_consulta = mysqli_query($conexion, "SELECT * FROM registro_moto WHERE id_person = $usuario");

  $inc = 0;
  while($consult = mysqli_fetch_array($query_consulta)){
    $id_category[$inc] = $consult['motivo_mantenimiento'];
    $array_value[$inc] = $consult['valor_mantenimiento'];

    $consultica2 = mysqli_query($conexion, "SELECT * FROM registro_moto WHERE id_person = $usuario");
    while($consult2 =mysqli_fetch_array($consultica2)){
      $name_c[$inc] = $consult2['motivo_mantenimiento'];
    }
  $inc++;
  }

  // Mapeo de valores
  $category_mapping = array(
    1 => 'Cambio de aceite',
    2 => 'Llantas',
    3 => 'Cambio de frenos',
    4 => 'Filtro de aceite',
    5 => 'Compra de accesorio',
    6 => 'Compra de repuesto',
    // Agrega más mapeos según sea necesario
  );

  $datosY = json_encode($array_value);
  $datosX = json_encode($id_category);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app-styles/menu.css">
    <script src="https://kit.fontawesome.com/1f200e95d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/app-styles/analytics.css">
    <link rel="icon" href="../img/logo2.png">

    <script src="https://cdn.plot.ly/plotly-2.27.0.min.js" charset="utf-8"></script>
    <title>Analitycs</title>
</head>
<body>
    <menu-main></menu-main>

    <section>

        <h1>Gastos generados por mes</h1>

        <div id="myDiv">

        </div>

        <script>
        function crearArreglo(json){
          var parsed = JSON.parse(json);
          var arr = [];
          for(var x in parsed) {
            arr.push(parsed[x]);
          }
          return arr;
        }
     </script>

     <script>

        var idCategoryMapping = <?php echo json_encode($category_mapping); ?>;
        var datosX = crearArreglo('<?php echo $datosX ?>');
        var datosY = crearArreglo('<?php echo $datosY ?>');

        // Mapeo de valores en datosX
        datosX = datosX.map(function (id) {
            return idCategoryMapping[id];
        });

        var trace1 = {
          x: datosX,
          y: datosY,
          name: 'SF Zoo',
          type: 'bar'
        };

        var data = [trace1];

        var layout = {barmode: 'group'};

        Plotly.newPlot('myDiv', data, layout);

     </script>

    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/app_menu.js"></script>
</body>
</html>