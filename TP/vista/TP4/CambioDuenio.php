<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Dueño de Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Cambiar Dueño de Auto</h1>
                    </div>
                    <div class="card-body">
                        <form id="formulario" action="./accion/accionCambioDuenio.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="patente" class="form-label">Patente del Auto</label>
                                <input type="text" class="form-control" id="patente" name="patente" required>
                                <div class="invalid-feedback" id="patente-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <label for="dniDuenio" class="form-label">DNI del Nuevo Dueño</label>
                                <input type="text" class="form-control" id="dniDuenio" name="dniDuenio" required>
                                <div class="invalid-feedback" id="dni-duenio-feedback"></div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Cambiar Dueño</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $("#formulario").submit(function(event) {
                event.preventDefault();

                let patente = $("#patente").val();
                let dniDuenio = $("#dniDuenio").val();

                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").text("");

                let error = false;

                if (patente.trim() === "") {
                    $("#patente").addClass("is-invalid");
                    $("#patente-feedback").text("El número de patente es obligatorio.");
                    error = true;
                }
                if (dniDuenio.trim() === "") {
                    $("#dniDuenio").addClass("is-invalid");
                    $("#dni-duenio-feedback").text("El DNI del nuevo dueño es obligatorio.");
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