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
  function limpiarErrores() {
    limpiarErrorCampo("#nroDni");
    $("#mensajeError").hide().text("");
  }
  $("#formulario-busqueda").on("submit", function (event) {
    event.preventDefault();

    limpiarErrores();
    var formularioValido = true;

    if (!validarCampo("#nroDni", "Número de DNI", validarFormatoDNI)) {
      formularioValido = false;
    }
    if (formularioValido) {
      console.log("Buscando persona...");
      this.submit();
    } else {
      console.error("Validación fallida. El formulario no se envía.");
      $("#nroDni").focus();
    }
  });
});
