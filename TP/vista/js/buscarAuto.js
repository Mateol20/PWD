$(document).ready(function () {
  $("#formularioBuscarAuto").on("submit", function (event) {
    event.preventDefault();
    var esValido = true;
    if (
      validarCampoVacio("#patente", "Número de Patente") &&
      validarFormatoPatente("#patente")
    ) {
      esValido = true;
    } else {
      esValido = false;
    }

    if (esValido) {
      console.log("Enviando formulario.");
      this.submit();
    } else {
      console.log("Una o más validaciones de la patente fallaron.");
    }
  });
});
