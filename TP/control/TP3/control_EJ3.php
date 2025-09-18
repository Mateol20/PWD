<?php
define('BASE_PATH', __DIR__ . '/../../..');
include_once BASE_PATH . '/TP/control/TP2/control_EJ4.php';

class control_Ej3 extends Cine
{
    public function __construct($dato)
    {
        parent::__construct($dato);
    }

    public function cineImagen()
    {
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $archivo = $_FILES['archivo'];
            $directorio_subida = BASE_PATH . '/TP/util/TP3/';
            $nombre_archivo = basename($archivo['name']);
            $ruta_completa = $directorio_subida . $nombre_archivo;

            if (move_uploaded_file($archivo['tmp_name'], $ruta_completa)) {
                $ruta_relativa = '/GRUPO-7-PWD/TP/util/TP3/' . $nombre_archivo;
                $imagen = "<p><b>Imagen subida:</b></p>" .
                    "<img src='{$ruta_relativa}' alt='Imagen de la película' style='max-width:300px;'>";

                return $imagen;
            } else {
                return "<p>Hubo un error al subir el archivo.</p>";
            }
        } else {
            return "<p>No se recibió ningún archivo o hubo un error en la subida.</p>";
        }
    }
    public function mostrarCineConImagen()
    {
        $info = parent::mensajeCine();
        $img = $this->cineImagen();
        return $info . "<br>" . $img;
    }
}
