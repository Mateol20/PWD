<?php
class control_EJ2{
    public $archivo;
    public $tipo_mime;
    public $ruta_temporal;

    public function archivoTxt(){
        $contenido='';
        if (isset($_FILES['archivo'])) {
            $this->archivo = $_FILES['archivo'];
            $this->tipo_mime = $this->archivo['type'];
            if (
                $this->tipo_mime === "text/plain"
                ) {
                    $this->ruta_temporal = $this->archivo['tmp_name'];
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
