<?php
include '../encapsular.php';
$numero = obtenerDato('numero');


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
include '../../vista/TP1/vista_EJ1.php';
