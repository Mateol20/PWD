<!-- Diseñar un 
formulario que solicite la edad y permita ingresar si se trata de un  estudiante o no. Con 
un  botón  enviar  los  datos  a  un  script  encargado  de  realizar  el  cálculo  y  visualizarlo.  
Agregar un botón para limpiar el formulario y volver a consultar -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style3.css">
    <title>Cine Cinem</title>
  </head>
  <body>
    <?php
    echo <<<HTML
    <form
      action="../../control/TP1/cine_EJ8.php"
      method="post"
    >
      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad" required />
      <br />
      <label for="estudiante">¿Eres estudiante?</label>
      <select id="estudiante" name="estudiante" required>
        <option value="si">Sí</option>
        <option value="no" selected>No</option>
      </select>
      <br />
      <button type="submit">Enviar</button>
      <button type="reset">Limpiar</button>
    HTML;
    ?>
    </form>
  </body>
</html>
