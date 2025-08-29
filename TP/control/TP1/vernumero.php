<?php
function verNumero($numero)
{
    $valor = "";
    if (is_numeric($numero)) {
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
$salida = "";
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    $salida = verNumero($numero);

    // Redirecciona a la vista, pasando el mensaje por la URL
    header("Location: ../../vista/TP1/resultado_ej1.php?salida=" . urlencode($salida));
    exit();
} else {
    header("Location: ../../vista/TP1/EJ_1.html");
    exit();
}
