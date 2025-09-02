<?php
// Validar que los datos del formulario existen.
if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['edad']) && isset($_GET['direccion'])) {

    // Asignar los datos del formulario a variables para usarlos en la vista.
    $nombre = htmlspecialchars($_GET['nombre']);
    $apellido = htmlspecialchars($_GET['apellido']);
    $edad = htmlspecialchars($_GET['edad']);
    $direccion = htmlspecialchars($_GET['direccion']);

    // Lógica para determinar si es mayor de edad.
    if ($edad >= 18) {
        $mensaje_edad = "Es mayor de edad";
    } else {
        $mensaje_edad = "Es menor de edad";
    }

    // Incluir el archivo de la vista.
    include '../../vista/TP1/vista_ej4.php';
}
