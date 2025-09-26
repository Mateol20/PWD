<?php
class ControladorAuto
{

    /** Crea un nuevo auto en la base de datos.
     * @param array $datos
     * @return boolean
     */
    public function crearAuto($datos)
    {
        $objAuto = new Auto();
        $exito = false;

        if (isset($datos['patente'], $datos['marca'], $datos['modelo'], $datos['dniDuenio'])) {
            $objAuto->setDato(
                $datos['patente'],
                $datos['marca'],
                $datos['modelo'],
                $datos['dniDuenio']
            );

            if ($objAuto->insertar()) {
                $exito = true;
            }
        }
        return $exito;
    }

    public function listarAutos($condicion = '')
    {
        $listaAutos = Auto::listar($condicion);
        return $listaAutos;
    }
    public function listarAutoDuenio($condicion = '')
    {
        $listaAutos = Auto::listarDuenio($condicion);
        return $listaAutos;
    }
    public function buscarAutoPorPatente($patente)
    {
        $autoEncontrado = null;
        $lista = Auto::listar("Patente = '" . $patente . "'");

        if (count($lista) > 0) {
            $autoEncontrado = $lista[0];
            $persona = new Persona();
            $persona->setNroDni($autoEncontrado->getDniDuenio());

            if ($persona->cargar()) {
                $autoEncontrado->setNombreDuenio($persona->getNombre());
                $autoEncontrado->setApellidoDuenio($persona->getApellido());
            } else {
                $autoEncontrado->setNombreDuenio("Desconocido");
                $autoEncontrado->setApellidoDuenio("Desconocido");
            }
        }

        return $autoEncontrado;
    }
    /**
     * Modifica el DNI del dueño de un auto.
     * @param array $datos
     * @return boolean
     */
    public function cambiarDuenio($datos)
    {
        $patente = $datos['patente'];
        $dniDuenio = $datos['dniDuenio'];

        $objAuto = new Auto();
        $objAuto->setPatente($patente);

        if ($objAuto->cargar()) {
            $objAuto->setDniDuenio($dniDuenio);
            if ($objAuto->modificar()) {
                return true;
            }
        }
        return false;
    }
}
