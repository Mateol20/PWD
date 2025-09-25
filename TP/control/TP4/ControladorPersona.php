<?php
class ControladorPersona
{
    /**
     * Obtiene una lista completa de personas.
     * @return array
     */
    public function listarPersonas()
    {
        return Persona::listar();
    }

    /**
     * Busca una persona por su DNI.
     * @param string $dni
     * @return Persona|null
     */
    public function buscarPersonaPorDni($dni)
    {
        $objPersona = new Persona();
        $objPersona->setNroDni($dni);
        if ($objPersona->cargar()) {
            return $objPersona;
        }
        return null;
    }
    /**
     * Crea una nueva persona en la base de datos.
     * @param array $datos
     * @return boolean
     */
    public function crearPersona($datos)
    {
        $objPersona = new Persona();
        $exito = false;

        // Verifica que los datos necesarios existan
        if (isset($datos['nroDni'], $datos['apellido'], $datos['nombre'])) {
            $objPersona->setearDatos(
                $datos['nroDni'],
                $datos['apellido'],
                $datos['nombre'],
                $datos['fechaNac'] ?? null,
                $datos['telefono'] ?? null,
                $datos['domicilio'] ?? null
            );

            // Llama al método insertar del modelo
            if ($objPersona->insertar()) {
                $exito = true;
            }
        }
        return $exito;
    }
    /**
     * Actualiza los datos de una persona en la base de datos.
     * @param array $datos
     * @return boolean
     */
    public function actualizarPersona($datos)
    {
        $exito = false;
        $objPersona = new Persona();

        // 1. Setear el DNI en el objeto Persona para que pueda ser cargado
        if (isset($datos['nroDni'])) {
            $objPersona->setNroDni($datos['nroDni']);
        }

        // 2. Cargar el objeto desde la base de datos
        if ($objPersona->cargar()) {
            // 3. Si la persona existe, setear los nuevos datos
            $objPersona->setearDatos(
                $datos['nroDni'],
                $datos['apellido'],
                $datos['nombre'],
                $datos['fechaNac'] ?? null,
                $datos['telefono'] ?? null,
                $datos['domicilio'] ?? null
            );

            // 4. Ahora sí, llamar al método modificar()
            if ($objPersona->modificar()) {
                $exito = true;
            }
        }
        return $exito;
    }
}
