<?php
    class control_EJ1{
        public $archivo;
        public $directorio_destino;
        public $tipo_mime;
        public $ruta_temporal;
        public $ruta_final;
        
        public function cargarArchivo($datos){
            $contenido='';
            if (isset($_FILES['archivo'])) {
                $this->archivo = $_FILES['archivo'];
                $this->directorio_destino = '../../util/TP3';
                $this->tipo_mime = $this->archivo['type'];
                if (
                    $this->tipo_mime === "application/pdf" ||
                    $this->tipo_mime === "application/msword"
                    ) {
                        $this->ruta_temporal = $this->archivo['tmp_name'];
                        // Ruta final del archivo guardado
                        $this->ruta_final = $this->directorio_destino . basename($this->archivo['name']);
                        // Mover el archivo a la carpeta destino
                        if (move_uploaded_file($this->archivo['tmp_name'], $this->ruta_final)) {
                            $contenido = "<p>El archivo se cargó correctamente.</p>
                            <p><a href='$this->ruta_final' target='_blank'>Abrir archivo</a></p>";
                        } else {
                            $contenido = "Error: No se pudo guardar el archivo.";
                        }
                    } else {
                        $contenido = 'Error: El archivo debe ser de tipo PDF o Word.';
                    }
                } else {
                    $contenido = 'Ocurrió un error al subir el archivo.';
                }
                return $contenido;
            }
        }
    ?>