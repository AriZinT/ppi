<!DOCTYPE HTML>
  <html>
    <head>
      <title>Validación de Formulario en PHP</title>
      <meta charset="utf-8">
    </head>
    <body>
      <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        //condicionar que sea una comunicación a través de post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]); //el post de name lo guardo en name pero lo paso a test_input
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }
        //funcion test input: limpia la entrada del formulario, quita caracteres peligrosos
        //para evitar inyeccion de código
        function test_input($data) {
          $data = trim($data); //"recortar" quita espacio
          $data = stripslashes($data); //quita slashes/diagonales y agrega caracter de escapes
          $data = htmlspecialchars($data); //sustituye los specialchars a su ASCII para que no ejecuten
          return $data;
        }
      ?>
      <h2>Ejemplo de validación de Formularios con PHP</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- después del submit, se dirige a si mismo, despues de limpiarlo (en la URL)-->
        Nombre: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Sitio Web: <input type="text" name="website">
        <br><br>
        Comentarios: <textarea name="comment" rows="5" cols="40"></textarea> <!--como un textbox-->
        <br><br>
        Género:
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
        echo "<h2>Usted Ingresó:</h2>";
        echo "<p>" . $name . "</p>";        
        echo "<p>" . $email . "</p>";
        echo "<p>" . $website . "</p>";
        echo "<p>" . $comment . "</p>";
        echo "<p>" . $gender . "</p>";
      ?>
    </body>
  </html>
      