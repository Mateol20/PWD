// ARCHIVO: js/nuevaPersona.js

$(document).ready(function () {
  $("#formulario").on("submit", function (event) {
    event.preventDefault();

    var formularioValido = true;

    // 1. VALIDACIÓN DEL DNI
    if (!validarCampoVacio("#nroDni", "DNI") || !validarFormatoDNI("#nroDni")) {
      formularioValido = false;
    }

    // 2. VALIDACIÓN DEL APELLIDO
    if (
      formularioValido &&
      (!validarCampoVacio("#apellido", "Apellido") ||
        !validarSoloLetras("#apellido", "Apellido"))
    ) {
      formularioValido = false;
    }

    // 3. VALIDACIÓN DEL NOMBRE
    if (
      formularioValido &&
      (!validarCampoVacio("#nombre", "Nombre") ||
        !validarSoloLetras("#nombre", "Nombre"))
    ) {
      formularioValido = false;
    }
    if (formularioValido) {
      console.log("Enviando formulario para registrar nueva persona.");
      this.submit();
    } else {
      console.error(
        "Una o más validaciones fallaron. El formulario no se enviará."
      );
    }
  });
});
