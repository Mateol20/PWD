<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ejercicio 6</title>
</head>
<body>

<?php

echo "<form method='POST' action='../../control/TP1/control_EJ6.php'>";
echo "    <label for='nombre'>Nombre: </label> ";
echo "    <input type='text' name='nombre' id='nombre'>";
echo "    <br/>";
echo "    <label for='apellido'>Apellido: </label>";
echo "    <input type='text' id='apellido' name='apellido'>";
echo "    <br/>";
echo "    <label for='edad'>Edad: </label>";
echo "    <input type='text' name='edad' id='edad'>";
echo "    <br/><br/>";
echo "    <fieldset>";
echo "        <legend>Nivel de Estudios:</legend>";
echo "        <input type='radio' id='sinEstudios' name='estudios' value='Sin Estudios'>";
echo "        <label for='sinEstudios'>Sin Estudios</label>";
echo "        <br/>";
echo "        <input type='radio' id='primario' name='estudios' value='Nivel Primario'>";
echo "        <label for='primario'>Nivel Primario</label>";
echo "        <br/>";
echo "        <input type='radio' id='secundario' name='estudios' value='Nivel Secundario'>";
echo "        <label for='secundario'>Nivel Secundario</label>";
echo "    </fieldset>";
echo "    <br/>";
echo "    <label for='sexo'>Sexo: </label>";
echo "    <select name='sexo' id='sexo'>";
echo "        <option value=''>Seleccionar sexo</option>";
echo "        <option value='Masculino'>Masculino</option>";
echo "        <option value='Femenino'>Femenino</option>";
echo "        <option value='x'>Otros</option>";
echo "    </select>";
echo "    <br/><br/>";
echo "    <fieldset>";
echo "        <legend>Deportes que practicas:</legend>";
echo "        <label>";
echo "            <input type='checkbox' name='deportes[]' value='Futbol'> Futbol";
echo "        </label><br>";
echo "        <label>";
echo "            <input type='checkbox' name='deportes[]' value='Basket'> Basket";
echo "        </label><br>";
echo "        <label>";
echo "            <input type='checkbox' name='deportes[]' value='Tennis'> Tennis";
echo "        </label><br>";
echo "        <label>";
echo "            <input type='checkbox' name='deportes[]' value='Voley'> Voley";
echo "        </label><br>";
echo "        <label>";
echo "            <input type='checkbox' name='deportes[]' value='Ninguno'> Ninguno";
echo "        </label><br>";
echo "    </fieldset>";
echo "    <input type='submit' value='Enviar' />";
echo "</form>";

?>
    
</body>
</html>