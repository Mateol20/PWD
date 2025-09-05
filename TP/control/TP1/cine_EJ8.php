
<?php
// La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
// función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
// clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
// es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
// de 12 años el precio es de $180, en cualquier otro caso el precio es de $300.


include_once '../encapsular.php';
$mensaje = "";
$edad = intval(obtenerDato('edad'));
$es_estudiante = obtenerDato('estudiante');
if ($es_estudiante === 'si' && $edad >= 12) {
    $precio = 180;
} elseif ($edad < 12 || $es_estudiante === 'si') {
    $precio = 160;
} else {
    $precio = 300;
}

$mensaje = "El precio de la entrada es: $" . $precio;
include '../../vista/TP1/vista_EJ8.php';
