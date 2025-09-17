<!-- Ejercicio 2 
Crear una página php que contenga un formulario HTML que permita ingresar las horas 
de  cursada,  de  la  materia  Programación  Web  Dinámica,  por  cada  día  de  la  semana. 
Enviar  los  datos  del  formulario  por  el  método  Get  a  otra  página  php  que  los  reciba  y 
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
se cursan por semana.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_header.css" />
    <link rel="stylesheet" href="../css/style_footer.css" />
    <title>Ejercicio 2</title>
</head>

<body>

    <?php
    echo "<main>";
    echo '<form action="./accion/formAccion_EJ2.php" method="get">';
    echo '<h3>Horas cursadas por día</h3>';
    echo '<label for="lunes">Lunes:</label>';
    echo '<input type="number" id="lunes_horas" name="lunes_horas" min="0" value="0"> horas';
    echo '<input type="number" id="lunes_minutos" name="lunes_minutos" min="0" max="59" value="0"> minutos<br><br>';
    echo '<label for="martes">Martes:</label>';
    echo '<input type="number" id="martes_horas" name="martes_horas" min="0" value="0"> horas';
    echo '<input type="number" id="martes_minutos" name="martes_minutos" min="0" max="59" value="0"> minutos<br><br>';
    echo '<label for="miercoles">Miércoles:</label>';
    echo '<input type="number" id="miercoles_horas" name="miercoles_horas" min="0" value="0"> horas';
    echo '<input type="number" id="miercoles_minutos" name="miercoles_minutos" min="0" max="59" value="0"> minutos<br><br>';
    echo '<label for="jueves">Jueves:</label>';
    echo '<input type="number" id="jueves_horas" name="jueves_horas" min="0" value="0"> horas';
    echo '<input type="number" id="jueves_minutos" name="jueves_minutos" min="0" max="59" value="0"> minutos<br><br>';
    echo '<label for="viernes">Viernes:</label>';
    echo '<input type="number" id="viernes_horas" name="viernes_horas" min="0" value="0"> horas';
    echo '<input type="number" id="viernes_minutos" name="viernes_minutos" min="0" max="59" value="0"> minutos<br><br>';
    echo '<button type="submit">Enviar</button><br><br>';
    echo '</form>';
    echo "</main>";
    ?>
    <script src="../js/cargarFyH.js"></script>
</body>

</html>