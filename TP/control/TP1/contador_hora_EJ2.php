<?php
// Ejercicio 2 
// Crear una página php que contenga un formulario HTML que permita ingresar las horas 
// de  cursada,  de  la  materia  Programación  Web  Dinámica,  por  cada  día  de  la  semana. 
// Enviar  los  datos  del  formulario  por  el  método  Get  a  otra  página  php  que  los  reciba  y 
// complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
// se cursan por semana.
class Hora
{
    public function contarHora($dato)
    {
        $horas = array();
        $totalMinutos = 0;
        $dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
        foreach ($dias as $dia) {
            // Obtener los valores de horas y minutos para cada día
            $horas = $dato[$dia . '_horas'];
            $minutos = $dato[$dia . '_minutos'];

            // Validar si los datos existen y son numéricos antes de sumar
            if (is_numeric($horas) && is_numeric($minutos)) {
                $totalMinutos += ($horas * 60) + $minutos;
            }
        }
        $totalHoras = floor($totalMinutos / 60);
        $minutosRestantes = $totalMinutos % 60;
        return "Total de horas cursadas por semana: " . $totalHoras . " horas y " . $minutosRestantes . " minutos.";
    }
}
