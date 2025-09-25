<?php
class Auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeError;
    private $objDuenio;
    private $nombreDuenio; // <-- Agrega esta línea
    private $apellidoDuenio;

    public function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
        $this->mensajeError = "";
    }
    // Metodos Get
    public function getPatente()
    {
        return $this->patente;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getDniDuenio()
    {
        return $this->dniDuenio;
    }
    public function getMensajeError()
    {
        return $this->mensajeError;
    }

    // Metodos Set
    public function setPatente($patente)
    {
        $this->patente = $patente;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setDniDuenio($dniDuenio)
    {
        $this->dniDuenio = $dniDuenio;
    }
    private function setError($mensaje)
    {
        $this->mensajeError = $mensaje;
    }
    public function getObjDuenio()
    {
        return $this->objDuenio;
    }

    public function setObjDuenio($duenio)
    {
        $this->objDuenio = $duenio;
    }
    // Metodos Get
    public function getNombreDuenio()
    {
        return $this->nombreDuenio;
    }
    public function getApellidoDuenio()
    {
        return $this->apellidoDuenio;
    }

    // Metodos Set
    public function setNombreDuenio($nombre)
    {
        $this->nombreDuenio = $nombre;
    }
    public function setApellidoDuenio($apellido)
    {
        $this->apellidoDuenio = $apellido;
    }
    public function __toString()
    {
        return "Auto: " . $this->getPatente() . ", " . $this->getMarca() . ", " . $this->getModelo() . ", " . $this->getDniDuenio();
    }
    /**
     * Funcion que setea nuevos datos al objeto ya creado
     */
    public function setDato($patente,  $marca,  $modelo,  $dniDuenio)
    {
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }
    // Funcion para insertar datos a la tabla Auto
    public function insertar()
    {
        $bd = new BaseDatos();
        $exito = false;
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) 
            VALUES ('" . $this->getPatente() . "', '" . $this->getMarca() . "', '" . $this->getModelo() . "', '" . $this->getDniDuenio() . "')";

        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql)) {
                $exito = true;
            } else {
                $this->setError("Error al insertar el auto: " . $bd->getError());
            }
        } else {
            $this->setError("Error al conectar con la base de datos.");
        }
        return $exito;
    }
    /**
     * Modifica los dato de un Auto existente en la BD
     * @param int $patente
     * @return boolean
     */
    public function modificar()
    {
        $bd = new BaseDatos();
        $exito = false;
        $sql = "UPDATE auto SET 
                Marca = '" . $this->getMarca() . "', 
                Modelo = '" . $this->getModelo() . "', 
                DniDuenio = '" . $this->getDniDuenio() . "' 
                WHERE Patente = '" . $this->getPatente() . "'";
        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql)) {
                $exito = true;
            }
        }
        return $exito;
    }
    public function eliminar()
    {
        $bd = new BaseDatos();
        $exito = false;
        $sql = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "' ";
        if ($bd->Iniciar()) {
            if ($bd->Ejecutar($sql)) {
                $exito = true;
            }
        }
        return $exito;
    }
    /**
     * Devuelve una colección de objetos Auto según un parámetro.
     * @param string $parametro
     * @return array
     */
    public static function listar($parametro = "")
    {
        $arregloAutos = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto";

        // Si se proporciona un parámetro, lo agregamos a la consulta
        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }
        $respuesta = $base->Ejecutar($sql);
        if ($respuesta > -1) {
            if ($respuesta > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $obj->setDato($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arregloAutos, $obj);
                }
            }
        }
        return $arregloAutos;
    }
    public static function listarDuenio($parametro = "")
    {
        $arregloAutos = array();
        $base = new BaseDatos();
        $sql = "SELECT auto.Patente, auto.Marca, auto.Modelo, auto.DniDuenio,
                   persona.Nombre, persona.Apellido, persona.NroDni
            FROM auto 
            JOIN persona ON auto.DniDuenio = persona.NroDni";

        if ($parametro != "") {
            $sql .= ' WHERE ' . $parametro;
        }

        $respuesta = $base->Ejecutar($sql);

        if ($respuesta > 0) {
            while ($row = $base->Registro()) {
                $obj = new Auto();
                $obj->setDato($row['Patente'], $row['Marca'], $row['Modelo'], $row['NroDni']);

                // Crear el dueño
                $duenio = new Persona(
                    $row['NroDni'],
                    $row['Apellido'],
                    $row['Nombre'],
                    "",
                    "",
                    "" // si no necesitás otros campos
                );
                $obj->setObjDuenio($duenio);

                array_push($arregloAutos, $obj);
            }
        }
        return $arregloAutos;
    }
    /**
     * Carga un objeto Auto desde la base de datos a partir de su patente.
     * @return boolean
     */
    public function cargar()
    {
        $bd = new BaseDatos();
        $exito = false;
        $patente = $this->getPatente();

        // Verifica si la patente no está vacía
        if ($patente != '') {
            $sql = "SELECT * FROM auto WHERE Patente = '" . $patente . "'";

            if ($bd->Iniciar()) {
                $res = $bd->Ejecutar($sql);
                if ($res > -1) {
                    if ($res > 0) {
                        $fila = $bd->Registro();
                        // Setear los datos del auto si se encuentra
                        $this->setDato($fila['Patente'], $fila['Marca'], $fila['Modelo'], $fila['DniDuenio']);
                        $exito = true;
                    }
                }
            } else {
                $this->setError("Error al conectar con la base de datos.");
            }
        } else {
            $this->setError("La patente no está definida para cargar el auto.");
        }
        return $exito;
    }
}
