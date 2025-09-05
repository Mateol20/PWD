<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../css/style_header.css" />
  <link rel="stylesheet" href="../css/style_footer.css" />

  <title>EJERCICIO 1-TP1</title>
</head>

<body>
  <main>
    <?php
    echo <<< HTML
    <form action="../../control/TP1/vernumero_EJ1.php" method="get">
      <label for="numero">Ingrese un numero:</label>
      <input
        type="number"
        id="numero"
        name="numero"
        required
        min="-100"
        max="100" />

      <button type="submit">Enviar</button>

    </form>
  </main>
HTML;
    ?>
    <script src="../js/cargarFyH.js"></script>
</body>

</html>