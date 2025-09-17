<?php
class ComprobarNumero
{
    public function comprobar($dato)
    {
        $numero = $dato["numero"];
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
}
