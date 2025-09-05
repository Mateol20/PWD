<?php
// Encapsulador "seguro"
function obtenerDato($clave)
{
    $data = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST[$clave])) {
        $data = $_POST[$clave];
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET[$clave])) {
        $data = $_GET[$clave];
    }

    if ($data !== null) {
        if (is_array($data)) {
            // Si es un array
            $data = array_map('htmlspecialchars', $data);
        } else {
            $data = htmlspecialchars($data);
        }
    }

    return $data;
}
