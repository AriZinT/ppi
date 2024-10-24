<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aproximación de Pi:</title>
    <link rel="stylesheet" href="p7_estilo.css">
</head>
<body>
    <h2>Registro Realizado.</h2>
    <p class="linea"></p>
    <h4>Gracias por enviar su valor de n.</h4>

    <?php
        $aprox_pi = 0;
        $n = $_POST["numero"];
        if($n > 0){
            echo "<p> n = " . $n . "</p>";

            echo '<table id="tabla">
                    <tr>
                        <th>Iteración (n)</th>
                        <th>Aproximación de Pi </th>
                    </tr>';

            for ($i = 0; $i < $n; $i++) {
                $termino_sumat = pow(-1, $i) / (2 * $i + 1); //aquí calculo el termino para cada la iteración actual
                $suma += $termino_sumat; //hago la sumatoria (suma los términos para cada n)
                $x = 4 * $suma; //multiplico el resultado de la sumatoria por 4
            
                echo "<tr>
                        <td>" . $i + 1 . "</td> 
                        <td>" . $x . "</td>
                    </tr>";
            } //si no le sumo 1, imprime iteraciones desde 0 (prefiero que la 0 la marque como 1)
            echo "</table>"; //cierra la tablita
        } else { //Si n es 0:
        echo "<p> Por favor, ingrese un valor mayor que 0. </p>";
    }
    ?>

</body>
</html>