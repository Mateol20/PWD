<!-- Ejercicio 5 
Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no  tiene  estudios,  2-
estudios  primarios,  3-estudios  secundarios.  Agregar  el  componente  que  crea más 
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
un mensaje que indique el tipo de estudios que posee y su sexo. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style2.css" />
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    echo '<form action="../../control/TP1/control_EJ5.php" method="post">';
    echo '  <h1>Formulario de Registro</h1>';
    echo '  <label for="nombre">Nombre:</label>';
    echo '  <input type="text" id="nombre" name="nombre" required /><br /><br />';
    echo '  <label for="apellido">Apellido:</label>';
    echo '  <input type="text" id="apellido" name="apellido" required /><br /><br />';
    echo '  <label for="edad">Edad:</label>';
    echo '  <input type="number" id="edad" name="edad" required /><br /><br />';
    echo '  <label for="direccion">Dirección:</label>';
    echo '  <input type="text" id="direccion" name="direccion" required /><br /><br />';
    echo '  <fieldset class="nivel_estudios">';
    echo '    <legend>Nivel de Estudios:</legend>';
    echo '    <label>';
    echo '      <input type="radio" name="nivel_estudios" value="No tiene estudios" required />';
    echo '      No tiene estudios</label><br />';
    echo '    <label>';
    echo '      <input type="radio" name="nivel_estudios" value="Estudios primarios" />';
    echo '      Estudios primarios</label><br />';
    echo '    <label>';
    echo '      <input type="radio" name="nivel_estudios" value="Estudios secundarios" />';
    echo '      Estudios secundarios';
    echo '    </label>';
    echo '  </fieldset>';
    echo '  <br>';
    echo '  <fieldset>';
    echo '    <label for="sexo">Sexo:</label>';
    echo '    <select name="sexo" id="sexo" required>';
    echo '      <option value="Masculino">Masculino</option>';
    echo '      <option value="Femenino">Femenino</option>';
    echo '      <option value="Otro">Otro</option>';
    echo '    </select>';
    echo '  </fieldset>';
    echo '  <input type="submit" value="Enviar" />';
    echo '</form>';
    ?>
    </body>
</html>
