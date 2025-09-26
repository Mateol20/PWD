/**
 * Muestra el error de validación específico para un campo, usando clases de Bootstrap.
 * Oculta el mensaje de error general.
 * @param {string} selector
 * @param {string} mensaje
 */
function mostrarErrorCampo(selector, mensaje) {
  $("#mensajeError").hide().text("");
  $(selector).addClass("is-invalid");
  var feedbackSelector = $(selector).next(".invalid-feedback");
  feedbackSelector.text(mensaje).show();
}

/**
 * Limpia cualquier marca de error de un campo.
 * @param {string} selector - El selector del campo de entrada.
 */
function limpiarErrorCampo(selector) {
  $(selector).removeClass("is-invalid");
  var feedbackSelector = $(selector).next(".invalid-feedback");
  feedbackSelector.text("").hide();
}

/**
 * Valida que un campo no esté vacío. Ahora usa mostrarErrorCampo.
 * @param {string} selector
 * @param {string} nombreCampo
 * @returns {boolean}
 */
function validarCampoVacio(selector, nombreCampo) {
  var valor = $(selector).val().trim();
  limpiarErrorCampo(selector);

  if (valor === "") {
    mostrarErrorCampo(selector, `El campo ${nombreCampo} es obligatorio.`);
    return false;
  }
  return true;
}

function validarFormatoPatente(selector) {
  var patente = $(selector).val().trim().toUpperCase();
  limpiarErrorCampo(selector);

  var regexPatenteVieja = /^[A-Z]{3}\s*[0-9]{3}$/;

  if (!regexPatenteVieja.test(patente)) {
    mostrarErrorCampo(
      selector,
      "El formato de patente es incorrecto. Debe ser 3 letras y 3 números (ej: ABC 123)."
    );
    return false;
  }
  return true;
}

function validarFormatoDNI(selector) {
  var dni = $(selector).val().trim();
  limpiarErrorCampo(selector);

  var regexDNI = /^[0-9]{7,8}$/;

  if (!regexDNI.test(dni)) {
    mostrarErrorCampo(
      selector,
      "El Número de DNI es inválido. Debe contener solo números y tener entre 7 y 8 dígitos."
    );
    return false;
  }
  return true;
}

/**
 * Verifica que un campo de texto contenga solo letras y espacios (para nombres/apellidos).
 * @param {string} selector -
 * @param {string} nombreCampo
 * @returns {boolean}
 */
function validarSoloLetras(selector, nombreCampo) {
  var texto = $(selector).val().trim();
  limpiarErrorCampo(selector);

  var regexLetras = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

  if (!regexLetras.test(texto)) {
    mostrarErrorCampo(
      selector,
      "El campo " + nombreCampo + " solo debe contener letras."
    );
    return false;
  }
  return true;
}
