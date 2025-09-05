function ejecutar() {
  esValido = true;
  titulo = document.getElementById("titulo").value;
  director = document.getElementById("director").value;
  actores = document.getElementById("actores").value;
  guion = document.getElementById("guion").value;
  produccion = document.getElementById("produccion").value;
  anio = document.getElementById("anio").value;
  nacionalidad = document.getElementById("nacionalidad").value;
  genero = document.getElementById("genero").value;
  duracion = document.getElementById("duracion").value;
  // restricciones = document.getElementById('restricciones').value;
  function conteo(texto) {
    return texto.length ? 1 + conteo(texto.slice(1)) : 0;
  }

  if (titulo == "") {
    // alert(titulo);
    document.getElementById("titulo").style.borderColor = "red";
    document.getElementById("titulo").style.borderWidth = "3px";
    esValido = false;
  }
  if (titulo == "") {
    // alert(titulo);
    document.getElementById("titulo").style.borderColor = "red";
    document.getElementById("titulo").style.borderWidth = "3px";
    esValido = false;
  }
  if (conteo(anio) > 4 || anio == "" || /[a-zA-Z]/.test(anio)) {
    document.getElementById("anio").style.borderColor = "red";
    document.getElementById("anio").style.borderWidth = "3px";
    esValido = false;
  }
  if (conteo(duracion) > 3 || duracion == "") {
    document.getElementById("duracion").style.borderColor = "red";
    document.getElementById("duracion").style.borderWidth = "3px";
    esValido = false;
  }
  if (genero == "Seleccionar Genero") {
    document.getElementById("genero").style.borderColor = "red";
    document.getElementById("genero").style.borderWidth = "3px";
    esValido = false;
  }
  if (actores == "") {
    document.getElementById("actores").style.borderColor = "red";
    document.getElementById("actores").style.borderWidth = "3px";
    esValido = false;
  }
  if (guion == "") {
    document.getElementById("guion").style.borderColor = "red";
    document.getElementById("guion").style.borderWidth = "3px";
    esValido = false;
  }
  if (produccion == "") {
    document.getElementById("produccion").style.borderColor = "red";
    document.getElementById("produccion").style.borderWidth = "3px";
    esValido = false;
  }
  if (nacionalidad == "") {
    document.getElementById("nacionalidad").style.borderColor = "red";
    document.getElementById("nacionalidad").style.borderWidth = "3px";
    esValido = false;
  }
  if (director == "") {
    document.getElementById("director").style.borderColor = "red";
    document.getElementById("director").style.borderWidth = "3px";
    esValido = false;
  }
  if (document.getElementById("textarea") == "") {
    document.getElementById("textarea").style.borderColor = "red";
    document.getElementById("textarea").style.borderWidth = "3px";
    esValido = false;
  }

  return esValido;
}
