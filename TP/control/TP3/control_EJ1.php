<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contenido del Archivo</title>
</head>

<body>
    <?php
    if (isset($_FILES['archivo'])) {
        $archivo = $_FILES['archivo'];
        $directorio_destino = '../../util/TP3';
        $tipo_mime = $archivo['type'];
        if (
            $tipo_mime === "application/pdf" ||
            $tipo_mime === "application/msword"
        ) {
            $ruta_temporal = $archivo['tmp_name'];
            // Ruta final del archivo guardado
            $ruta_final = $directorio_destino . basename($archivo['name']);
            // Mover el archivo a la carpeta destino
            if (move_uploaded_file($archivo['tmp_name'], $ruta_final)) {
                $contenido = "<p>El archivo se cargó correctamente.</p>
                        <p><a href='$ruta_final' target='_blank'>Abrir archivo</a></p>";
            } else {
                $contenido = "Error: No se pudo guardar el archivo.";
            }
        } else {
            $contenido = 'Error: El archivo debe ser de tipo PDF o Word.';
        }
    } else {
        $contenido = 'Ocurrió un error al subir el archivo.';
    }

    include '../../vista/TP3/vista_EJ1.php';
    ?>

</body>

</html>