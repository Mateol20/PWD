<?php
class Cine{
    private $titulo;
    private $director;
    private $actores;
    private $guion;
    private $produccion;
    private $anio;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccionDeEdad;

    public function __construct($dato){
        $this->titulo = $dato["titulo"];
        $this->director = $dato['director'];
        $this->actores = $dato['actores'];
        $this->guion = $dato['guion'];
        $this->produccion = $dato['produccion'];
        $this->anio = $dato['anio'];
        $this->nacionalidad = $dato['nacionalidad'];
        $this->genero = $dato['genero'];
        $this->duracion = $dato['duracion'];
        $this->restriccionDeEdad = $dato['rest_edad'];
    }
    public function mensajeCine(){
        $mensaje = "";
        $mensaje = "<label for='tituloPag' id='tituloPag'>La pelicula introducida es</label><br/><br/>"
        . "<label for='titulo'>Título:</label> " . $this->titulo . "<br/>"
        . "<label for='director'>Director:</label> " . $this->director . "<br/>"
        . "<label for='actores'>Actores:</label> " . $this->actores . "<br/>"
        . "<label for='guion'>Guion:</label> " . $this->guion . "<br/>"
        . "<label for='produccion'>Producción:</label> " . $this->produccion . "<br/>"
        . "<label for='anio'>Año:</label> " . $this->anio . "<br/>"
        . "<label for='nacionalidad'>Nacionalidad:</label> " . $this->nacionalidad . "<br/>"
        . "<label for='genero'>Género:</label> " . $this->genero . "<br/>"
        . "<label for='duracion'>Duración:</label> " . $this->duracion . "<br/>"
        . "<label for='restriccionDeEdad'>Restricción de edad:</label> " . $this->restriccionDeEdad . "<br/>";
        return $mensaje;
    }
}

