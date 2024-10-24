<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="p8_estilo.css">
</head>
<body>
    <!-- <h6><a href="bienvenida_db.html">Inicio</a></h6> -->
    <h2>Confirmación de Registro</h2>
    <p class="linea"></p>
<?php
    include ("conexion_autos.php");
    //evita caracteres especiales (peligrosos), los sustituye por su equivalente ASCII
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);

    //Query
    $sql="INSERT INTO usuarios (nombre)
      VALUES ('$nombre');";

    //Ejecución de Query
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con)); //muere la conexión
    } //si logró introducir el registro:
    echo "<p>Registro completado</p>";

    mysqli_close($con);
  ?>
      <p><a href="bienvenida_autos.html">Regresar al inicio</a></p>
</body>
</html>