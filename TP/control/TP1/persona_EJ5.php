<?php
include_once 'persona_ej4.php';
class personaSexo extends personaEdad
{
    public $estudios;
    public $sexo;

    public function __construct($datos)
    {
        // Usamos el array $datos para inicializar las propiedades
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->edad = $datos['edad'];
        $this->direccion = $datos['direccion'];
        $this->estudios = $datos['nivel_estudios'];
        $this->sexo = $datos['sexo'];
    }
    public function saludo()
    {
        if ($this->edad >= 18) {
            $mensaje_edad = "Es mayor de edad";
        } else {
            $mensaje_edad = "Es menor de edad";
        }

        $mensaje =
            "Hola, yo soy " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y vivo en " . $this->direccion .
            "<p><strong>" . $mensaje_edad . "</strong></p>" .
            "<p>Sexo: <strong>" . $this->sexo . "</strong></p>" .
            "<p>Nivel de estudios: <strong>" . $this->estudios . "</strong></p>";
        return $mensaje;
    }
}
