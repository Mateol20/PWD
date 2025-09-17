<?php
// Define the base path of your project
define('BASE_PATH', __DIR__ . '/../../..');

// Include the file using the defined base path
include BASE_PATH . '/TP/control/TP2/control_EJ4.php';
class control_Ej3 extends Cine{
    public $imagen;
    public function __construct($dato){
        parent::__construct($dato);
        $this->imagen = $dato["archivo"];
    }
    public function cineImagen(){
        $archivo = $this->imagen;
    $directorio_subida = '../../util';
     $nombre_archivo = basename($archivo['name']);
     $ruta_completa = $directorio_subida . $nombre_archivo;
        if (move_uploaded_file($archivo['archivo']['tmp_name'], $ruta_completa)) {
            $imagen = "<p><b>Imagen subida:</b></p>" .
            "<img src='{$ruta_completa}' alt='Imagen de la película' style='max-width:300px;'>";
        }
        return $imagen;
    }
}
    