<?php
// Validar que los datos del formulario existen.
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['direccion']) && isset($_POST['nivel_estudios']) && isset($_POST['sexo'])) {

    // Asignar los datos del formulario a variables para usarlos en la vista.
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $edad = htmlspecialchars($_POST['edad']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $estudios = htmlspecialchars($_POST['nivel_estudios']);
    $sexo = htmlspecialchars($_POST['sexo']);

    // Lógica para determinar si es mayor de edad.
    if ($edad >= 18) {
        $mensaje_edad = "Es mayor de edad";
    } else {
        $mensaje_edad = "Es menor de edad";
    }

    // Incluir el archivo de la vista.
    include '../../vista/TP1/vista_EJ5.php';
}
