<?php
class Calculadora
{
    public function calcular($dato)
    {
        $num1 = $dato["numero1"];
        $num2 = $dato["numero2"];
        $operacion = $dato["operacion"];
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
        return $resultado;
    }
}
