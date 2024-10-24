<!-- antes ocurre la conexión -->
<?php
  
    include ("conexion_bd.php");
    //Query
    $sql="SELECT * FROM registro;"; //checar primero en la BD que funciona el query antes de escribirlo
    $result = mysqli_query($con,$sql);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <h6><a href="bienvenida_db.html">Inicio</a></h6>
    <h1>Consulta de usuarios</h1>
    <p>A continuación se listan usuarios en una tabla HTML</p>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "</tr>";
              }
        ?>
    </table>
</body>
</html>