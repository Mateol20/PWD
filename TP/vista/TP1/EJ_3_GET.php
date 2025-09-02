<!-- Crear  una  página  php  que  contenga  un  formulario  HTML  como  el  que  se  indica  en  la 
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php 
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida. 
Cambiar el método Post por Get y analizar las diferencias  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Pagina recibe POST</title>
</head>

<body>
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];

    echo "Hola, yo soy $nombre, $apellido tengo $edad años y vivo en $direccion. Estos datos se recibieron por POST";
    // echo <<<Nombre de etiqueta, para no escribir echo en cada linea, agrupamos con 1 etiqueta
    echo <<<HTML
    <form action="EJ_3_POST.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required min="0" max="120">
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" required>
        <input type="submit" value="Enviar">
    </form>
HTML;
    ?>
</body>

</html>