<?php
    $con=mysqli_connect("localhost","root","","miniSistema");

    // Validar la conexión
    if (mysqli_connect_errno()) {
      echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
    }
?>