<?php
// Los datos del formulario son enviados a un script 
// verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El 
// arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
// de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
// y en caso contrario un mensaje de error. 
$usuarios = [
    ["usuario" => "user1", "clave" => "pass1"],
    ["usuario" => "user2", "clave" => "pass2"],
    ["usuario" => "user3", "clave" => "pass3"],
    ["usuario" => "admin", "clave" => "admin123"],
];
$usuarioIngresado = $_POST['username'];
$claveIngresada = $_POST['password'];
$autenticado = false;
foreach ($usuarios as $usuario) {
    if ($usuario['usuario'] === $usuarioIngresado && $usuario['clave'] === $claveIngresada) {
        $autenticado = true;
        break;
    }
}
if ($autenticado) {
    echo "<h1>Bienvenido, $usuarioIngresado!</h1>";
} else {
    echo "<h1>Error: Usuario o clave incorrectos.</h1>";
}
