$(document).ready(function () {
  // Manejar el evento de envío del formulario
  $("#formulario").on("submit", function (event) {
    // Limpiar errores y clases de Bootstrap
    $(".is-invalid").removeClass("is-invalid");
    $(".is-valid").removeClass("is-valid");
    $(".invalid-feedback").text("");

    let esValido = true;

    //Validar campos de texto vacíos
    const campos = [
      { id: "titulo", mensaje: "El título es obligatorio." },
      { id: "actores", mensaje: "Los actores son obligatorios." },
      { id: "director", mensaje: "El director es obligatorio." },
      { id: "guion", mensaje: "El guión es obligatorio." },
      { id: "produccion", mensaje: "La producción es obligatoria." },
      { id: "nacionalidad", mensaje: "La nacionalidad es obligatoria." },
      { id: "sinopsis", mensaje: "La sinopsis es obligatoria." },
    ];

    campos.forEach((campo) => {
      const valor = $("#" + campo.id)
        .val()
        .trim();
      if (valor === "") {
        $("#" + campo.id).addClass("is-invalid");
        $("#" + campo.id + "-feedback").text(campo.mensaje);
        esValido = false;
      } else {
        $("#" + campo.id).addClass("is-valid");
      }
    });

    //Validar Año
    const anio = $("#anio").val().trim();
    const anioRegex = /^\d{4}$/;
    if (anio === "" || !anioRegex.test(anio)) {
      $("#anio").addClass("is-invalid");
      $("#anio-feedback").text("El año es obligatorio y debe tener 4 dígitos.");
      esValido = false;
    } else {
      $("#anio").addClass("is-valid");
    }

    //Validar Duración
    const duracion = $("#duracion").val().trim();
    const duracionRegex = /^\d{1,3}$/;
    if (duracion === "" || !duracionRegex.test(duracion)) {
      $("#duracion").addClass("is-invalid");
      $("#duracion-feedback").text(
        "La duración es obligatoria y debe tener hasta 3 dígitos."
      );
      esValido = false;
    } else {
      $("#duracion").addClass("is-valid");
    }

    //Validar Género (debe estar seleccionado)
    const genero = $("#genero").val();
    if (genero === "") {
      $("#genero").addClass("is-invalid");
      $("#genero-feedback").text("El género es obligatorio.");
      esValido = false;
    } else {
      $("#genero").addClass("is-valid");
    }

    //Validar Restricciones de edad
    if (!$("input[name='restriccionEdad']:checked").val()) {
      $("#restriccionEdad-feedback").text(
        "Debe seleccionar una restricción de edad."
      );
      esValido = false;
    }

    // Validar el archivo de imagen
    const archivoInput = $("#archivo");
    const archivoSeleccionado = archivoInput[0].files[0];

    if (!archivoSeleccionado) {
      archivoInput.addClass("is-invalid");
      $("#imagen-feedback").text("Debe seleccionar una imagen.");
      esValido = false;
    } else if (
      archivoSeleccionado.type !== "image/png" &&
      archivoSeleccionado.type !== "image/jpeg"
    ) {
      archivoInput.addClass("is-invalid");
      $("#imagen-feedback").text("Se debe subir una imagen (PNG o JPEG).");
      esValido = false;
    } else {
      archivoInput.addClass("is-valid");
    }

    if (!esValido) {
      event.preventDefault();
    }
  });

  // Manejar el evento del botón Borrar
  $("#borrar-btn").on("click", function () {
    $("#formulario")[0].reset();
    $(".is-invalid").removeClass("is-invalid");
    $(".is-valid").removeClass("is-valid");
    $(".invalid-feedback").text("");
    $("#datos-ingresados").hide();
  });
});
