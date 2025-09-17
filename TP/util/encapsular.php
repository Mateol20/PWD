<?php
// Encapsulador "seguro"

function obtenerDato()
{
    // Con array_merge fusiono todas las posibles formas que en las que llegue los datos
    // y las devuelvo en un solo array, esto implica que para acceder a los datos se debe hacer como un arreglo
    $datos = array_merge($_GET, $_POST, $_FILES);
    return $datos;
}
