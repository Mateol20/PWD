<!-- Utilizando el formulario realizado en el TP1 aplicamos comprobaciones y estilos de Boostrap
para probar y investigar -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
        crossorigin="anonymous" />
    <title>Formulario TP1</title>
</head>
<?php
echo <<<HTML
    <body>
    <div class="container">
        <form class="row g-3 needs-validation" method="post" novalidate>
            <!-- GRUPO NOMBRE -->
            <div class="row g-3">
                <div class="col-6">
                    <label for="nombre_input" class="form-label">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nombre_input"
                        placeholder="Escriba su nombre.."
                        required />
                </div>
                <!-- GRUPO APELLIDO -->
                <div class="col-6">
                    <label for="apellido_input" class="form-label">Apellido</label>
                    <input
                        type="text"
                        class="form-control"
                        id="apellido_input"
                        placeholder="Escriba su apellido.."
                        required />
                </div>
                <div>
                    <div class="invalid-feedback">
                        Por favor, complete este campo.
                    </div>
                    <div class="valid-feedback">Campo válido.</div>
                </div>
            </div>
            <!-- GRUPO EDAD -->
            <div class="row g-3">
                <div class="col-2">
                    <label for="edad_input" class="form-label">Edad</label>
                    <input
                        type="number"
                        class="form-control"
                        id="edad_input"
                        placeholder="Escriba su edad.."
                        min="1"
                        max="99"
                        required />
                </div>

                <div>
                    <div class="invalid-feedback">
                        Por favor, ingrese una edad válida (1-99).
                    </div>
                    <div class="valid-feedback">Edad válida.</div>
                </div>
                <!-- GRUPO RADIOBUTTONS -->
                <!-- NIVELES DE ESTUDIOS Y GENERO -->
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">Nivel de Estudios</label>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="nivel_estudios"
                                id="sin_estudios"
                                value="No tiene estudios"
                                required />
                            <label class="form-check-label" for="sin_estudios">
                                No tiene estudios
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="nivel_estudios"
                                id="primarios"
                                value="Estudios primarios" />
                            <label class="form-check-label" for="primarios">
                                Estudios primarios
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="nivel_estudios"
                                id="secundarios"
                                value="Estudios secundarios" />
                            <label class="form-check-label" for="secundarios">
                                Estudios secundarios
                            </label>
                        </div>
                    </div>
                    <!-- GRUPO RADIOBUTTONS GENERO -->
                    <div class="col-md-4">
                        <label class="form-label">Género</label>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="genero"
                                id="femenino"
                                value="Femenino"
                                required />
                            <label class="form-check-label" for="femenino">Femenino</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="genero"
                                id="masculino"
                                value="Masculino" />
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="genero"
                                id="otro"
                                value="Otro" />
                            <label class="form-check-label" for="otro">Otro</label>
                        </div>
                    </div>
                    <!--GRUPO SELECTS DEPORTES-->
                    <div class="col-md-4">
                        <label for="deportes_select" class="form-label">Deportes</label>
                        <select
                            class="form-select"
                            id="deportes_select"
                            aria-label="Ninguno"
                            required>
                            <option value="" selected disabled>Seleccione un deporte</option>
                            <option value="Futbol">Fútbol</option>
                            <option value="Basket">Básquet</option>
                            <option value="Tennis">Tenis</option>
                            <option value="Natacion">Natación</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>

                    <!-- BOTON ENVIAR -->
                    <div class="col-12 mt-4 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
        </form>
    </div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
    </body>
HTML;
?>

</html>