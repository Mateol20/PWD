<?php
// Validar que los datos del formulario existen.

include '../encapsular.php';
// Asignar los datos del formulario a variables para usarlos en la vista.
$nombre = obtenerDato('nombre');
$apellido = obtenerDato('apellido');
$edad = obtenerDato('edad');
$direccion = obtenerDato('direccion');
$estudios = obtenerDato('nivel_estudios');
$sexo = obtenerDato('sexo');

// Lógica para determinar si es mayor de edad.
if ($edad >= 18) {
    $mensaje_edad = "Es mayor de edad";
} else {
    $mensaje_edad = "Es menor de edad";
}

// Incluir el archivo de la vista.
include '../../vista/TP1/vista_EJ5.php';
