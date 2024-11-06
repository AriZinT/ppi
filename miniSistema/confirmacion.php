<?php
include("conexion.php");
$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
$correo = mysqli_real_escape_string($con, $_POST["correo"]);
$edad = mysqli_real_escape_string($con, $_POST["edad"]);
$query = "INSERT INTO usuarios (nombre, correo, edad) VALUES ('$nombre', '$correo', '$edad')";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Contenedor principal de BS5-->
    <div class="container-fluid">
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.html">
                            <img src="logo_insatagram.jpg.png" alt="Instagram Logo" style="width: 40px;" class="rounded-pill">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="registro.html">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consulta.php">Consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Acerca de</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        if (!mysqli_query($con, $query)) {
            die('Error: ' . mysqli_error($con));
        }
        echo '<br><br><div class="alert alert-success alert-dismissible"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Éxito!</strong> Se registró correctamente</div>';
        mysqli_close($con);
        ?>
        <a href="index.html" class="btn btn-primary">Regresar a inicio</a>
    </div>

</body>

</html>