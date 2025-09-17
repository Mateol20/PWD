<?php
class control_EJ2{
    public $tipo_mime;
    public $ruta_temporal;

    public function archivoTxt($dato){
        $contenido='';
        $archivo = $dato["archivo"];
        if (isset($archivo)) {
            $this->tipo_mime = $archivo['type'];
            if (
                $this->tipo_mime === "text/plain"
                ) {
                    $this->ruta_temporal = $archivo['tmp_name'];
                    $contenido = file_get_contents($this->ruta_temporal);
                    $contenido = htmlspecialchars($contenido);
                } else {
                    $contenido = 'Error: El archivo debe ser de tipo .txt';
                }
            } else {
                $contenido = 'Ocurrió un error al subir el archivo.';
            }
            return $contenido;
        }
    }
    ?>
