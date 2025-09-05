<?php
// Los datos del formulario son enviados a un script 
// verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El 
// arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
// de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
// y en caso contrario un mensaje de error. 
include_once '../encapsular.php';
$usuarios = [
    ["usuario" => "user1", "clave" => "pass1"],
    ["usuario" => "user2", "clave" => "pass2"],
    ["usuario" => "user3", "clave" => "pass3"],
    ["usuario" => "admin", "clave" => "admin123"],
];
$usuarioIngresado = obtenerDato('username');
$claveIngresada = obtenerDato('password');
$autenticado = false;
foreach ($usuarios as $usuario) {
    if ($usuario['usuario'] === $usuarioIngresado && $usuario['clave'] === $claveIngresada) {
        $autenticado = true;
        break;
    }
}
if ($autenticado) {
    $mensaje = "Bienvenido, $usuarioIngresado";
} else {
    $mensaje = "Error: Usuario o clave incorrectos.";
}
include '../../vista/TP2/vista_EJ3.php';
