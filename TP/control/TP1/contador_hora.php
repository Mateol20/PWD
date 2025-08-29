<?php
// Ejercicio 2 
// Crear una página php que contenga un formulario HTML que permita ingresar las horas 
// de  cursada,  de  la  materia  Programación  Web  Dinámica,  por  cada  día  de  la  semana. 
// Enviar  los  datos  del  formulario  por  el  método  Get  a  otra  página  php  que  los  reciba  y 
// complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
// se cursan por semana.
$horas = array();
$totalMinutos = 0;
$dias = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes'];
foreach ($dias as $dia) {
    if (isset($_GET[$dia . '_horas'])) // $dia traeria el nombre del dia y lo conctena con _horas que es el id del input
        {
        $horas = (int)$_GET[$dia . '_horas'];
        $minutos = (int)$_GET[$dia . '_minutos'];
        $totalMinutos += ($horas * 60) + $minutos;
    }
}
$totalHoras = floor($totalMinutos / 60);
$minutosRestantes = $totalMinutos % 60;



if(isset($totalHoras)){

    header("Location: ../../vista/TP1/resultado_ej2.php?totalHoras=" . urlencode($totalHoras). "&minutosRestantes=" . urlencode($minutosRestantes));
}
else{
    header("Location: ../..control/contador_hora.php");
}

?>
