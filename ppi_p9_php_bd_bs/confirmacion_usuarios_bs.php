<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
  <div class='container p-5'>
    <div class='p-5 m-5 border bg-primary text-white'> 
      <?php
      include ("conexion_autos_bs.php");
      //evita caracteres especiales (peligrosos), los sustituye por su equivalente ASCII
      $nombre = mysqli_real_escape_string($con, $_POST['nombre']);

      //Query
      $sql="INSERT INTO usuarios (nombre)
        VALUES ('$nombre');";

      //Ejecución de Query
      if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con)); //muere la conexión
      } //si logró introducir el registro:
      echo "<h2>Gracias por su registro</h2>
      <p>RSu registro de usuario ha sido completado exitosamente</p>";

      mysqli_close($con);
      ?>
      <div class="btn-group">
            <button type="button" class="btn btn-light"><a href="bienvenida_autos_bs.html">Regresar al Inicio</a></button> <br><br>
            <button type="button" class="btn btn-light"><a href="registro_usuarios_bs.html">Registrar Usuarios</a></button><!--Enlace disfrazado de botón-->
            <button type="button" class="btn btn-light"><a href="consulta_compras_bs.php">Consultar compras</a></button>
            <button type="button" class="btn btn-light"><a href="consulta_usuarios_bs.php">Consultar usuarios</a></button>
      </div>
    </div>
  </div>
</body>
</html>