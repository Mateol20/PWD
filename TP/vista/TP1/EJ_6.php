<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>

    <link rel="stylesheet" href="../css/style_header.css" />
    <link rel="stylesheet" href="../css/style_footer.css" />
    <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
    <?php
    echo "<main class='main-content'>";
    echo "<form method='POST' action='./accion/formAccion_EJ6.php'>";

    echo "    <div class='form-group'>";
    echo "        <label for='nombre'>Nombre: </label>";
    echo "        <input type='text' name='nombre' id='nombre'>";
    echo "    </div>";

    echo "    <div class='form-group'>";
    echo "        <label for='apellido'>Apellido: </label>";
    echo "        <input type='text' id='apellido' name='apellido'>";
    echo "    </div>";

    echo "    <div class='form-group'>";
    echo "        <label for='edad'>Edad: </label>";
    echo "        <input type='text' name='edad' id='edad'>";
    echo "    </div>";

    echo "    <div class='form-group'>";
    echo "        <label for='direccion'>Direccion: </label>";
    echo "        <input type='text' name='direccion' id='direccion'>";
    echo "    </div>";

    echo "    <fieldset>";
    echo "        <legend>Nivel de Estudios:</legend>";
    echo "        <label class='radio-label'>";
    echo "            <input type='radio' id='sinEstudios' name='estudios' value='Sin Estudios'>";
    echo "            Sin Estudios";
    echo "        </label>";
    echo "        <br/>";
    echo "        <label class='radio-label'>";
    echo "            <input type='radio' id='primario' name='estudios' value='Nivel Primario'>";
    echo "            Nivel Primario";
    echo "        </label>";
    echo "        <br/>";
    echo "        <label class='radio-label'>";
    echo "            <input type='radio' id='secundario' name='estudios' value='Nivel Secundario'>";
    echo "            Nivel Secundario";
    echo "        </label>";
    echo "    </fieldset>";
    echo "    <br/>";

    echo "    <div class='form-group'>";
    echo "        <label for='sexo'>Sexo: </label>";
    echo "        <select name='sexo' id='sexo'>";
    echo "            <option value=''>Seleccionar sexo</option>";
    echo "            <option value='Masculino'>Masculino</option>";
    echo "            <option value='Femenino'>Femenino</option>";
    echo "            <option value='x'>Otros</option>";
    echo "        </select>";
    echo "    </div><br/><br/>";

    echo "    <fieldset>";
    echo "        <legend>Deportes que practicas:</legend>";
    echo "        <label class='checkbox-label'>";
    echo "            <input type='checkbox' name='deportes[]' value='Futbol'> Futbol";
    echo "        </label><br>";
    echo "        <label class='checkbox-label'>";
    echo "            <input type='checkbox' name='deportes[]' value='Basket'> Basket";
    echo "        </label><br>";
    echo "        <label class='checkbox-label'>";
    echo "            <input type='checkbox' name='deportes[]' value='Tennis'> Tennis";
    echo "        </label><br>";
    echo "        <label class='checkbox-label'>";
    echo "            <input type='checkbox' name='deportes[]' value='Voley'> Voley";
    echo "        </label><br>";
    echo "        <label class='checkbox-label'>";
    echo "            <input type='checkbox' name='deportes[]' value='Ninguno'> Ninguno";
    echo "        </label><br>";
    echo "    </fieldset>";
    echo "    <input type='submit' value='Enviar' />";
    echo "<a href='../../index.html'>Volver al Inicio</a>";
    echo "</form>";
    echo "</main>";
    ?>
    <script src="../js/cargarFyH.js"></script>
</body>

</html>