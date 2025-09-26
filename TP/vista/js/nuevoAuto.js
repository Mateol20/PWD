$(document).ready(function () {
  function esValido(selector, nombreCampo, formatoValidator) {
    return (
      validarCampoVacio(selector, nombreCampo) &&
      (!formatoValidator || formatoValidator(selector))
    );
  }

  $("#formulario").on("submit", function (event) {
    event.preventDefault();

    var formularioValido = true;
    if (!esValido("#patente", "Patente", validarFormatoPatente)) {
      formularioValido = false;
    }

    if (formularioValido && !validarCampoVacio("#marca", "Marca")) {
      formularioValido = false;
    }

    if (formularioValido && !validarCampoVacio("#modelo", "Modelo")) {
      formularioValido = false;
    }

    if (
      formularioValido &&
      !esValido("#dniDuenio", "DNI del Dueño", validarFormatoDNI)
    ) {
      formularioValido = false;
    }

    if (formularioValido) {
      console.log("¡Validación OK! Enviando formulario de nuevo auto.");
      this.submit();
    } else {
      console.error(
        "Una o más validaciones fallaron. El formulario no se enviará."
      );
    }
  });
});
