$(document).ready(function () {
  function validarCampo(selector, nombreCampo, formatoValidator) {
    if (!validarCampoVacio(selector, nombreCampo)) {
      return false;
    }
    if (formatoValidator && !formatoValidator(selector)) {
      return false;
    }
    return true;
  }

  function limpiarTodosLosErrores() {
    $("#formulario .form-control").each(function () {
      limpiarErrorCampo(this);
    });
    $("#mensajeError").hide().text("");
  }

  $("#formulario").on("submit", function (event) {
    event.preventDefault();

    limpiarTodosLosErrores();
    var formularioValido = true;

    var patenteValida = validarCampo(
      "#patente",
      "Patente del Auto",
      validarFormatoPatente
    );

    // 2. Validar DNI
    var dniValido = validarCampo(
      "#dniDuenio",
      "DNI del Nuevo Dueño",
      validarFormatoDNI
    );

    formularioValido = patenteValida && dniValido;

    if (formularioValido) {
      console.log("¡Validación OK! Enviando formulario de cambio de dueño.");
      this.submit();
    } else {
      console.log("Validación fallida. El formulario no se envía.");
      $("#formulario .is-invalid:first").focus();
    }
  });
});
