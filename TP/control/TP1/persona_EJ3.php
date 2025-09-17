<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;

    public function __construct($datos)
    {
        // Usamos el array $datos para inicializar las propiedades
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->edad = $datos['edad'];
        $this->direccion = $datos['direccion'];
    }
    public function saludo()
    {
        return "Hola, yo soy " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y vivo en " . $this->direccion . ".";
    }
}
