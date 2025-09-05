<?php
include_once '../encapsular.php';
$directorio_subida = '../../util/TP3';
$nombre_archivo = basename($_FILES['archivo']['name']);
$ruta_completa = $directorio_subida . $nombre_archivo;

if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_completa)) {

    $titulo = obtenerDato('titulo');
    $director = obtenerDato('director');
    $actores = obtenerDato('actores');
    $guion = obtenerDato('guion');
    $produccion = obtenerDato('produccion');
    $anio = obtenerDato('anio');
    $nacionalidad = obtenerDato('nacionalidad');
    $duracion = obtenerDato('duracion');
    $restriccionEdad = obtenerDato('restriccionEdad');
    $genero = obtenerDato('genero');
    $sinopsis = obtenerDato('sinopsis');
    $mensaje = "<h2>Datos de la película</h2>"
        . "<p><b>Título:</b> " . $titulo . "</p>"
        . "<p><b>Actores:</b> " . $actores . "</p>"
        . "<p><b>Director:</b> " . $director . "</p>"
        . "<p><b>Guión:</b> " . $guion . "</p>"
        . "<p><b>Producción:</b> " . $produccion . "</p>"
        . "<p><b>Año:</b> " . $anio . "</p>"
        . "<p><b>Nacionalidad:</b> " . $nacionalidad . "</p>"
        . "<p><b>Duración:</b> " . $duracion . " min</p>"
        . "<p><b>Restricción de edad:</b> " . $restriccionEdad . "</p>"
        . "<p><b>Género:</b> " . $genero . "</p>"
        . "<p><b>Sinopsis:</b> " . $sinopsis . "</p>";
    $imagen = "<p><b>Imagen subida:</b></p>" .
        "<img src='{$ruta_completa}' alt='Imagen de la película' style='max-width:300px;'>";
    include '../../vista/TP3/vista_EJ3.php';
}
