<?php
include_once 'Persona_EJ3.php';
class personaEdad extends Persona
{

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
        if ($this->edad >= 18) {
            $mensaje_edad = "Es mayor de edad";
        } else {
            $mensaje_edad = "Es menor de edad";
        }
        return "Hola, yo soy " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y vivo en " . $this->direccion . " $mensaje_edad" . ".";
    }
}
