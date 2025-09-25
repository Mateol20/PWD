<?php
// Incluimos el archivo de configuración. Esto cargará el autoloader y la clase Auto automáticamente.
require_once '../configuracion.php';

echo "Probando la inserción de un nuevo auto";

// 1. Creamos una nueva instancia de la clase Auto con datos de prueba.
$miAuto = new Auto();
$miAuto->setDato(
    'ASD 123',
    'Ford Fiesta',
    2015,
    '45678901'
);
// Llamamos al método 'insertar' para guardar el auto en la base de datos.
if ($miAuto->insertar()) {
    echo "Inserción exitosa Se agrego el auto con patente" . $miAuto->getPatente();
} else {
    // Si falla, mostramos el mensaje de error.
    echo "Error en la inserción del auto";
    echo "<p>Mensaje de error: " . $miAuto->getMensajeError() . "</p>";
}

// . Seteamos los nuevos valores que queremos para el auto.
$miAuto->setMarca('Fiat Palio Nuevo');
//  Llamamos al método 'modificar' para actualizar los datos en la base de datos.
if ($miAuto->modificar()) {
    echo "Modificación exitosa Se actualizó el auto con patente " . $miAuto->getPatente();
} else {
    echo " ¡Error en la modificación del auto";
    echo "Mensaje de error: " . $miAuto->getMensajeError();
}

//  Eliminamos un auto donde coincida la patente
$miAuto->setPatente('ASD 123');
//  Llamamos al método 'modificar' para actualizar los datos en la base de datos.
if ($miAuto->eliminar()) {
    echo "se elimino de forma exitosa el auto con patente " . $miAuto->getPatente();
} else {
    echo " ¡Error ";
    echo "Mensaje de error: " . $miAuto->getMensajeError();
}
