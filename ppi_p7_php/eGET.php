<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aproximación de e:</title>
    <link rel="stylesheet" href="p7_estilo.css">
</head>
<body>
    <h2>Registro Realizado.</h2>
    <p class="linea"></p>
    <h4>Gracias por enviar su valor de n.</h4>

    <?php
        //calcula factorial (enfoque iterativo)
        function factorial($num) {
            $resultado = 1;
            for ($i = 1; $i <= $num; $i++) {
                $resultado = $resultado * $i;
            }
            return $resultado;
        }

        $aprox_e = 0;
        $n = $_GET["numero"];
        
        //si n es mayor que cero, crea la tabla, si no, lanza error
        if ($n > 0) {
            echo "<p> n = " . $n . "</p>";
            echo '<table id="tabla">
                    <tr>
                        <th>Iteración (n)</th>
                        <th>Aproximación de e</th>
                    </tr>';

            for ($i = 0; $i < $n; $i++) {
                $termino_sumat = 1 / factorial($i);
                $aprox_e = $aprox_e + $termino_sumat;

                echo "<tr>
                        <td>" . $i + 1 . "</td> 
                        <td>" . $aprox_e . "</td>
                    </tr>";
            }
            echo "</table>"; //cierra la tablita
        } else { //Si n es 0:
            echo "<p> Por favor, ingrese un valor mayor que 0. </p>";
        }
    ?>

</body>
</html>
