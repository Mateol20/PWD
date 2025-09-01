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
    <title>EJERCICIO 3</title>
</head>
<body>
    <?php
        //introducir css
        if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $direccion = $_GET['direccion'];
        $edad = $_GET['edad'];
        echo "<div class='mensaje'>
        Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion." . "Estos datos se reciben por GET
        </div>";
            } else {
        echo "<p>No se recibieron datos del metodo GET.</p>";

    }
    ?>
    <form action="EJ_3_GET.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required> <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required> <br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required min="0" max="120"> <br>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion" required>
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>