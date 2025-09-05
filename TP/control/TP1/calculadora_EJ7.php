<?php
include_once '../encapsular.php';

$num1 = obtenerDato('numero1');
$num2 = obtenerDato('numero2');
$operacion = obtenerDato('operacion');
$resultado = '';

switch ($operacion) {
    case 'suma':
        $resultado = $num1 + $num2;
        break;
    case 'resta':
        $resultado = $num1 - $num2;
        break;
    case 'multiplicar':
        $resultado = $num1 * $num2;
        break;
    case 'dividir':
        if ($num2 == 0) {
            $resultado = 'Error: División por cero no permitida.';
        } else {
            $resultado = $num1 / $num2;
        }
        break;
    default:
        $resultado = 'Operación no válida.';
}

include '../../vista/TP1/vista_EJ7.php';
