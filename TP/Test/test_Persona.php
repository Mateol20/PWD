<?php

require_once '../configuracion.php';

echo "<h2>Probando la inserción de una nueva persona</h2>";

// . Crear una nueva instancia de la clase Persona con los datos a insertar.
$nuevaPersona = new persona(
    '45678901', // NroDni
    'Gómez',    // Apellido
    'Ana',      // Nombre
    '1995-05-20', // fechaNac
    '299-1234567', // Telefono
    'Calle Falsa 123' // Domicilio
);
// $nuevaPersona2 = new persona(
//     '3002002', // NroDni
//     'raton',    // Apellido
//     'cojon',      // Nombre
//     '1995-05-20', // fechaNac
//     '299-1234567', // Telefono
//     'Calle Falsa 123' // Domicilio
// );
// 2. Llamar al método 'insertar' del objeto.
$resultado = $nuevaPersona->insertar();

// Verificar el resultado de la operación.
if ($resultado) {
    echo "<p style='color:green;'> ¡Inserción exitosa! Se agregó a " . $nuevaPersona->getNombre() . " " . $nuevaPersona->getApellido() . " a la base de datos.</p>";
} else {
    //  obtenemos el mensaje de error
    echo "<p style='color:red;'> ¡Error en la inserción!</p>";
    echo "<p>Mensaje de error: " . $nuevaPersona->getMensajeError() . "</p>";
}

// echo "<br><h2>Probando una inserción fallida (DNI duplicado)</h2>";
// $otraPersona = new Persona(
//     '45678901', // Mismo DNI para causar un error
//     'Pérez',
//     'Juan',
//     '1980-01-01',
//     '11-987654321',
//     'Avenida Siempre Viva 742'
// );
