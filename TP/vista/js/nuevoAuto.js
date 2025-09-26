// ARCHIVO: js/nuevoAuto.js

$(document).ready(function () {
  // Función de ayuda para encadenar las validaciones
  function esValido(selector, nombreCampo, formatoValidator) {
    // Ejecuta la validación de campo vacío primero. Si es válido, ejecuta la de formato.
    return (
      validarCampoVacio(selector, nombreCampo) &&
      (!formatoValidator || formatoValidator(selector))
    );
  }

  $("#formulario").on("submit", function (event) {
    // Detiene el envío del formulario por defecto
    event.preventDefault();

    var formularioValido = true;

    // 1. VALIDACIÓN DE PATENTE (Obligatorio + Formato LLL DDD)
    // Usamos tu función validarFormatoPatente
    if (!esValido("#patente", "Patente", validarFormatoPatente)) {
      formularioValido = false;
    }

    // 2. VALIDACIÓN DE MARCA (Obligatorio)
    // No aplicamos validación de formato (solo letras) porque hay marcas con números/símbolos.
    if (formularioValido && !validarCampoVacio("#marca", "Marca")) {
      formularioValido = false;
    }

    // 3. VALIDACIÓN DE MODELO (Obligatorio)
    if (formularioValido && !validarCampoVacio("#modelo", "Modelo")) {
      formularioValido = false;
    }

    // 4. VALIDACIÓN DEL DNI DEL DUEÑO (Obligatorio + Formato DNI)
    // Reutilizamos la función validarFormatoDNI de Persona
    if (
      formularioValido &&
      !esValido("#dniDuenio", "DNI del Dueño", validarFormatoDNI)
    ) {
      formularioValido = false;
    }

    // 5. Envío
    if (formularioValido) {
      console.log("¡Validación OK! Enviando formulario de nuevo auto.");
      this.submit(); // Envía el formulario si todo es válido
    } else {
      console.error(
        "Una o más validaciones fallaron. El formulario no se enviará."
      );
    }
  });
});
