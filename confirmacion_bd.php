<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h6><a href="bienvenida_db.html">Inicio</a></h6> -->
    <h1>Confirmación</h1>
<?php
    include ("conexion_bd.php");
    //evita caracteres especiales (peligrosos), los sustituye por su equivalente ASCII
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);

    //Query
    $sql="INSERT INTO registro (nombre, apellido, edad)
      VALUES ('$nombre', '$apellido', '$edad');";

    //Ejecución de Query
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con)); //muere la conexión
    } //si logró introducir el registro:
    echo "<p>Registro completado</p>";

    mysqli_close($con);
  ?>
      <p><a href="registro_bd.html">Regresar al inicio</a></p>
</body>
</html>