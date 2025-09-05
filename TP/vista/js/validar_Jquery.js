// Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
// usuario  y  la  contraseña  antes  de  ser  enviados  al  servidor  sino  que  también  debe
// realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
// caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
// letras y números).
// Usamos jsquery y boostrap para las validaciones de este formulario
$(function () {
  $("#formulario").submit(function (event) {
    // Prevenir el envío por defecto para controlar la validación
    event.preventDefault();

    let usuario = $("#username").val();
    let password = $("#password").val();

    // Limpiar los mensajes de error y las clases de validación
    $("#username").removeClass("is-invalid");
    $("#password").removeClass("is-invalid");
    $("#username-feedback").text("");
    $("#password-feedback").text("");

    let error = false;

    // Validar el campo de usuario
    if (usuario === "") {
      $("#username").addClass("is-invalid");
      $("#username-feedback").text("El campo usuario es obligatorio.");
      error = true;
    }

    // Validar el campo de contraseña
    if (password === "") {
      $("#password").addClass("is-invalid");
      $("#password-feedback").text("El campo contraseña es obligatorio.");
      error = true;
    } else {
      let passwordError = "";

      if (password === usuario) {
        passwordError =
          "La contraseña no puede ser igual que el nombre de usuario.";
      }

      if (passwordError !== "") {
        $("#password").addClass("is-invalid");
        $("#password-feedback").text(passwordError);
        error = true;
      }
    }

    // Si no hay errores, se envía el formulario
    if (!error) {
      this.submit();
    }
  });
});
