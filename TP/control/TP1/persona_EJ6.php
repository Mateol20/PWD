<?php
include_once 'persona_EJ5.php';
class personaDeporte extends personaSexo
{
    public $deporte = [];

    public function __construct($datos)
    {
        // Usamos el array $datos para inicializar las propiedades
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->edad = $datos['edad'];
        $this->direccion = $datos['direccion'];
        $this->estudios = $datos['estudios'];
        $this->sexo = $datos['sexo'];
        $this->deporte = $datos['deportes'];
    }
    public function saludo()
    {
        if ($this->edad >= 18) {
            $mensaje_edad = "Es mayor de edad";
        } else {
            $mensaje_edad = "Es menor de edad";
        }
        $cantDeportes = count($this->deporte);
        $mensaje =
            "Hola, yo soy " . $this->nombre . " " . $this->apellido . ", tengo " . $this->edad . " años y vivo en " . $this->direccion .
            "<p><strong>" . $mensaje_edad . "</strong></p>" .
            "<p>Sexo: <strong>" . $this->sexo . "</strong></p>" .
            "<p>Nivel de estudios: <strong>" . $this->estudios . "</strong></p>" .
            "<p>Practica: <strong>" . $cantDeportes . " Deportes" . "</strong></p>";
        return $mensaje;
    }
}
