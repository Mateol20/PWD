// los tipos validos son .doc o pdf y además el tamaño
// máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
// cargado, en caso contrario mostrar un mensaje indicando el problema.
$(document).ready(function () {
  const maxSize = 2 * 1024 * 1024; //2MB
  const form = $("#form");
  const archivoInput = $("#archivo");
  const feedback = $("#invalid_file");
  // Ver la lista MIME type list
  const tiposValidos = ["application/pdf", "application/msword"];
  function validarArchivo(archivo) {
    let esValido = true;
    // Validar tamaño
    if (archivo.size > maxSize) {
      feedback.text("El tamaño máximo del archivo es 2MB.");
      esValido = false;
    }

    // Validar tipo de archivo
    if (!tiposValidos.includes(archivo.type)) {
      feedback.text("Solo se permiten archivos .doc o .pdf.");
      esValido = false;
    }
    return esValido;
  }

  //validar el formulario antes de enviar
  form.on("submit", function (event) {
    if (archivoInput.val() === "") {
      archivoInput.addClass("is-invalid");
      feedback.text("Este campo es obligatorio");
      event.preventDefault();
      return;
    }
    let archivoSeleccionado = archivoInput[0].files[0];
    if (!validarArchivo(archivoSeleccionado)) {
      archivoInput.addClass("is-invalid");
      event.preventDefault();
    }
  });
});
