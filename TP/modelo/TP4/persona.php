<?php
class Persona
{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeError;

    // Constructor
    public function __construct()
    {
        $this->nroDni = "";
        $this->apellido = "";
        $this->nombre = "";
        $this->fechaNac = "";
        $this->telefono = "";
        $this->domicilio = "";
    }

    // Getters y Setters
    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }
    public function getMensajeError()
    {
        return $this->mensajeError;
    }
    public function setNroDni($nroDni)
    {
        $this->nroDni = $nroDni;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function setearDatos($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio)
    {
        $this->nroDni = $nroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }
    // Método privado para establecer el error
    private function setError($mensaje)
    {
        $this->mensajeError = $mensaje;
    }

    // Método para insertar una nueva persona
    public function insertar()
    {
        $bd = new BaseDatos();
        $exito = false;
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) 
                VALUES ('" . $this->getNroDni() . "', '" . $this->getApellido() . "', '" . $this->getNombre() . "', '" . $this->getFechaNac() . "', '" . $this->getTelefono() . "', '" . $this->getDomicilio() . "')";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql)) {
                $exito = true;
            } else {
                $this->setError("Error al insertar la persona: " . $bd->getError());
            }
        } else {
            $this->setError("Error al conectar con la base de datos.");
        }
        return $exito;
    }

    /**
     * Funcion para eliminar una persona, usando su DNI como referencia
     */
    public function eliminarPersona()
    {
        $bd = new BaseDatos();
        $exito = false;
        $sql = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "' ";
        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql)) {
                $exito = true;
            }
        }
        return $exito;
    }

    /**
     * Modifica los datos de una persona en la base de datos.
     * @return boolean
     */
    public function modificar()
    {
        $bd = new BaseDatos();
        $exito = false;

        $sql = "UPDATE persona SET 
                Apellido = '" . $this->getApellido() . "', 
                Nombre = '" . $this->getNombre() . "', 
                fechaNac = '" . $this->getFechaNac() . "', 
                Telefono = '" . $this->getTelefono() . "', 
                Domicilio = '" . $this->getDomicilio() . "' 
                WHERE NroDni = '" . $this->getNroDni() . "'";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql) > 0) {
                $exito = true;
            }
        }
        return $exito;
    }
    public static function listar($parametro = "")
    {
        $arregloPersonas = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona";

        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }

        $respuesta = $base->Ejecutar($sql);
        if ($respuesta > -1) {
            if ($respuesta > 0) {
                while ($row = $base->Registro()) {
                    $objPersona = new Persona();
                    $objPersona->setearDatos($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    array_push($arregloPersonas, $objPersona);
                }
            }
        }
        return $arregloPersonas;
    }

    /**
     * Carga los datos de una persona desde la base de datos usando su DNI
     * @return boolean Retorna verdadero si la persona fue encontrada y cargada, falso en caso contrario.
     */
    public function cargar()
    {
        $respuesta = false;
        $base = new BaseDatos();
        // Consulta SQL para buscar por DNI
        $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setearDatos(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    $respuesta = true;
                }
            }
        } else {
            $this->setError("Persona->cargar: " . $base->getError());
        }
        return $respuesta;
    }
}
