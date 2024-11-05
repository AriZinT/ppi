<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insatagram</title>
      <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
    <!-- Contenedor principal de BS5 -->
     <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li>
                    <a class="navbar-brand" href="index.html">
                        <img src="logo_insatagram.jpg.png" alt="Insatagram Logo" style="width:40px;" class="rounded-pill"> 
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.html">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="consulta.html">Consulta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="about.html">Acerca de</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
</body>
</html>