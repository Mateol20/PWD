<?php

if (isset($_POST['numero1'], $_POST['numero2'], $_POST['operacion'])) {
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
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
} else {
    $resultado = 'Error: Datos del formulario no recibidos.';
}
include '../../vista/TP1/vista_EJ7.php';
