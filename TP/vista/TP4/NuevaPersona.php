<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <script src="../js/cargarFyH.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Crear Nueva Persona</h1>
                    </div>
                    <div class="card-body">
                        <form id="formulario" action="./accion/accionNuevaPersona.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="nroDni" class="form-label">Número de DNI</label>
                                <input type="text" class="form-control" id="nroDni" name="nroDni" required>
                                <div class="invalid-feedback" id="dni-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                                <div class="invalid-feedback" id="apellido-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <div class="invalid-feedback" id="nombre-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNac" name="fechaNac">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="domicilio" class="form-label">Domicilio</label>
                                <input type="text" class="form-control" id="domicilio" name="domicilio">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrar Persona</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#formulario").submit(function(event) {
                event.preventDefault();

                let nroDni = $("#nroDni").val();
                let apellido = $("#apellido").val();
                let nombre = $("#nombre").val();

                // Limpiar los mensajes de error
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").text("");

                let error = false;

                // Validación de DNI
                if (nroDni.trim() === "") {
                    $("#nroDni").addClass("is-invalid");
                    $("#dni-feedback").text("El número de DNI es obligatorio.");
                    error = true;
                }

                // Validación de Apellido
                if (apellido.trim() === "") {
                    $("#apellido").addClass("is-invalid");
                    $("#apellido-feedback").text("El apellido es obligatorio.");
                    error = true;
                }

                // Validación de Nombre
                if (nombre.trim() === "") {
                    $("#nombre").addClass("is-invalid");
                    $("#nombre-feedback").text("El nombre es obligatorio.");
                    error = true;
                }

                if (!error) {
                    this.submit();
                }
            });
        });
    </script>

</body>

</html>