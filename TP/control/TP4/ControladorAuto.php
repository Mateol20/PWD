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

    // Otros métodos, como por ejemplo:
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

        // Usamos el método listar() con una condición
        $lista = Auto::listar("Patente = '" . $patente . "'");

        if (count($lista) > 0) {
            // Si la lista no está vacía, el auto fue encontrado
            $autoEncontrado = $lista[0];

            // Ahora, obtenemos los datos del dueño
            $persona = new Persona();
            $persona->setNroDni($autoEncontrado->getDniDuenio());

            if ($persona->cargar()) {
                // Si el dueño se carga, agregamos sus datos al objeto Auto
                $autoEncontrado->setNombreDuenio($persona->getNombre());
                $autoEncontrado->setApellidoDuenio($persona->getApellido());
            } else {
                // Si el dueño no se encuentra
                $autoEncontrado->setNombreDuenio("Desconocido");
                $autoEncontrado->setApellidoDuenio("Desconocido");
            }
        }

        return $autoEncontrado; // Devuelve el objeto Auto o null si no se encontró
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
