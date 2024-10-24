<!-- antes ocurre la conexión -->
<?php
  
    include ("conexion_autos.php");
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
    <style>
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
            margin: auto;
        }
        a{
            text-decoration: none;
            color: rgb(32, 29, 48);
        }
    </style>
    <link rel="stylesheet" href="p8_estilo.css">
</head>
<body>
    <button><a href="bienvenida_autos.html">Inicio</a></button> <br><br>
    <h2>Lista de Compras</h2>
    <p class="texto">A continuación se listan las compras realizadas</p>
    <p class="linea"></p>
    <table id="tabla">
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
</body>
</html>