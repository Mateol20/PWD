<?php
include_once '../encapsular.php';
$titulo = obtenerDato('titulo');
$director = obtenerDato('director');
$actores = obtenerDato('actores');
$guion = obtenerDato('guion');
$produccion = obtenerDato('produccion');
$anio = obtenerDato('anio');
$nacionalidad = obtenerDato('nacionalidad');
$genero = obtenerDato('genero');
$duracion = obtenerDato('duracion');
$restriccionDeEdad = obtenerDato('rest_edad');
$mensaje = "<label for='tituloPag' id='tituloPag'>La pelicula introducida es</label><br/><br/>"
    . "<label for='titulo'>Título:</label> " . $titulo . "<br/>"
    . "<label for='director'>Director:</label> " . $director . "<br/>"
    . "<label for='actores'>Actores:</label> " . $actores . "<br/>"
    . "<label for='guion'>Guion:</label> " . $guion . "<br/>"
    . "<label for='produccion'>Producción:</label> " . $produccion . "<br/>"
    . "<label for='anio'>Año:</label> " . $anio . "<br/>"
    . "<label for='nacionalidad'>Nacionalidad:</label> " . $nacionalidad . "<br/>"
    . "<label for='genero'>Género:</label> " . $genero . "<br/>"
    . "<label for='duracion'>Duración:</label> " . $duracion . "<br/>"
    . "<label for='restriccionDeEdad'>Restricción de edad:</label> " . $restriccionDeEdad . "<br/>";
include '../../vista/TP2/vista_EJ4.php';
