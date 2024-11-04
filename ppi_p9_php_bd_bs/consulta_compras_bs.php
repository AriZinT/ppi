<!-- antes ocurre la conexión -->
<?php
  
    include ("conexion_autos_bs.php");
    //Query
    $sql="SELECT compra.id AS id_compra, modelo.nombre AS nombre_modelo, usuarios.nombre AS nombre_usuario, compra.folio 
    FROM compra JOIN modelo ON compra.idModelo = modelo.id JOIN 
    usuarios ON compra.idUsuario = usuarios.id;"; //checar primero en la BD que funciona el query antes de escribirlo
    $result = mysqli_query($con,$sql);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
    <div class="container p-5 my-5 bg-primary text-white">
        <h1>Sistema de control de ventas de autos</h1>
        <div class="btn-group">
                <button type="button" class="btn btn-light"><a href="bienvenida_autos_bs.html">Regresar al Inicio</a></button> <br><br>
                <button type="button" class="btn btn-light"><a href="registro_usuarios_bs.html">Registrar Usuarios</a></button><!--Enlace disfrazado de botón-->
                <button type="button" class="btn btn-light"><a href="consulta_usuarios_bs.php">Consultar usuarios</a></button>
        </div>
        <br><br><br>
        <h2>Lista de Compras</h2>
        <p>A continuación se listan las compras realizadas</p>
    </div>
    <div class="container">
        <table class="table table-striped" id="tabla">
            <tr>
                <th>Id de compra</th>
                <th>Nombre de modelo</th>
                <th>Nombre de Usuario</th>
                <th>Folio</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_compra'] . "</td>";
                    echo "<td>" . $row['nombre_modelo'] . "</td>";
                    echo "<td>" . $row['nombre_usuario'] . "</td>";
                    echo "<td>" . $row['folio'] . "</td>";
                    echo "</tr>";
                  }
            ?>
        </table>
    </div>
</body>
</html>