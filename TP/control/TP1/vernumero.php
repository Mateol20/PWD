<?php
function verNumero($numero) {
    $valor="";
    if (is_numeric($numero)) { // Verificar si es un número
        
        if ($numero > 0) {
        $valor = "El número es positivo.";
        } elseif ($numero < 0) {
            $valor = "El número es negativo.";
        } else {
            $valor = "El número es cero.";
        }
    } else {
        $valor = "No es un número válido.";
    }
    return $valor;
}

// Llamar a la función con isset
$salida = "";
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    $salida = verNumero($numero);
    echo "<h1>Resultado:</h1>";
    echo "<p>$salida</p>";
    echo '<a href="numero.html">Volver</a>';
    
}else {
    echo "Por favor, ingrese un número";
}